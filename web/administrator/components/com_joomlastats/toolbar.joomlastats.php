<?PHP
	/**
	* @version $Id: toolbar.joomlastats.php 150 2006-11-17 22:56:45Z enzo1982 $
	* @package JoomlaStats
	* @copyright Copyright (C) 2004-2006 JoomlaStats Team. All rights reserved.
	* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
	*/
	
	// ensure this file is being included by a parent file
	defined('_VALID_MOS') or die ('Direct Access to this location is not allowed.');

	require_once($mainframe->getPath('toolbar_html'));
		
	switch ($task)
	{
		case "tldlookup":
			break;
		case "getconf":
		case "purgedb":
			menu_joomlastats::CONFIG_MENU();
			break;
		case "uninstall":
			menu_joomlastats::UNINSTALL_MENU();
			break;
		case "summinfo":
			menu_joomlastats::SUMMARISE_MENU();
			break;
		default:
			menu_joomlastats::DEFAULT_MENU();
			break;		
	}	
?>