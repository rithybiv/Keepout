<? 
// Copyright (C) 2003 Chanh Ong
// All rights reserved.
// This source file is part of the COMBO - Comments on Articles
// custom Component By Chanh Ong - http://ongetc.com
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
//
// admin class functions
?>
<?
function removeComment( $database, $cid, $option ) {
  if (count( $cid )) {
    $cids = implode( ',', $cid );
    $database->setQuery( "DELETE FROM mos_content_comments WHERE id IN ($cids)" );
    if (!$database->query()) { echo "<script> alert('".$db->getErrorMsg()."'); window.history.go(-1); </script>\n"; }
  }
  mosRedirect( "index2.php?option=$option" );
}

function pubComment($database, $cid, $option) {
      if (count( $cid )) {
      $cids = implode( ',', $cid );
         $enterSQL = "UPDATE mos_content_comments SET published='1' WHERE id IN ($cids)";
         $database->setQuery($enterSQL );
				if (!$database->query()) { echo "<script> alert('".$db->getErrorMsg()."'); window.history.go(-1); </script>\n"; }
      }
      mosRedirect( "index2.php?option=$option" );
}

function unpubComment($database, $cid, $option) {
      if (count( $cid )) {
				$cids = implode( ',', $cid );
				$enterSQL = "UPDATE mos_content_comments SET published='0'  WHERE id IN ($cids)";
				$database->setQuery($enterSQL );
				if (!$database->query()) { echo "<script> alert('".$db->getErrorMsg()."'); window.history.go(-1); </script>\n";  }
     }
			mosRedirect( "index2.php?option=$option" );
}

function showInstructions($database, $option, $mosConfig_lang) {
      HTML_COMMENTS::showInstructions( $database, $option, $mosConfig_lang);
}

function showConfig( $database, $option, $mosConfig_lang ) {
      include_once("components/com_comments/comments_config.php");
      $configfile = "components/com_comments/comments_config.php";
      @chmod ($configfile, 0766);
      $permission = is_writable($configfile);
      if (!$permission) {
      echo "<center><h1><font color=red>Warning...</FONT></h1><BR>";
      echo "<B>Your config file is /administrator/$configfile</b><BR>";
      echo "<B>You need to chmod this to 766 in order for the config to be updated</B></center><BR><BR>";
      }
			echo "<!-- Version ".mc_this_version()." -->";
			HTML_COMMENTS::showConfig( $database, $option, $mosConfig_lang);
   }

function saveConfig ($database, $option, $pt_admin_email, $pt_email_alerts, $pt_review, $pt_email_alerts_user, 
  $pt_regonly, $pt_updates, $pt_donated, $pt_force_preview, $pt_hide_comments,$mc_hide_url) {
//Add code to check if config file is writeable.
      $configfile = "components/com_comments/comments_config.php";
      @chmod ($configfile, 0766);
      $permission = is_writable($configfile);
      if (!$permission) {
      $mosmsg = "Config File Not writeable";
      mosRedirect("index2.php?option=$option&act=config",$mosmsg);
      break;
      }

   //TODO: Add code to save config to file sumo_config.php
         $txt = "";
         $txt .= "\$pt_admin_email = \"$pt_admin_email\";\n";
         $txt .= "\$pt_email_alerts=\"$pt_email_alerts\";\n";
         $txt .= "\$pt_email_alerts_user=\"$pt_email_alerts_user\";\n";
         $txt .= "\$pt_review=\"$pt_review\";\n";
         $txt .= "\$pt_regonly=\"$pt_regonly\";\n";
         $txt .= "\$pt_updates=\"$pt_updates\";\n";
         $txt .= "\$pt_donated=\"$pt_donated\";\n";
         $txt .= "\$pt_force_preview=\"$pt_force_preview\";\n";
         $txt .= "\$pt_hide_comments=\"$pt_hide_comments\";\n";
         $txt .= "\$mc_hide_url=\"$mc_hide_url\";\n";

			echo "$txt";
                  //$txt = "\$$v = \"".addslashes( $sumovars )."\";\n";
                $config = "<?php\n";
               $config .= $txt;
               $config .= "";
               $config .= "?>";
                  if ($fp = fopen("$configfile", "w")) {
               fputs($fp, $config, strlen($config));
               fclose ($fp);
                     }
   // Tell me it is saved
  if ($pt_donated=="1") { mc_sendme(); }
   $mosmsg = "saved config";
    mosRedirect("index2.php?option=com_comments&task=showconfig",$mosmsg);
}

?>