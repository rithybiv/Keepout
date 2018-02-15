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

function listcomments ($pt_row) 	{
global $mosConfig_lang;
include_once ( 'language/'.$mosConfig_lang.'.php' );
include ("administrator/components/com_comments/comments_config.php");
	$pt_commentslist .= "<a name=\"comments\"></A><img src=\"administrator/components/com_comments/images/key.gif\" border=0>&nbsp;&nbsp;";
	$pt_commentslist .= "<font class=bodytext><b>".stripslashes($pt_row->entry)."</b></font><BR><font class=bodytext>
	$_COM_C_POST ".stripslashes($pt_row->name).",";

	if (!$pt_row->homepage || $pt_row->homepage == "http://") { $pt_row->homepage = ""; } 
  else if ($mc_hide_url=="0") { $pt_commentslist .= " $_COM_C_HOMEPAGE <A href='$pt_row->homepage'>$pt_row->homepage</A>"; }

	$pt_date = mosFormatDate(strftime("%Y-%m-%d %H:%M:00", strtotime($pt_row->date)), _DATE_FORMAT_LC);
	$pt_commentslist .= " $_COM_C_DATE_ON $pt_date $_COM_C_DATE_AT $pt_row->time</font><p />";
//	$pt_commentslist .= " $_COM_C_DATE_ON $pt_row->date $_COM_C_DATE_AT $pt_row->time</font><p />";
	echo $pt_commentslist;
}

function doShowDefault($database, $id, $task, $my_id, $mosConfig_lang, $option, $pt_show, $start){
//check in config to see if we only show the form when registered user and then show or not show as the case may be
	if ( isset($id) && $task=="view") { doShowForm($database, $id, $task, $my_id, $mosConfig_lang, $option, $pt_show, $start); }
}

function doShowForm($database, $id, $task, $my_id, $mosConfig_lang, $option, $pt_show, $start) {
	echo "<!-- host: ".$_SERVER['HTTP_HOST'] ." -->";
// must be here otherwise it won't show
	$mcpath = "components/com_comments"; 
	$mcapath = "administrator/$mcpath/";  // from administrator folder
	include($mcapath."comments_config.php");
	if (file_exists($mcapath.$mosConfig_lang.'_lang.php')) { include($mcapath.$mosConfig_lang.'_lang.php'); }
	else { include($mcapath.'eng_lang.php'); }

	$pt_commentsform = "";
	$pt_commentslist = "";

	$pt_rows = mc_SelQuery("SELECT * FROM mos_content_comments where articleid=$id AND published=1 order by id DESC");
	$pt_numrows= count($pt_rows);
	
	if ($pt_hide_comments =="1" ) {
		echo "<P align=center><a href=\"index.php?option=$option&task=view&id=$id&pt_show=1#comments\">$_COM_C_COM_NUMBER</a> ($pt_numrows) - <a href=\"index.php?option=$option&task=view&id=$id&pt_show=1#form\">$_COM_C_ADD_COM</a></P>";
	}

	if ($pt_show && $pt_hide_comments == "1") { $pt_show ="1"; }
	if ($pt_hide_comments == "0") { $pt_show ="1"; }
	if ($pt_regonly=="1" && $pt_show=="0") { $pt_show="1"; }
	if ($pt_show =="1") { mc_page($pt_rows, $option, $id, $start); }

/*
	if ($pt_numrows > "0") {
		
		$k = 0;
		for ($i=0, $n=count( $pt_rows ) ; $i < $n; $i++) {
			$pt_row =& $pt_rows[$i];
	 // list all the comments
	 // starts on at 1
			if ($pt_show && $pt_hide_comments == "1") { $pt_show ="1"; }
			if ($pt_hide_comments == "0") { $pt_show ="1"; }
			if ($pt_regonly=="1" && !$my_id) {
				$pt_show ="0";
				if (!$show_not_auth) { $show_not_auth ="1"; }
			}
			if ($pt_regonly=="1" && $pt_show=="0") { $pt_show="1"; }
			if ($pt_show =="1") { listComments($pt_row); }
			$k = 1 - $k;
		}
	}
*/
	if ($pt_regonly == "1" || $my_id <> "") {
// get username
		$pt_rows5 = mc_SelQuery("SELECT * FROM #__users where id = $my_id");
		$pt_i5 = 0;
		foreach($pt_rows5 as $pt_row5)  {
		 $ART[$pt_i5] = $pt_row5->name;
		 $ART1[$pt_i5] = $pt_row5->email;
		}
		$reg_name = $ART[$pt_i5];
		$reg_email = $ART1[$pt_i5];
	}

	if ($pt_regonly == "0" && !$my_id) {
		$reg_name = "";
		$reg_email = "";
	}

	if ($pt_show && $pt_hide_comments == "1") { $pt_show ="1"; }
	if ($pt_hide_comments == "0") { $pt_show ="1"; }

	if ($pt_regonly=="1" && !$my_id) {
		$pt_show ="0";
		$pt_reg_only_check ="1";
		if (!$show_not_auth) { $show_not_auth ="1"; }
	}

	if ($pt_show =="1") { 
		HTML_MAIN::showForm ( $id, $reg_name, $reg_email ); 
	}

	if ($show_not_auth == "1"){ 	
	  echo "<div align=center><B>$_COM_C_NOT_AUTH</b></div>"; 
	}

} //end function

function pt_AddComment( $database, $id, $pt_comment_name, $pt_comment_email, $pt_comment_homepage, $pt_comment, $return, $mosConfig_live_site, $pt_email_alerts_user, $mosConfig_lang) {
// must be here otherwise it won't show
	$mcpath = "components/com_comments"; 
	$mcapath = "administrator/$mcpath/";  // from administrator folder
	include($mcapath."comments_config.php");
	if (file_exists($mcapath.$mosConfig_lang.'_lang.php')) { include($mcapath.$mosConfig_lang.'_lang.php'); }
	else { include($mcapath.'eng_lang.php'); }

	if (!$pt_comment_name || !$pt_comment_email || !$pt_comment){ mosRedirect("index.php?option=content&task=view&id=$id", $_COM_C_FULLY ); }
	//Add comment to db
	 $pt_date = date("F j, Y");
	 $pt_time = date("g:i a");
	// does admin want to review or not???
	//yes would be "I want to review = 1 " therefore ispub = 0
	if ($pt_review == "0")  { $isPub = "1"; }
	if ($pt_review == "1")  { $isPub = "0"; }

// filter input before insert
global $mosConfig_absolute_path;
$inpfilter = $mosConfig_absolute_path . '/includes/phpInputFilter/class.inputfilter.php';
if (file_exists($inpfilter)) {
  require_once($inpfilter);
  $iFilter = new InputFilter();
        $pt_comment_name = trim( $iFilter->process( $pt_comment_name ) );
        $pt_comment_email = trim( $iFilter->process( $pt_comment_email ) );
        $pt_comment_homepage = trim( $iFilter->process( $pt_comment_homepage ) );
        $pt_comment = trim( $iFilter->process( $pt_comment ) ); 
}
// filter input before insert
        
//	$pt_comment=mysql_escape_string($pt_comment); 
        $pt_comment_name = mysql_real_escape_string( $pt_comment_name ) ;
        $pt_comment_email = mysql_real_escape_string( $pt_comment_email ) ;
        $pt_comment_homepage = mysql_real_escape_string( $pt_comment_homepage ) ;
        $pt_comment = mysql_real_escape_string( $pt_comment ) ; 
					 
	mc_ExecQuery("INSERT INTO `mos_content_comments` 
	  (`articleid`, `id`, `entry`, `name`, `email`, `homepage`, `date`, `time`, `published`) 
	  VALUES ('$id', '', '$pt_comment', '$pt_comment_name', '$pt_comment_email', '$pt_comment_homepage', '$pt_date', '$pt_time', '$isPub')
						");
  mc_sendalert($id, $pt_comment, $pt_comment_name, $pt_comment_email, $pt_comment_homepage, $pt_date, $pt_time);
}

function  mc_sendalert($id, $pt_comment, $pt_comment_name, $pt_comment_email, $pt_comment_homepage, $pt_date, $pt_time) {
global $mosConfig_live_site;
global $database;
// must be here otherwise it won't show
	$mcpath = "components/com_comments"; 
	$mcapath = "administrator/$mcpath/";  // from administrator folder
	include($mcapath."comments_config.php");
	if (file_exists($mcapath.$mosConfig_lang.'_lang.php')) { include($mcapath.$mosConfig_lang.'_lang.php'); }
	else { include($mcapath.'eng_lang.php'); }

	$pt_rows = mc_SelQuery("Select title, id from #__content where id=$id");

	$pt_i = 0;
	foreach($pt_rows as $pt_row)  { 
		$ART[$pt_i] = $pt_row->title; 										 }
		if ($pt_email_alerts == "1") {
			$subject = "$_COM_C_NEW_COM $mosConfig_live_site";
			$msg = "$_COM_C_HAVE_NEW\n";
			$msg .= $pt_row->title."\n\n";
			$msg .= "$_COM_C_LOGIN\n\n";
			$msg .= "$_COM_C_QUICKLINK: $mosConfig_live_site/administrator\n\n";
			$msg .= _COM_A_NAME_SUB . ": $pt_comment_name\n";
			$msg .= _COM_A_EMAIL_SUB .": $pt_comment_email\n";
			$msg .= $_COM_C_HOMEPAGE . ": $pt_comment_homepage\n";
			$msg .= _COM_A_COMMENT . ": $pt_comment\n";
			$msg .= "$pt_date - $pt_time\n\n";
			$msg .= "\n\n\n\n\n";
			$msg .= "**Comments on Articles Script (MosCom) released by Chanh Ong base on Combo **";
			mail($pt_admin_email, $subject, $msg, 'From: '.$pt_admin_email);  //Send to admin
		}
		if ($pt_email_alerts_user == "1") {
			$subject = "$_COM_C_THANKS $mosConfig_live_site....";
			$msg = "$_COM_C_THANKS2:\n";
			$msg .= $pt_row->title."\n\n";
			$msg .= "$_COM_C_ADMIN_REV \n\n";
			$msg .= "$_COM_C_ENTERED:\n";
			$msg .= _COM_A_NAME_SUB . ": $pt_comment_name\n";
			$msg .= _COM_A_EMAIL_SUB .": $pt_comment_email\n";
			$msg .= $_COM_C_HOMEPAGE . ": $pt_comment_homepage\n";
			$msg .= _COM_A_COMMENT . ": $pt_comment\n";
			$msg .= "$pt_date - $pt_time\n\n";
			$msg .= "\n\n$_COM_C_VISIT: $mosConfig_live_site\n\n\n";
			$msg .= "**Comments on Articles Script (MosCom) released by Chanh Ong base on Combo **";
			mail($pt_comment_email, $subject, $msg, 'From: '.$pt_admin_email);  //Send to user
		}
	if ($pt_review == "0")  { mosRedirect("$return", "$_COM_C_THANKS3"); } else { mosRedirect("$return", "$_COM_C_THANKS4"); }
}

function mc_page($pt_rows, $option, $id, $start) {
    $thispage = "index.php?option=$option&task=view&id=$id&pt_show=1";
    $num = count($pt_rows); // number of items in list
    $per_page = 5; // Number of items to show per page
    $showeachside = 5; //  Number of items to show either side of selected page
    if (empty($start)) $start=0;  // Current start position
    $max_pages = ceil($num / $per_page); // Number of pages
    $cur = ceil($start / $per_page)+1; // Current page number
?>
<style type="text/css">
<!--
.pageselected {
    color: #FF0000;
    font-weight: bold;
}
-->
</style>
<?php for($x=$start;$x<min($num,($start+$per_page)+1);$x++) { listComments($pt_rows[$x]); } ?>
<hr>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="PHPBODY" id="table0">
	<tr>
		<td width="15%">&nbsp;</td>
		<td width="70%">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="PHPBODY" id="table1">
<tr>
<td width="15%" align="center" valign="middle"><?php if(($start-$per_page) >= 0) { $next = $start-$per_page; ?> 
<a href="<?php print("$thispage".($next>0?("&start=").$next:""));?>">Prev Page</a>
<?php } ?>
&nbsp;</td>
<td width="52%" align="center" valign="middle" class="selected">
&nbsp;<?php
$eitherside = ($showeachside * $per_page);
if($start+1 > $eitherside) print (" .... ");
$pg=1;
for($y=0;$y<$num;$y+=$per_page) {   
    $class=($y==$start)?"pageselected":"";
    if(($y > ($start - $eitherside)) && ($y < ($start + $eitherside))) {
	?>
&nbsp;<a class="<?php print($class);?>" href="<?php print("$thispage".($y>0?("&start=").$y:""));?>"><?php print($pg);?></a>&nbsp;
<?php
    }
    $pg++;
}
if(($start+$eitherside)<$num)print (" .... ");
?>
</td>
<td width="105" align="center" valign="middle"><?php if($start+$per_page<$num) { ?> 
<a href="<?php print("$thispage&start=".max(0,$start+$per_page));?>">Next Page</a>
<?php } ?>
&nbsp;</td></tr>
<tr><td width="25%" align="center" valign="middle">
</td>
<td width="52%" align="center" valign="middle" class="selected">
Page <?php print($cur);?> of <?php print($max_pages);?> ( <?php print($num);?> comments )
</td>
<td width="105" align="center" valign="middle">
</td></tr>
<tr><td colspan="3" align="center"></td></tr>
</table></td>
	<td width="15%">&nbsp;</td>
	</tr>
	</table>
<? } ?>
