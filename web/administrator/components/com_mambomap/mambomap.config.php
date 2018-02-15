<?php

// This is a wrapper to load the configuration from mambomap.cfg.php

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

$_MAMBOMAP_CFG_FILE = '/administrator/components/com_mambomap/mambomap.cfg.php';
$_MAMBOMAP_CFG_CLASS = 'MAMBOMAP_CFG_1_1';
@include_once( $GLOBALS['mosConfig_absolute_path'].$_MAMBOMAP_CFG_FILE );
if( !class_exists($_MAMBOMAP_CFG_CLASS) ) {
	//if configuration doesn't exist, set defaults
	class MAMBOMAP_CFG_1_1 {
	var $title = 'Sitemap';
	var $classname = 'sitemap';
	var $expand_category = 1;
	var $expand_section = 1;
	var $expand_pshop = 1;
	var $show_menutitle = false;
	var $columns = 1;
	
	var $menus = array();
	};
}
$mambomap_cfg = new MAMBOMAP_CFG_1_1();
foreach( $mambomap_cfg->menus as $key => $val) $mambomap_cfg->menus[$key] = (object) $val;
?>
