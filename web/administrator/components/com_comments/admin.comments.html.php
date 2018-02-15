<?php
// Copyright (C) 2003 Chanh Ong
// All rights reserved.
// This source file is part of the COMBO - Comments on Articles
// custom Component By Chanh Ong - http://ongetc.com
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
//
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
include_once("components/com_comments/common.php");

class HTML_COMMENTS {

      function Main($database, $option, $uid, $name, $email, $homepage, $entry, $pt_date, $pt_time, $search, $pageNav, $articleid, $pub, $mosConfig_lang) {
      include_once("components/com_comments/comments_config.php");
      if (file_exists('components/com_comments/'.$mosConfig_lang.'_lang.php')) { include_once('components/com_comments/'.$mosConfig_lang.'_lang.php'); } 
      else { include_once('components/com_comments/eng_lang.php'); }

         // Check to see if user wants to know about new version and then tell him about it if available.
         ?>
         <table width="100%" height="90" border="1" cellpadding="0" cellspacing="0" bordercolor="#999999" bgcolor="#FFFFFF">
                   <TR><TD width="180" align="center" valign="middle">                      <strong>
                      <script type="text/javascript">
                  var windowW = 485 // wide
                  var windowH = 385 // high

                  var windowX = (screen.width/2)-(windowW/2);
                  var windowY = (screen.height/2)-(windowH/2);

                  var urlPop = "components/com_comments/about.php"

                  s = "width="+windowW+",height="+windowH+",scrollbars=no";
                  var beIE = document.all ? true : false

                  function openAbout(){
                  var urlPop = "components/com_comments/about.php"
                     NFW=window.open(urlPop,"popFrameless",+s)
                     NFW.blur()
                     window.focus()
                     NFW.resizeTo(windowW,windowH)
                     NFW.moveTo(windowX,windowY)

                     NFW.focus()
                  }

               function openUpdate(my_ver){
                  var windowW = 485 // wide
                  var windowH = 50 // high

                  var windowX = (screen.width/2)-(windowW/2);
                  var windowY = (screen.height/2)-(windowH/2);


                  s = "width="+windowW+",height="+windowH+",scrollbars=no";
                  var beIE = document.all ? true : false

               var urlPop = 'http://ongetc.com/static/combo_version.php?popup=1&myver=' + my_ver
                     NFW=window.open(urlPop,"popFrameless",+s)
                     NFW.blur()
                     window.focus()
                     NFW.resizeTo(windowW,windowH)
                     NFW.moveTo(windowX,windowY)

                     NFW.focus()
                  }                               </script>
                      <img src="components/com_comments/images/review.jpg" width="110" height="102"> </strong> </TD>
                   <TD align="left" valign="top">
               <table width="100%" height="133" border="0" align="center" cellpadding="4" cellspacing="4">
							 <tr>
                 <TD width="56%" align="left" valign="top"><p><a href="index2.php?option=dbadmin&task=dbBackup"><?php echo _COM_A_BACKUP ?></a> ::
                   <?php echo _COM_A_BACKUP_DESC ?><br>
                        <a href="index2.php?option=dbadmin&task=dbRestore"><?php echo _COM_A_RESTORE ?></a> ::
                        <?php echo _COM_A_RESTORE_DESC ?></p>
                   <p><a href="index2.php?option=com_comments&task=showconfig"><?php echo _COM_A_CONFIG ?></a> :: <?php echo _COM_A_CONFIG_DESC ?><br>
                     <a href="index2.php?option=com_comments&task=showinstructions"><?php echo _COM_A_INSTRUCTIONS ?></a> :: <?php echo _COM_A_INSTRUCTIONS_DESC ?>
                   </p><? echo mc_mkgoogleadsjs("left"); ?></TD>
                 <TD width="44%" align="left" valign="top">
                 <p>
                   <a href="javascript:openAbout();"><?php echo _COM_A_ABOUT ?></a> :: <?php echo _COM_A_ABOUT_DESC?><br>
                   <a href="http://ongetc.com" target="_blank"><?php echo _COM_A_LINK ?></a> :: <?php echo _COM_A_LINK_DESC ?><br>
		<a href="javascript:openUpdate('<? mc_version(); ?>')">
		<?php echo _COM_A_CHECK ?></a> : <? mc_your_version(); ?>
                   <br><a href="index2.php?option=com_comments">Refresh</a> :: Refresh this page
                   <br /><? echo _COM_A_DONATE; mc_donate(); ?>
<? if ($pt_updates == "1") { ?>
<iframe src="http://ongetc.com/static/moscom_version.php?myver=<? mc_version(); ?>" width="100%" height="50" scrolling="no" frameborder="0" class="adminForm"></iframe>
<? } ?>
                 </TD>
                 </TR>
                </table>
               </TD>
</TR> </table>
               <form action="index2.php" method="post" name="adminForm">
                 <table cellpadding="4" cellspacing="0" border="0" width="100%">
                  <tr>
                    <td width="100%" class="sectionname"><?php echo _COM_A_REVIEW ?></td>
                    <td nowrap="nowrap"><?php echo _COM_A_DISPLAY ?></td>
                    <td> <?php echo $pageNav->writeLimitBox(); ?> </td>
                    <td>Search:</td>
                    <td> <input type="text" name="search" value="<?php echo $search;?>" class="inputbox" onChange="document.adminForm.submit();" />
                    </td>
                  </tr>
                 </table>
                 <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
                  <tr>
                    <th width="3%" class="title"> <input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($uid); ?>);" />
                    </th>
                    <th width="16%" class="title"><?php echo _COM_A_NAME_SUB ?></th>
                    <th width="6%" class="title"><?php echo _COM_A_EMAIL_SUB ?></th>
                    <th width="7%" class="title"><?php echo _COM_A_HOMEPAGE ?></th>
                    <th width="39%" class="title"><?php echo _COM_A_COMMENT ?></th>
                    <th width="21%" class="title"><?php echo _COM_A_ARTICLE ?></th>
                    <th width="8%" class="title"><?php echo _COM_A_PUBLISHED ?></th>
                  </tr>
                  <?php
                        $color = array("#FFFFFF", "#CCCCCC");
                        $k = 0;
                        for ($i = 0; $i < count($uid); $i++) { ?>
                  <tr class="<?php echo "row$k"; ?>">
                    <td width="3%" valign="top"><input type="checkbox" id="cb<?php echo $i;?>" name="cid[]" value="<?php echo $uid[$i]; ?>" onClick="isChecked(this.checked);" /></td>
                    <td width="16%" align="left" valign="top"> <a href="#edit" onclick="return listItemTask('cb<?php echo $i;?>','edit')">
                      </a>                       <? echo $name[$i]; ?> </td>
                    <td width="6%" align="left" valign="top"><?

                    echo "<a href=\"mailto:$email[$i]\">[Link]</A>"; ?></td>
                    <td width="7%" align="center" valign="top"><?

                    if (!$homepage[$i] || $homepage[$i] == "http://" || $homepage[$i] == "http:///"){
                    echo "None";
                    } else {
                     echo "<a href=\"$homepage[$i]\" target=_blank>[Link]</A>";
                     }
                     ?></td>
                    <td width="39%" align="left" valign="top"><? echo $entry[$i]; ?></td>
                    <td width="21%" align="left" valign="top"><?

                    $pt_sql = "Select title, id from #__content where id=$articleid[$i]";
                    $database->setQuery($pt_sql);

                    $pt_rows = $database->loadObjectList();
		if ($pt_rows) {
      $pt_i = 0;
      foreach($pt_rows as $pt_row) { $ART[$pt_i] = $pt_row->title; }
      if (strlen($ART[$pt_i]) < 50) { $add_txt = ""; }
      if (strlen($ART[$pt_i]) > 50) { $add_txt = "..."; }
      $art_txt = substr($ART[$pt_i], 0, 50) . $add_txt;
      echo "<a href=\"../index.php?option=content&task=view&id=$articleid[$i]\" target=_blank>$art_txt</A>";
		}
	?>
                  </td>
                    <td width="8%" align="left" valign="top">
                      <div align="center">
                        <? if ($pub[$i] == "1") { ?><img src="images/tick.png" border="0"><? } else { } ?>
                      </div></td>
                  </tr>
                  <?php $k = 1 - $k;
                        } ?>
                  <tr><th align="center" colspan="7"> <?php echo $pageNav->writePagesLinks(); ?></th></tr>
                  <tr><td align="center" colspan="7"> <?php echo $pageNav->writePagesCounter(); ?></td></tr>
                 </table>
                 <input type="hidden" name="option" value="<?php echo $option; ?>" />
                 <input type="hidden" name="task" value="" />
                 <input type="hidden" name="boxchecked" value="0" />
               </form>
<? HTML_COMMENTS::mc_footer_about(); ?>
<?
} //end function main

// Make option array yes or no
function mc_mkoption() {
  global $mosConfig_lang;
  $mcpath = "components/com_comments/";  // from administrator folder
  include($mcpath."comments_config.php");
  if (file_exists($mcpath.$mosConfig_lang.'_lang.php')) { include($mcpath.$mosConfig_lang.'_lang.php'); } 
  else { include($mcpath.'eng_lang.php'); }
  $ryesno[] = mosHTML::makeOption( '0', $_COM_A_NO );
  $ryesno[] = mosHTML::makeOption( '1', $_COM_A_YES );
  return $ryesno;
}

function mc_mkselectlist($iname,$istring) {
  $iyesno = HTML_COMMENTS::mc_mkoption();
  $itosend = mosHTML::selectList( $iyesno, $iname, 'class="inputbox" size="2"', 'value', 'text', $istring);
  return $itosend;               
}

function showConfig($database, $option,$mosConfig_lang) {
global $mosConfig_lang;
      include("components/com_comments/comments_config.php");
      if (file_exists('components/com_comments/'.$mosConfig_lang.'_lang.php')) { include_once('components/com_comments/'.$mosConfig_lang.'_lang.php'); } 
      else { include_once('components/com_comments/eng_lang.php'); }
   ?>
<form action="index2.php?task=saveconfig" method="post" name="adminForm" class="adminForm" id="adminForm">
  <table width="90%" border="0" cellpadding="2" cellspacing="2" class="adminForm">
<TR>
                    <td class="sectionname" colspan="3"><div align="center"><?php echo _COM_A_CONFIG ?></div></td>
   </TR>
    <tr align="center" valign="middle">
      <td width="17%">&nbsp;</td>
      <td width="17%"><strong><?php echo _COM_A_CURRENT_SETTINGS ?></strong></td>
      <td width="66%"><strong><?php echo _COM_A_EXPLANATION ?></strong></td>
    </tr>
    <tr align="center" valign="middle">
      <td align="left" valign="top"><strong><?php echo _COM_A_ADMIN_EMAIL ?></strong></td>
      <td align="left" valign="top">
        <input type="text" name="pt_admin_email" value="<? echo "$pt_admin_email"; ?>">
    </td>
      <td align="left" valign="top"><?php echo _COM_A_ADMIN_EMAIL_DESC ?></td>
    </tr>
    <tr align="center" valign="middle">
      <td align="left" valign="top"><strong><?php echo _COM_A_ADMIN_ALERTS ?></strong></td>
      <td align="left" valign="top"><? echo HTML_COMMENTS::mc_mkselectlist('pt_email_alerts', $pt_email_alerts); ?></td>
      <td align="left" valign="top"><?php echo _COM_A_ADMIN_EMAIL_ENABLE ?></td>
    </tr>  <tr align="center" valign="middle">
      <td align="left" valign="top"><strong><?php echo _COM_A_VISITOR_EMAIL ?></strong></td>
      <td align="left" valign="top"><? echo HTML_COMMENTS::mc_mkselectlist('pt_email_alerts_user', $pt_email_alerts_user); ?></td>
      <td align="left" valign="top"><?php echo _COM_A_VISITOR_EMAIL_DESC ?></td>
    </tr>
    <tr align="center" valign="middle">
      <td align="left" valign="top"><strong><?php echo _COM_A_REVIEW_SUBM ?></strong></td>
      <td align="left" valign="top"><? echo HTML_COMMENTS::mc_mkselectlist('pt_review', $pt_review); ?>
      </td>
      <td align="left" valign="top"><?php echo _COM_A_REVIEW_DESC ?></td>
    </tr>
    <tr align="center" valign="middle">
      <td align="left" valign="top"><strong><?php echo _COM_A_REGISTERED_ONLY ?></strong></td>
      <td align="left" valign="top"><? echo HTML_COMMENTS::mc_mkselectlist('pt_regonly', $pt_regonly);  ?>
      </td>
      <td align="left" valign="top"><?php echo _COM_A_REG_ONLY_DESC ?></td>
    </tr> <tr align="center" valign="middle">
      <td align="left" valign="top"><strong><?php echo _COM_A_NOTIFY_VERSION ?></strong></td>
      <td align="left" valign="top"><? echo HTML_COMMENTS::mc_mkselectlist('pt_updates', $pt_updates);  ?>
      </td>
      <td align="left" valign="top"><?php echo _COM_A_NOT_VER_DESC ?></td>
    </tr><tr align="center" valign="middle">
      <td align="left" valign="top"><strong><?php echo _COM_A_HAVE_DONATED ?></strong></td>
      <td align="left" valign="top"><? echo HTML_COMMENTS::mc_mkselectlist('pt_donated', $pt_donated);  ?>
      </td>
      <td align="left" valign="top"><?php echo _COM_A_DONATE2 ?></td>
    </tr>
		<tr align="center" valign="middle">
      <td align="left" valign="top"><strong><?php echo _COM_A_FORCE_PREVIEW ?></strong></td>
      <td align="left" valign="top"><? echo HTML_COMMENTS::mc_mkselectlist('pt_force_preview', $pt_force_preview);  ?>
      </td>
      <td align="left" valign="top"><?php echo _COM_A_FORCE_PREVIEW_TEXT ?></td>
    </tr>
	<tr align="center" valign="middle">
      <td align="left" valign="top"><strong><?php echo _COM_A_HIDE ?></strong></td>
      <td align="left" valign="top"><? echo HTML_COMMENTS::mc_mkselectlist('pt_hide_comments', $pt_hide_comments);  ?>
      </td>
      <td align="left" valign="top"><?php echo _COM_A_HIDE_DESC ?></td>
    </tr>
<tr align="center" valign="middle">
      <td align="left" valign="top"><strong><?php echo _COM_A_HIDE_URL ?></strong></td>
      <td align="left" valign="top"><? echo HTML_COMMENTS::mc_mkselectlist('mc_hide_url', $mc_hide_url);  ?>
      </td>
      <td align="left" valign="top"><?php echo _COM_A_HIDE_URL_DESC ?></td>
    </tr>
	<tr align="center" valign="middle"><td colspan="3" align="left" valign="top"><p>&nbsp;</p></td></tr>
	<tr align="center" valign="middle"><td colspan="3" align="left" valign="top"></td></tr>
</table>

  <input type="hidden" name="task" value="" />
  <input type="hidden" name="act" value="<?php echo $act; ?>" />
  <input type="hidden" name="option" value="<?php echo $option; ?>" />
</form>

<table width="90%" border="0" cellpadding="2" cellspacing="2" class="adminForm"><TR><TD>
   <form action="http://ongetc.com/mailman/subscribe/dev_ongetc.com" method="post" target="_blank">
      <input name="email" type="hidden" class="inputbox" value="<? echo "$pt_admin_email"; ?>" />
      <input name="email-button" size="30" width="30" type="submit" class="button" value="  <? echo _COM_A_SUBSCRIBE; ?>  " />
   </form>
</TD><TD><? echo _COM_A_KEEPUPTODATE; ?></TD></TR></table>
<? HTML_COMMENTS::mc_mkaboutjs() ?><? HTML_COMMENTS::mc_footer_about(); ?>
<? }

function showInstructions($database, $option, $mosConfig_lang) {
      if (file_exists('components/com_comments/'.$mosConfig_lang.'_lang.php')) { include_once('components/com_comments/'.$mosConfig_lang.'_lang.php'); } 
      else { include_once('components/com_comments/eng_lang.php'); }
   ?>
<form action="index2.php" method="post" name="adminForm" class="adminForm" id="adminForm">
  <table width="90%" border="0" cellpadding="2" cellspacing="2" class="adminForm">
<TR><td width="100%" class="sectionname"><div align="center"><?php echo _COM_A_INSTRUCTIONS_DESC ?></div></td></TR>
    <tr align="center" valign="middle">
      <td align="left" valign="top"><p><strong><font color="#FFCC00"><?php echo _COM_A_IMPORTANT_NOTE ?>:</font></strong> <br>
       <?php echo _COM_A_TEMPLATE ?> :</p>
               <p><strong>include_once(&quot;mainbody.php&quot;); ?&gt;</strong></p>
	OR<br /><p><strong>mosMainBody(); ?&gt;</strong></p>
	<p><?php echo _COM_A_CHANGE_TO ?>:</p>   
        <p><strong>include_once(&quot;mainbody.php&quot;); ?&gt;</strong>
               <strong>&lt;?php
if (file_exists($mosConfig_absolute_path.&quot;/components/com_comments/comments.php&quot;)) 
{ require_once($mosConfig_absolute_path.&quot;/components/com_comments/comments.php&quot;); }
               ?&gt;</strong></p>
        OR<br />
        <p><strong>mosMainBody(); ?&gt;</strong>
               <strong>&lt;?php 
if (file_exists($mosConfig_absolute_path.&quot;/components/com_comments/comments.php&quot;)) 
{ require_once($mosConfig_absolute_path.&quot;/components/com_comments/comments.php&quot;); }
               ?&gt;</strong></p>
        <p><?php echo _COM_A_HAVE_FUN ?></td>
    </tr>
  </table>

  <input type="hidden" name="task" value="" />
       <input type="hidden" name="act" value="<?php echo $act; ?>" />
  <input type="hidden" name="option" value="<?php echo $option; ?>" />
</form><? HTML_COMMENTS::mc_mkaboutjs() ?><? HTML_COMMENTS::mc_footer_about(); ?>
<? 
}

function mc_footer_about() { 
echo HTML_COMMENTS::mc_mkaboutjs(); 
?>
<br /><?php echo _COM_A_MOS_BY ?> <a href="javascript:openAbout();">
<font class="small">Chanh Ong</font></a><br /><? mc_your_version(); ?>
<? }

function mc_mkaboutjs() { ?>
<script type='text/javascript'>
function openAbout(){
var windowW = 485; // wide
var windowH = 385; // high
var windowX = (screen.width/2)-(windowW/2);
var windowY = (screen.height/2)-(windowH/2);
var urlPop = 'components/com_comments/about.php';
s = 'width='+windowW+',height='+windowH+',scrollbars=no';
var beIE = document.all ? true : false;
NFW=window.open(urlPop,'popFrameless',+s);
NFW.blur();
window.focus();
NFW.resizeTo(windowW,windowH);
NFW.moveTo(windowX,windowY);
NFW.focus();
}</script>
<? }

function mc_mkupdatejs($my_ver) { ?>
<script type="text/javascript">
function openUpdate(my_ver){
var windowW = 485 // wide
var windowH = 50 // high
var windowX = (screen.width/2)-(windowW/2);
var windowY = (screen.height/2)-(windowH/2);
s = "width="+windowW+",height="+windowH+",scrollbars=no";
var beIE = document.all ? true : false
var urlPop = 'http://ongetc.com/static/combo_version.php?popup=1&myver=' + my_ver
NFW=window.open(urlPop,"popFrameless",+s)
NFW.blur()
window.focus()
NFW.resizeTo(windowW,windowH)
NFW.moveTo(windowX,windowY)
NFW.focus()
}                               
</script>
<? }

} //end class
?>

