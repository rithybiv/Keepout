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

//error_reporting(E_ALL);
error_reporting(E_ALL ^ E_NOTICE);  

require_once( $mainframe->getPath( 'admin_html' ) );
// Get the right language if it exists
if( !isset( $mosConfig_lang ) ) { $mosConfig_lang=$mainframe->getCfg( 'lang' ); }
include_once("components/com_comments/admin.comments.class.php");
include_once("components/com_comments/common.php");

$pt_stop ="0";
      switch ($task) {
			case "remove":
				$pt_stop ="1";
				removeComment($database, $cid, $option);
				break;
			case "publish":
				$pt_stop ="1";
				pubComment($database, $cid, $option);
				break;
			case "unpublish":
				$pt_stop ="1";
        unpubComment($database, $cid, $option);
        break;
			case "cancel":
				$pt_stop ="1";
        mosRedirect("index2.php?option=com_comments", $msg);
        break;
			case "showconfig":
			  $pt_stop ="1";
        showConfig($database, $option, $mosConfig_lang);
        break;
			case "showinstructions":
				$pt_stop ="1";
        showInstructions($database, $option, $mosConfig_lang);
        break;
      case "saveedit":
				$pt_stop ="1";
        saveConfig ($database, $option, $pt_admin_email, $pt_email_alerts, $pt_review, $pt_email_alerts_user, $pt_regonly, $pt_updates, $pt_donated, $pt_force_preview, $pt_hide_comments, $mc_hide_url);
        break;
      }

			switch ($act) 			{
				case "instructions":
					$pt_stop ="1";
					showInstructions($database, $option, $mosConfig_lang);
          break;
				case "config":
					$pt_stop ="1";
					showConfig($database, $option, $mosConfig_lang);
					break;
			}

if ($pt_stop=="0") { showMain($database, $option, $mosConfig_lang); }

// functions
function showMain($database, $option,$mosConfig_lang)    {
   $search = trim( strtolower( mosGetParam( $_POST, 'search', '' ) ) );
   $limit = intval( mosGetParam( $_POST, 'limit', 10 ) );
   $limitstart = intval( mosGetParam( $_POST, 'limitstart', 0 ) );
   $where = "";
   if (isset($search) && $search!= "") {
      $where = " WHERE entry LIKE '%$search%' OR name LIKE '%$search%' OR email LIKE '%$search%'";
   }
   $query = "SELECT id FROM mos_content_comments $where ORDER BY id DESC";
   $database->setQuery($query);
   if(!$result = $database->query()) { die($database->stderr(true)); }
   $total = $database->getNumRows($result);

   if ($limit > $total) { $limitstart = 0; }
   $query2 = "SELECT * FROM mos_content_comments" . $where ." ORDER BY id DESC LIMIT $limitstart, $limit";
   $database->setQuery($query2);
   $pt_total = $database->getNumRows($result);
	if(!$pt_total = $database->getNumRows($result) || !$search)    {
      echo "<div class=adminForm><B>Please enter a dummy record in the frontend to continue - thanks<BR>You can ignore the following message<BR></B><P></DIV>";
      die($database->stderr(true));
   }
   if (!$pt_total || $pt_total < "1"){ mosRedirect ("index2.php?option=com_comments", "No items matched search expression");  }
   if(!$database->query())  { die($database->stderr(true)); }
   $rows = $database->loadObjectList();
	if ($rows) { 
  $i = 0;
   foreach($rows as $row)    {
      $uid[$i] = $row->id;
      $articleid[$i] = $row->articleid;
      $name[$i] = $row->name;
      $email[$i] = $row->email;
      $homepage[$i] = $row->homepage;
      $pt_date[$i] = $row->date;
      $pt_time[$i] = $row->time;
      $entry[$i] = $row->entry;
      $pub[$i] = $row->published;
      $i++;
   }
   include_once("includes/pageNavigation.php");
   $pageNav = new mosPageNav( $total, $limitstart, $limit  );
   if (!$pt_total || $pt_total < "1"){    echo "Please enter a dummy record in the frontend to continue - thanks";    } 
	 else {
		HTML_COMMENTS::Main($database, $option, $uid, $name, $email, $homepage, $entry, $pt_date, $pt_time, $search, $pageNav, $articleid, $pub, $mosConfig_lang);
   }
}
}

?>
