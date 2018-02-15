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

if ( class_exists ('HTML_MAIN') )  {  return;  }  
class HTML_MAIN {

// functions that mix php and html
function pt_AddPreview( $database, $id, $pt_comment_name, $pt_comment_email, $pt_comment_homepage, $pt_comment, $return, $mosConfig_live_site, $pt_email_alerts_user, $mosConfig_lang) 	{
HTML_MAIN::doPreview ($database, $id, $pt_comment_name, $pt_comment_email, $pt_comment_homepage, $pt_comment, $return, $mosConfig_live_site, $pt_email_alerts_user, $mosConfig_lang);
?>
<a href="javascript:window.history.go(-1);">Cancel</a>
<?
}

function doPreview ($database, $id, $pt_comment_name, $pt_comment_email, $pt_comment_homepage, $pt_comment, $return, $mosConfig_live_site, $pt_email_alerts_user, $mosConfig_lang) 	{
global $mosConfig_lang,$mosConfig_live_site;
if (file_exists('administrator/components/com_comments/'.$mosConfig_lang.'_lang.php')) { include('administrator/components/com_comments/'.$mosConfig_lang.'_lang.php');
} else { include('administrator/components/com_comments/eng_lang.php'); }
?>
	<div class="componentheading" align="left">Please check your entry...</div>
	<p align="left"><? echo _CONTACT_FORM_NC; ?></p>
	<table width="68%" align="center">
	<TR><TD width="13%" align="left" valign="top"><strong><? echo _COM_A_NAME_SUB; ?></strong>:</TD><TD width="87%" align="left" valign="top"><? echo $pt_comment_name; ?></TD>	  </TR>
	<TR><TD align="left" valign="top"><strong><? echo _COM_A_EMAIL_SUB; ?></strong></TD><TD align="left" valign="top"><? echo $pt_comment_email; ?></TD>	</TR>
	<TR>
	<TD align="left" valign="top"><strong><? echo _COM_A_HOMEPAGE; ?></strong>:</TD>
	<TD align="left" valign="top"><? echo $pt_comment_homepage; ?> [<a href="<? echo $pt_comment_homepage; ?>" target="_blank">CHECK LINK</a>]</TD>
	</TR>
	<TR><TD align="left" valign="top"><strong><? echo _COM_A_COMMENT; ?></strong>:</TD><TD align="left" valign="top"><? echo $pt_comment; ?></TD></TR>
	</table>
	<? $pt_post_string ="index.php?option=com_comments&task=pt_addcomment&id=$id"; 	?>
	<form method="post" action="<? echo $pt_post_string; ?>" name="commentForm" id="commentForm">
      <input name="return" type="hidden" value="index.php?option=content&task=view&id=<? echo $id; ?>">
      <input type="hidden" name="pt_comment_name" style="width:300px;" class="inputbox" value="<? echo $pt_comment_name;  ?>">
      <input type="hidden" name="pt_comment_email" style="width:300px;" class="inputbox" value="<? echo $pt_comment_email; ?>">
      <input type="hidden" name="pt_comment_homepage" style="width:300px;" class="inputbox" value="<? echo $pt_comment_homepage; ?>">
      <input type="hidden" name="pt_comment" style="width:300px;" class="inputbox" value="<? echo $pt_comment; ?>">
      <input type="submit" name="pressbutton" value="<? echo $_COM_C_SUBMIT; ?>" style="width: 100px;" class="button">
  </form>
<?
}

function showForm ( $id, $reg_name, $reg_email ) {
include ("administrator/components/com_comments/comments_config.php");
global $mosConfig_lang;
global $mosConfig_live_site;
if (file_exists('administrator/components/com_comments/'.$mosConfig_lang.'_lang.php')) { include('administrator/components/com_comments/'.$mosConfig_lang.'_lang.php');
} else { include('administrator/components/com_comments/eng_lang.php'); }
?>
<div align='center'>
<a name="form"></A>
<? if ($pt_donated == "0") { mc_mkgoogleadslinkjs("center"); }?>
<hr width=100% size=1>
<div class="ModuleHeading"><? echo $_COM_C_ADD_COM; ?></div>
	 <?
	 // If force preview is on.... change post string.
//	 $pt_post_string ="index.php?option=com_comments&task";
	 $pt_post_string ="index.php?option=com_comments";
	 if ($pt_force_preview=="1") { $pt_post_string .="&task=pt_preview&id=$id"; } 
	 else { $pt_post_string .= "&task=pt_addcomment&id=$id"; }
	 ?>
<form method="post" action="<? echo $pt_post_string; ?>" name="commentForm" id="commentForm">
<input name="return" type="hidden" value="index.php?option=content&task=view&id=<? echo $id; ?>"><br />
<div class=text><? echo $_COM_C_NAME; ?></div>
<input type="text" name="pt_comment_name" style="width:288px;" class="inputbox" value="<? if ($reg_name) { echo $reg_name; } ?>" <?  if ($reg_name) { ?> readonly  <?  } ?> >
<br /><br />
<div class=text><? echo $_COM_C_EMAIL; ?></div>
<input type="text" name="pt_comment_email" style="width:288px;" class="inputbox" value="<? if ($reg_email) { echo $reg_email; } ?>" <? if ($reg_email) { ?> readonly  <? } ?> >
<div class="smalltext"><? echo $_COM_C_EMAIL_NOT; ?></div>
<br />
<? if ($mc_hide_url=="0") { HTML_MAIN::mc_show_url(); }?>
<div class="text"><? echo $_COM_C_COM; ?></div>
<textarea name="pt_comment" cols="60" rows="7" class="inputbox"></textarea>
<br />
<input type="submit" name="pressbutton" value="<? echo $_COM_C_SUBMIT; ?>" style="width: 100px;" class="button" onclick="validate()">
 <input type="reset" name="pressbutton" value="<? echo $_COM_C_RESET; ?>" style="width: 100px;" class="button">
</form>
<!-- The wonderful world of open source make it easy to change the code any way you wish!  I kindly ask 
please notify me and make a donation at http://ongetc.com before you decide to remove this line, thanks -->
<div class="smalltext">&copy;2005 <a href="http://ongetc.com">MosCom</a> <? mc_version() ?></div>
<!-- A request from the author of MosCom, Chanh Ong -->
</div>
<? 
} 

function noComments ($id) { 
?>
	<BR><P><B><? echo $_COM_C_NO_COM; ?></b></P>
<? }

function mc_show_url() {
global $mosConfig_lang;
if (file_exists('administrator/components/com_comments/'.$mosConfig_lang.'_lang.php')) { include('administrator/components/com_comments/'.$mosConfig_lang.'_lang.php');
} else { include('administrator/components/com_comments/eng_lang.php'); }
	echo $_COM_C_HOMEPAGE_IN; ?>
	<br /><input 
	<? if ($reg_name =="Administrator") { ?>readonly<? } ?> type="text" name="pt_comment_homepage" style="width:288px;" class="inputbox" value="<?
		  if ($reg_name =="Administrator") { global $mosConfig_live_site; echo $mosConfig_live_site; } 
			else { ?>http://<? } ?>">
<br /><br />
<?
} 

} //end class
?>
