<?
// Copyright (C) 2003 Chanh Ong
// All rights reserved.
// This source file is part of the COMBO - Comments on Articles
// custom Component By Chanh Ong - http://ongetc.com
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
//
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>About</title>
  <link rel="stylesheet" type="text/css" href="about.css" title="style-sheet">
  <style type="text/css">
.content {
<?php
global $mosConfig_absolute_path;
include_once("common.php");
if (file_exists($mosConfig_lang.'_lang.php')) { include_once($mosConfig_lang.'_lang.php'); } else { include_once('eng_lang.php'); }

function display_about($section) {
global $platform, $browser, $version;

$style = "\n";
switch ($section) {
case "content":
  $style .= "position: ".$pos.";\n";
  $style .= "left: 10px;\n";
  $style .= "top: 201px\n";
case "tabs":
  $style .= "position: ".$pos.";\n";
  $style .= "left: 10px;\n";
  $style .= "top: 184px\n";
}
return $style;
}
?>
<?display_about("content") ?>
width: 440px;
height: 135px;
padding: 0px;
margin: 0px;
padding: 2px 5px 2px 5px;
border: 1px solid #000000;
z-index: 500;
font-family: Verdana, Arial, sans-serif;
background-color: #FFFFFF
}
#content2,#content3,#content4,#content5 {
z-index: 1;
visibility: hidden
}
#tabs {
<? display_about("tabs") ?>
height: 22px;
white-space: nowrap;
font-size: 10pt;
font: Menu;
font-family: Verdana, Arial, sans-serif;
cursor: default !important;
font-weight: 700 !important;
white-space: nowrap;
z-index: 10000
}
.tab {
font: inherit;
position: relative;
border: 1px solid #000000;
padding: 2px 9px 1px 9px;
background-color: #CCCCCC;
color: #303036;
z-index: 100;
border-bottom: 0px
}
.tabActive {
padding: 3px 9px 1px 9px;
color: #000000 !important;
background-color: #FFFFFF !important;
top: 1px;
z-index: 10000;
border-bottom: 0px
}
.tabHover {
border: 1px solid #347;
padding: 2px 9px 1px 9px;
background-color: #46596f;
border: 1px solid #000000;
color: #fff;
z-index: 1200;
border-bottom: 0;
}
  </style>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" width="509">
  <tbody>
    <tr>
      <td rowspan="2" align="center" valign="middle"><img
 src="images/review.jpg"> </td>
      <td colspan="2" align="right"><a
 href="javascript:parent.window.focus();top.window.close()">Close Window</a></td>
    </tr>
    <tr>
      <td align="left" valign="top">
      <table border="0" width="394">
        <tbody>
          <tr><td>Name:&nbsp;</td><td><strong>MosCom</strong></td></tr>
          <tr><td>Author:&nbsp;</td><td>Chanh Ong &lt;<a href="http://ongetc.com" class="internal" target="_blank">OngETC.com</a>&gt;</td>          </tr>
          <tr><td>Copyright:&nbsp;</td><td>Copyright &copy; <a href="http://ongetc.com" target="_blank">Chanh Ong</a></td></tr>
          <tr>
					<td valign="top">Details:&nbsp;</td>
					<td valign="top"><div align="justify">This component allows you to see comments visitors make to article/content on your site.<br></div></td>
          </tr>
        </tbody>
      </table>
      </td>
    </tr>
    <tr>
      <td colspan="2"><br>
      <script language="javascript" src="dhtml.js"></script>
      <table border="0" cellpadding="2" cellspacing="0" width="104%">
        <tbody>
          <tr>
            <td class="tabpadding" width="">&nbsp;</td>
            <td id="tab1" class="ontab"
 onclick="dhtml.cycleTab(this.id)">Credits</td>
            <td id="tab2" class="offtab"
 onclick="dhtml.cycleTab(this.id)">License</td>
            <td id="tab3" class="offtab"
 onclick="dhtml.cycleTab(this.id)">Support</td>
            <td id="tab4" class="offtab"
 onclick="dhtml.cycleTab(this.id)">Donations</td>
            <td id="tab5" class="offtab"
 onclick="dhtml.cycleTab(this.id)">Mailing
List</td>
            <td class="tabpadding" width="90%">&nbsp;</td>
          </tr>
        </tbody>
      </table>
      <div id="page1" class="content">
      <table border="0" cellpadding="1" cellspacing="1" width="505">
        <tbody>
          <tr>
            <td>&nbsp;<img src="images/key.gif" alt="" height="8"
 width="8">&nbsp;<a href="http://www.mamboserver.com" target="_blank"
 class="internal"><b>Mambo Team</b></a></td>
            <td width="309">For a wonderful CMS! - Thanks!</td>
          </tr>
          <tr>
            <td>&nbsp;<img src="images/key.gif" alt="" height="8"
 width="8">&nbsp;<a href="http://help.mamboserver.com" target="_blank"
 class="internal"><b>Mambo help</b></a></td>
            <td width="309"> For help on Mambo</td>
          </tr>
          <tr>
            <td>&nbsp;<img src="images/key.gif" alt="" height="8"
 width="8">&nbsp;<a href="mailto:chanh.ong@gmail.com" class="internal"><b>Chanh
Ong</b></a></td>
            <td width="309"> For the base Commenting system</td>
          </tr>
          <tr>
            <td>Many contributors</td>
            <td width="309"> Please see credit.txt for more detail</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td width="309">&nbsp;</td>
</tr>
        </tbody>
      </table>
      </div>
      <div id="page2" class="content">
      <table border="0" cellpadding="1" cellspacing="1" width="505">
        <tbody>
          <tr>
            <td width="501"><iframe style="width: 435px; height: 127px;"
 src="license.php"></iframe>
            </td>
          </tr>
        </tbody>
      </table>
      </div>
      <div id="page3" class="content">
      <table border="0" cellpadding="1" cellspacing="1" width="504">
        <tbody>
          <tr>
            <td width="156">&nbsp;<img src="images/key.gif" alt=""
 height="8" width="8">&nbsp;<a
 href="http://www.mamboserver.com/fudforum" target="_blank"
 class="internal"><b>Mambo forums</b></a></td>
            <td width="341">The Main Mamboserver Forums - Best Place!</td>
          </tr>
          <tr>
            <td>&nbsp;<img src="images/key.gif" alt="" height="8"
 width="8"><a href="mailto:chanh.ong@gmail.com" target="_blank"
 class="internal"><b>
Email Request</b></a></td>
            <td>I will do my best to reply! - May take Time</td>
          </tr>
          <tr>
            <td>&nbsp;<img src="images/key.gif" alt="" height="8"
 width="8"><a href="http://ongetc.com" target="_blank" class="internal"><b>
Authors Website </b></a></td>
            <td>Check out the forums or articles here first!</td>
          </tr>
          <tr>
            <td>&nbsp;<img src="images/key.gif" alt="" height="8"
 width="8"><a href="mailto:chanh.ong@gmail.com" target="_blank"
 class="internal"><b>
Custom Development </b></a></td>
            <td>I will change code for a fee - Ask for details</td>
          </tr>
        </tbody>
      </table>
      </div>
      <div id="page4" class="content">
      <table border="0" width="503">
        <tbody>
          <tr>
            <td align="center" valign="middle">
            <p>Help me keep this product free by donating a little money towards my costs. ~Thanks~</p>
<? mc_donate() ?>
            </td>
          </tr>
        </tbody>
      </table>
      </div>
      <div id="page5" class="content">
      <table border="0" cellpadding="1" cellspacing="1" width="502">
        <tbody>
          <tr>
            <td width="498">
            <table align="center" cellpadding="0" cellspacing="0"
 width="304">
              <tbody>
                <tr>
                  <td align="center" valign="top" width="302">
                  <p><br>
                  <strong>Announcement list</strong><br>
Please enter your email address below and we will keep you up to date on the progress of this component.</p>
                  <form method="post"
 action="http://ongetc.com/mailman/subscribe/dev_ongetc.com"
 target="_blank"> <input name="email" class="inputbox"
 value="you@yourmail.com" type="text"><input name="submit"
 class="button" value="Proceed" type="submit"> <input name="action"
 value="subscribe" type="hidden"><input name="group_ids[]" value="8"
 type="hidden">
                  </form>
                  </td>
                </tr>
              </tbody>
            </table>
            </td>
          </tr>
        </tbody>
      </table>
      </div>
      <script language="javascript" type="text/javascript"> dhtml.cycleTab('tab1');</script>
      <br>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>
