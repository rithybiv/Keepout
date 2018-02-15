<?
// Copyright (C) 2003 Chanh Ong
// All rights reserved.
// This source file is part of the COMBO - Comments on Articles
// custom Component By Chanh Ong - http://ongetc.com
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
//
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

error_reporting(E_ALL ^ E_NOTICE);

$moscom_path="components/com_comments";
include_once ("administrator/$moscom_path/common.php");
include_once ("$moscom_path/comments.html.php");
include_once ("$moscom_path/comments.class.php");
switch ($task) {
case "pt_addcomment":
	if (preg_match("/^(http:\/\/)?([^\/]+)/i",$_SERVER['HTTP_HOST'], $mosConfig_live_site)) {
		pt_AddComment( $database, $id, $pt_comment_name, $pt_comment_email, $pt_comment_homepage, $pt_comment, $return, $mosConfig_live_site, $pt_email_alerts_user, $mosConfig_lang);
	}
	break;
case "pt_preview":
	HTML_MAIN::pt_AddPreview( $database, $id, $pt_comment_name, $pt_comment_email, $pt_comment_homepage, $pt_comment, $return, $mosConfig_live_site, $pt_email_alerts_user, $mosConfig_lang);
	break;
default:
	$my_id = $my->id;
	echo "<!-- id $my_id, $my->id -->";
	doShowDefault( $database, $id, $task, $my_id, $mosConfig_lang, $option, $pt_show, $start);
	break;
}
?>
