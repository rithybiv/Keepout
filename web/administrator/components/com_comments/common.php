<? 
// Copyright (C) 2003 Chanh Ong
// All rights reserved.
// This source file is part of the COMBO - Comments on Articles
// custom Component By Chanh Ong - http://ongetc.com
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
//
// common function
?>
<? function xmc_get_version() { global $pt_version; $pt_version="0.5.8.5d"; return $pt_version; } ?>

<?
// need more testing
function mc_this_version() {
	global $mosConfig_absolute_path; 
	$mcpath = "components/com_comments/";  // from administrator folder
	require_once( $mosConfig_absolute_path . '/includes/domit/xml_domit_lite_parser.php' );
	$xmlfile = $mosConfig_absolute_path . "/administrator/components/com_comments/comments.xml";
	$xmlDoc =& new DOMIT_Lite_Document();
	$xmlDoc->resolveErrors( true );
	if (!$xmlDoc->loadXML( $xmlfile, false, true )) { 	continue; 	}
	$element = &$xmlDoc->documentElement;
	if ($element->getTagName() != 'mosinstall') { 	continue; 	}
	$element = &$xmlDoc->getElementsByPath('version', 1);
	$mc_version = $element ? $element->getText() : '';
	return $mc_version;
} 
?>

<? function mc_version() { echo mc_this_version(); } ?>

<? function mc_sendme() { global $mosConfig_mailfrom,  $mosConfig_live_site; mail("chanh.ong@gmail.com", "MosCom ".mc_this_version()." Donated", $mosConfig_live_site, 'From: '.$mosConfig_mailfrom); } ?>

<? function mc_donate() { ?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="chanh.ong@gmail.com">
<input type="hidden" name="item_name" value="Review Comments Donations">
<input type="hidden" name="item_number" value="Review Comments Donations">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="cn" value="What is your website address?">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="tax" value="0">
<input type="image" src="https://www.paypal.com/images/x-click-but21.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
</form>
<? } ?>

<? function mc_your_version() { ?>
<font class="small"><?php echo _COM_A_VERSION ?>: <? mc_version(); ?></font>
<? }?>

<?
function mc_SelQuery($mc_query) {
global $database;
	$database->setQuery($mc_query);
	$mc_rows = $database->loadObjectList();
	return $mc_rows;
}

function mc_ExecQuery($mc_query) {
global $database;
	$database->setQuery($mc_query);
	$database->query();
}
?>

<?
function mc_set_ads() {
global $mosConfig_live_site;
$pub_ads = "pub-4432509506627047";
//if (ereg("opensourcecms", $mosConfig_live_site)) { $pub_ads = "pub-4432509506627047"; } else { $pub_ads = "pub-9422996293210018"; }
echo "google_ad_client = \"$pub_ads\";\n"; 
}

function mc_mkgoogleadslinkjs($iposition) { ?>
<div style='<? if ($iposition) {echo "float:$iposition";} ?>; margin-top:2px ; margin-left:2px ; margin-right:2px ; margin-bottom:2px ;'>
<script type="text/javascript"><!--
<? mc_set_ads() ?>
google_ad_width = 468;
google_ad_height = 15;
google_ad_format = "468x15_0ads_al";
google_ad_channel ="9352230477";
google_color_border = "E9EFF5";
google_color_bg = "FFFFFF";
google_color_link = "CCCCCC";
google_color_url = "008000";
google_color_text = "000000";
//--></script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<? } 

function mc_mkgoogleadsjs($iposition) { ?>
<div style='<? if ($iposition) {echo "float:$iposition";} ?>; margin-top:2px ; margin-left:2px ; margin-right:2px ; margin-bottom:2px ;'>
<script type="text/javascript"><!--
<? mc_set_ads() ?>
google_ad_width = 234;
google_ad_height = 60;
google_ad_format = "234x60_as";
google_ad_type = "text";
google_ad_channel ="";
google_color_border = "E9EFF5";
google_color_bg = "FFFFFF";
google_color_link = "0000FF";
google_color_url = "008000";
google_color_text = "000000";
//--></script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<? } 
