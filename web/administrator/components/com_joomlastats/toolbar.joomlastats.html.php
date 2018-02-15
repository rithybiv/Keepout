<?PHP
	/**
	* @version $Id: toolbar.joomlastats.html.php 117 2006-05-12 12:35:24Z RoBo $
	* @package JoomlaStats
	* @copyright Copyright (C) 2004-2006 PJH Diender. All rights reserved.
	* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
	*/
	
	// ensure this file is being included by a parent file
	defined('_VALID_MOS') or die ('Direct Access to this location is not allowed.');

	class menu_joomlastats 
	{
		/*
		 *  Draws the menu for configuration of JoomlaStats
		 */
		 
		function CONFIG_MENU()
		{
			mosMenuBar::startTable();
			mosMenuBar::save('saveconf');
			mosMenuBar::spacer();
			mosMenuBar::custom('stats','back.png','back_f2.png','retour',false);
			mosMenuBar::spacer();
			mosMenuBar::endTable();
		}
		
		function UNINSTALL_MENU()
		{
			mosMenuBar::startTable();
			mosMenuBar::custom('uninstalltask','delete.png','delete_f2.png','vider',false);
			mosMenuBar::spacer();
			mosMenuBar::custom('stats','back.png','back_f2.png','retour',false);
			mosMenuBar::spacer();
			mosMenuBar::endTable();
		}
		
		function SUMMARISE_MENU()
		{
			mosMenuBar::startTable();
			mosMenuBar::custom('summtask','archive.png','archive_f2.png','archivage',false);
			mosMenuBar::spacer();
			mosMenuBar::custom('stats','back.png','back_f2.png','retour',false);
			mosMenuBar::spacer();
			mosMenuBar::endTable();
		}
		
		function DEFAULT_MENU()
		{
			mosMenuBar::startTable();
			mosMenuBar::custom('stats','../components/com_joomlastats/images/home.png','../components/com_joomlastats/images/home.png','stats',false);
			mosMenuBar::spacer();
			mosMenuBar::custom('getconf','../components/com_joomlastats/images/config.png','../components/com_joomlastats/images/config.png','config',false);
			mosMenuBar::spacer();
			mosMenuBar::custom('viewip','switch.png','switch_f2.png','exclure',false);
			mosMenuBar::spacer();
			mosMenuBar::custom('summinfo','archive.png','archive_f2.png','archivage',false);
			mosMenuBar::spacer();
			mosMenuBar::custom('tldlookup','search.png','search_f2.png','tldlookup',false);
			mosMenuBar::spacer();
			mosMenuBar::custom('info','help.png','help_f2.png','info',false);
			mosMenuBar::spacer();
			mosMenuBar::custom('uninstall','delete.png','delete_f2.png','Désinstaller',false);
			mosMenuBar::spacer();
			mosMenuBar::spacer();
			mosMenuBar::endTable();
		}
	}	
?>