<?php
/*
	MamboMap (c) Daniel Grothe
	a sitemap component for Mambo CMS (http://www.mamboserver.com)
	with support for: phpshop categories, mambo content
	Author Website: http://www.ko-ca.com/
	Project License: GNU/GPL http://www.gnu.org/copyleft/gpl.html
	Project Website: http://mambomap.mamboforge.net/
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

require_once( $mainframe->getPath( 'admin_html' ) );

$task 		= mosGetParam( $_REQUEST, 'task', array(0) );
$type 		= mosGetParam( $_POST, 'type', '' );
$cid 		= mosGetParam( $_POST, 'cid', '' );

require_once( $GLOBALS['mosConfig_absolute_path'].'/administrator/components/com_mambomap/mambomap.config.php' );

// populate the $menus array
// necessary if the cfg was not saved at least once before, or if a new menu has been created
function populateMenus() {
	global $mambomap_cfg;
	$menutypes = mosAdminMenus::menutypes();
	$cfg_menus = &$mambomap_cfg->menus;
	foreach ( $menutypes as $key => $val ) {
		if( !isset($cfg_menus[$val]) ) {
			$cfg_menus[$val]->ordering = $key+1;
			$cfg_menus[$val]->show = false;
		}
	}
}
populateMenus();

//DEBUG: dump POST input
//echo '<pre style="padding:2px;width:100%;text-align:left;border:1px solid red;">'.print_r($_POST,true).'</pre>';

switch ($task) {
	case 'save':
		saveOptions( );
		break;
	case 'cancel':
		mosRedirect( 'index2.php' );
		break;
	case 'publish':
		toggleMenu( $cid[0], true );
		break;
	case 'unpublish':
		toggleMenu( $cid[0], false );
		break;
	case 'orderup':
		orderMenu( $cid[0], -1 );
		break;
	case 'orderdown':
		orderMenu( $cid[0], 1 );
		break;
	default:
		showMenu( );
		break;
}

/* Helper function used to sort menus with usort */
function cmpOrdering($a, $b) {
	if( @$a->ordering == @$b->ordering) {
		return 0;
	}
	return @$a->ordering < @$b->ordering ? -1 : 1;
}

/* Show the list of menus */
function showMenu( ) {
	global $mainframe, $mosConfig_list_limit, $mambomap_cfg;

	$limit 		= $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $mosConfig_list_limit );
	$limitstart = $mainframe->getUserStateFromRequest( "viewlimitstart", 'limitstart', 0 );

	$menutypes 	= mosAdminMenus::menutypes();
	$total		= count( $menutypes );
	$cfg_menus	= &$mambomap_cfg->menus;
	$i			= 0;

	foreach ( $menutypes as $key => $val ) {
		$menus[$i]->id = $key;
		$menus[$i]->type = $val;
		$menus[$i]->checked_out = false;
		
		$menus[$i]->ordering = $cfg_menus[$val]->ordering;
		$menus[$i]->show = $cfg_menus[$val]->show;
		++$i;
	}
	
	usort($menus, 'cmpOrdering');

	require_once( $GLOBALS['mosConfig_absolute_path'] . '/administrator/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit  );

	HTML_mambomap::show( $menus, $pageNav );
}

function saveOptions( ) {
	global $mambomap_cfg;
	
	$mambomap_cfg->title = mosGetParam( $_POST, 'title', 'Sitemap' );
	$mambomap_cfg->classname = mosGetParam( $_POST, 'classname', 'sitemap' );
	$mambomap_cfg->expand_category = mosGetParam( $_POST, 'expand_category', '0' );
	$mambomap_cfg->expand_section = mosGetParam( $_POST, 'expand_section', '0' );
	$mambomap_cfg->expand_pshop = mosGetParam( $_POST, 'expand_pshop', '0' );
	$mambomap_cfg->show_menutitle = mosGetParam( $_POST, 'show_menutitle', '0' );
	$mambomap_cfg->columns = intval(mosGetParam( $_POST, 'columns', '1' ));
	if($mambomap_cfg->columns < 1)
		$mambomap_cfg->columns = 1;
	
	$menutypes 	= mosAdminMenus::menutypes();
	$order 		= mosGetParam( $_POST, 'order', '0' );
	$cfg_menus	= &$mambomap_cfg->menus;
	
	foreach($order as $key => $val) {
		$type = $menutypes[$key];
		$cfg_menus[$type]->ordering = $val;
	}
	
	saveConfig($mambomap_cfg);

	showMenu();
}

/* Move the display order of a record */
function orderMenu( $uid, $inc ) {
	global $mambomap_cfg;
	
	$cfg_menus	= &$mambomap_cfg->menus;
	$menutypes 	= mosAdminMenus::menutypes();
	
	$type = $menutypes[$uid];
	$cfg_menus[$type]->ordering = $cfg_menus[$type]->ordering + $inc;

	foreach ( $menutypes as $key => $val) {
		if( ($val != $type) && ($cfg_menus[$val]->ordering == $cfg_menus[$type]->ordering) ) {
			$cfg_menus[$val]->ordering -= $inc;
		}
	}
	
	saveConfig($mambomap_cfg);
	
	showMenu();
}

function toggleMenu( $uid, $show ) {
	global $mambomap_cfg;
	
	$cfg_menus	= &$mambomap_cfg->menus;
	$menutypes 	= mosAdminMenus::menutypes();
	
	$type = $menutypes[$uid];
	$cfg_menus[$type]->show = $show;
	
	saveConfig($mambomap_cfg);
	
	showMenu();
}

/* save the configuration file */
function saveConfig( $config ) {
	global $_MAMBOMAP_CFG_FILE, $_MAMBOMAP_CFG_CLASS;
	
	//make order numbers contiguous
	$cfg_menus = &$config->menus;
	uasort($cfg_menus, 'cmpOrdering');
	$i = 0;
	foreach($cfg_menus as $key => $val)
		$cfg_menus[$key]->ordering = ++$i;
	
	// QUICKFIX: var_export() cannot export objects ...
	foreach($cfg_menus as $key => $val)
		$cfg_menus[$key] = (array) $cfg_menus[$key];
	
	$vars = get_object_vars($config);
	//static header
	$out = "<?php\n"
		."defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );\n"
		."if( !class_exists('{$_MAMBOMAP_CFG_CLASS}') ) {\n"
		."class {$_MAMBOMAP_CFG_CLASS} {\n";
	
	//configuration variables
	foreach($vars as $key => $value){
		if( is_array( $value ) ){
			$out .= "var \${$key} = ".var_export($value, true).";\n" ; 
		}else{
			$out .= "var \${$key} = \"{$value}\";\n" ; 
		}
	}
	
	//static footer
	$out .= "}}\n"
		."?>\n";
		
	// REVERT QUICKFIX: var_export() cannot export objects ...
	foreach($cfg_menus as $key => $val)
		$cfg_menus[$key] = (object) $cfg_menus[$key];
	
	//try to overwrite configuration file
	$fp = fopen($GLOBALS['mosConfig_absolute_path'].$_MAMBOMAP_CFG_FILE, "w");
	if ($fp) { 
    	fputs($fp, $out, strlen($out)); 
     	fclose ($fp); 
    	return true;
  	} else {
  		die('<h2>Failed to save the configuration file .<br />'
  		.'Please verify/fix write permissions.<br /></h2>'
  		.'Config file: '.$_MAMBOMAP_CFG_FILE.'<br />');
  	}
  	
  	
  	return false;
}

?>