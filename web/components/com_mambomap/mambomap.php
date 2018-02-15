<?php
/*
	MamboMap (c) Daniel Grothe
	a sitemap component for Mambo CMS (http://www.mamboserver.com)
	with support for: phpshop categories, content items
	Author Website: http://www.ko-ca.com/
	Project License: GNU/GPL http://www.gnu.org/copyleft/gpl.html
	Project Website: http://mambomap.mamboforge.net/
*/

defined('_VALID_MOS') or die('Direct Access to this location is not allowed.');

require_once( $mainframe->getPath('front_html') );
require_once( $GLOBALS['mosConfig_absolute_path'].'/administrator/components/com_mambomap/mambomap.config.php' );

// output sitemap as html
$sitemap = new HtmlSitemap($mambomap_cfg);
$sitemap->showSitemap();
?>