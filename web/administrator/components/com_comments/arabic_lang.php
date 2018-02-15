<?php
// Copyright (C) 2003 Chanh Ong
// All rights reserved.
// This source file is part of the COMBO - Comments on Articles
// custom Component By Chanh Ong - http://ongetc.com
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
// translated by Fuga http://dndon.net
//admin.comments.html.php

DEFINE('_COM_A_KEEPUPTODATE','≈–« √—œ  «·≈‘ —«ﬂ ›Ì ﬁ«∆„… «· ÕœÌÀ«  ≈÷€ÿ ⁄·Ï  «·“—');
DEFINE('_COM_A_SUBSCRIBE','≈‘ —«ﬂ');
DEFINE('_COM_A_UNSUBSCRIBE','≈‰”Õ«»');
DEFINE('_COM_A_BACKUP','‰”Œ… ≈Õ Ì«ÿÌ…');
DEFINE('_COM_A_BACKUP_DESC','⁄„· ‰”Œ… «Õ Ì«ÿÌ… „‰ mos_content_comments');
DEFINE('_COM_A_RESTORE','≈” ⁄«œ…');
DEFINE('_COM_A_RESTORE_DESC','≈” ⁄«œ… «·‰”Œ… «·≈Õ Ì«ÿÌ… „‰ mos_content_comments');
DEFINE('_COM_A_CONFIG','«· ⁄œÌ·« ');
DEFINE('_COM_A_CONFIG_DESC','Õ›Ÿ «· ⁄œÌ·« ');
DEFINE('_COM_A_INSTRUCTIONS','«· ⁄·Ì„« ');
DEFINE('_COM_A_INSTRUCTIONS_DESC','ÿ—Ìﬁ…  ‰’Ì» «·»—‰«„Ã');
DEFINE('_COM_A_ABOUT','⁄‰ «·»—‰«„Ã');
DEFINE('_COM_A_ABOUT_DESC','⁄‰ Â–« «·»—‰«„Ã');
DEFINE('_COM_A_LINK','—«»ÿ');
DEFINE('_COM_A_LINK_DESC','·„‰ Ã «·»—‰«„Ã');
DEFINE('_COM_A_CHECK','«· √ﬂœ „‰ ÊÃÊœ  ÕœÌÀ« ');
DEFINE('_COM_A_VERSION','≈’œ«—ﬂ ÂÊ ');
DEFINE('_COM_A_DONATE','Ì—ÃÏ «·÷€ÿ ⁄·Ï √⁄·«‰ «·Ì«ÂÊ √Ê ⁄·Ï «·√ﬁ· ﬁ„ »œ⁄„ «·»—‰«„Ã » »—⁄ »”Ìÿ');
DEFINE('_COM_A_REVIEW','⁄—÷ «· ⁄·Ìﬁ«  ( «·√ÕœÀ √Ê·« )');
DEFINE('_COM_A_DISPLAY','⁄—÷ #');
DEFINE('_COM_A_NAME_SUB','«·≈”„');
DEFINE('_COM_A_EMAIL_SUB','«·»—Ìœ');
DEFINE('_COM_A_HOMEPAGE','«·„Êﬁ⁄');
DEFINE('_COM_A_COMMENT','«· ⁄·Ìﬁ');
DEFINE('_COM_A_ARTICLE','«·„ﬁ«·…');
DEFINE('_COM_A_PUBLISHED','„‰‘Ê—');
DEFINE('_COM_A_MOS_BY','»—‰«„Ã «· ⁄·Ìﬁ«  »Ê«”ÿ…');
DEFINE('_COM_A_CURRENT_SETTINGS','«·Œ’«∆’ «·Õ«·Ì…');
DEFINE('_COM_A_EXPLANATION','«·‘—Õ');
DEFINE('_COM_A_ADMIN_EMAIL','»—Ìœ «·„œÌ—');
DEFINE('_COM_A_ADMIN_EMAIL_DESC','»—Ìœ «·„œÌ— «·–Ì  ’· «·ÌÂ «· ⁄·Ìﬁ«  ⁄·Ï «·»—Ìœ');
DEFINE('_COM_A_ADMIN_ALERTS','≈»·«€ »—ÌœÌ');
DEFINE('_COM_A_ADMIN_EMAIL_ENABLE','Â·  —Ìœ  »·Ì€ »—ÌœÌ ⁄‰œ ﬂ·  ⁄·Ìﬁ');
DEFINE('_COM_A_VISITOR_EMAIL','»—Ìœ ··“«∆—');
DEFINE('_COM_A_VISITOR_EMAIL_DESC','Â·  —Ìœ ≈—”«· »—Ìœ ·ﬂ· “«∆— √Ê ⁄÷Ê ﬁ«„ »≈÷«›…  ⁄·Ìﬁ');
DEFINE('_COM_A_REVIEW_SUBM',' ›ﬁœ ﬁ»· «·‰‘—');
DEFINE('_COM_A_REVIEW_DESC','≈–« ≈Œ —  ‰⁄„ ›–·ﬂ Ì⁄‰Ì √‰ «· ⁄·Ìﬁ Ì÷«› ›Ì ﬁ«⁄œ… «·»Ì«‰«  Ê·« Ì‰‘— «·« »⁄œ  ’—ÌÕﬂ ·Â »«·‰‘— .Ì„ﬂ‰ﬂ  ÕœÌœ ŒÌ«— ≈»·«€ »—ÌœÌ ··„œÌ— √⁄·«Â Ê–·ﬂ ·≈Œ»«—ﬂ »ﬂ· «· ⁄«·Ìﬁ «· Ì  ‰ Ÿ— «·‰‘—');
DEFINE('_COM_A_REGISTERED_ONLY','›ﬁÿ «·√⁄÷«¡');
DEFINE('_COM_A_REG_ONLY_DESC','≈Œ — ‰⁄„ ·≈ «Õ… «· ⁄·Ìﬁ«  ··√⁄÷«¡ ›ﬁÿ .. ·«  Œ› ”Ì „ ⁄—÷ «· ⁄·Ìﬁ«  ··⁄«„… Ê·ﬂ‰ ·« Ì„ﬂ‰Â„ «· ⁄·Ìﬁ «·« «–« ﬂ«‰ ·œÌÂ„ ⁄÷ÊÌ… ›Ì «·„Ã·…');
DEFINE('_COM_A_NOTIFY_VERSION',' »·Ì€ ⁄‰œ ÊÃÊœ ‰”Œ… ÃœÌœ…');
DEFINE('_COM_A_NOT_VER_DESC','≈Œ — ‰⁄„ ≈–« √—œ  √‰  ’·ﬂ «· ÕœÌÀ«  ⁄‰œ ÊÃÊœ ‰”Œ… ÃœÌœ… „‰ «·»—‰«„Ã');
DEFINE('_COM_A_HAVE_DONATED','Â· ﬁ„  »«· »—⁄ ø');
DEFINE('_COM_A_DONATE2','≈–« ≈Œ —  ‰⁄„ ›·‰ ÌŸÂ— „—»⁄ «· »—⁄  Õ  «· ⁄·Ìﬁ«  .. «–« ≈Œ —  ·« ›”ÌŸÂ— „—»⁄ «· »—⁄ √”›· «· ⁄·Ìﬁ« ');
DEFINE('_COM_A_IMPORTANT_NOTE','„⁄·Ê„«  „Â„…');
DEFINE('_COM_A_TEMPLATE','ÌÃ» ⁄·Ìﬂ  Õ—Ì— √„— ›Ì «·ﬁ«·» Ê–·ﬂ · ›⁄Ì· «· ⁄·Ìﬁ«  ›Ì „Ã· ﬂ<br><a href="index2.php?option=templates&task=edit">≈‰ ﬁ· «·Ï «·ﬁÊ«·»</a>');
DEFINE('_COM_A_CHANGE_TO','≈” »œ· «·ﬂÊœ «· «·Ì');
DEFINE('_COM_A_HAVE_FUN','Thats it! ~ (I will not be answering emails along the line of &quot;<em>I&quot;ve installed your component but the form doesn&quot;t show.....</em>&quot; :-)</p> <p>          Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
DEFINE('_COM_A_FORCE_PREVIEW','„‘«Âœ… √Ê »—Ê›…');
DEFINE('_COM_A_FORCE_PREVIEW_TEXT','≈Œ — ‰⁄„ «–« √—œ  ⁄—÷ »—Ê›… „‰ «· ⁄·Ìﬁ ﬁ»· «·≈÷«›… ·„÷Ì› «· ⁄·Ìﬁ');
DEFINE('_COM_A_HIDE','≈Œ›«¡ «·ÕﬁÊ·');
DEFINE('_COM_A_HIDE_DESC','⁄—÷ —Ê«»ÿ ·≈÷«›… «· ⁄·Ìﬁ Ê „‘«œ… «· ⁄·Ìﬁ«  »œ·« „‰ ⁄—÷ «·›Ê—„  Õ  «·„ﬁ«·…');
DEFINE('_COM_A_DATE','«· «—ÌŒ');
DEFINE('_COM_A_HIDE_URL','≈Œ›«¡ «·—«»ÿ');
DEFINE('_COM_A_HIDE_URL_DESC','Â·  Êœ ≈Œ›«¡ Õﬁ· ⁄‰Ê«‰ „Êﬁ⁄ „÷Ì› «· ⁄·Ìﬁ');

$_COM_A_NO="·«";
$_COM_A_YES="‰⁄„";

//comments.php
$_COM_C_COM_NUMBER = "⁄œœ «· ⁄·Ìﬁ« ";
$_COM_C_NO_COM     = "·« ÌÊÃœ √Ì  ⁄·Ìﬁ «·Ï «·¬‰ .. Ì„ﬂ‰ﬂ «·»œ√ »≈÷«›… √Ê·  ⁄·Ìﬁ";
$_COM_C_POST       = "»Ê«”ÿ…";
$_COM_C_HOMEPAGE   = "’Õ«» „Êﬁ⁄";
$_COM_C_DATE_ON    = "›Ì";
$_COM_C_DATE_AT    = "›Ì";
$_COM_C_ADD_COM    = "√÷›  ⁄·Ìﬁﬂ ··„ﬁ«·… √Ê «·œ—”";
$_COM_C_NAME       = "«·≈”„ („ÿ·Ê»)";
$_COM_C_EMAIL      = "«·»—Ìœ („ÿ·Ê»)";
$_COM_C_EMAIL_NOT  = "”  „ Õ„«Ì… »—Ìœﬂ „‰ «·⁄—÷ ›Ì «·„Êﬁ⁄";
$_COM_C_HOMEPAGE_IN= "«·„Êﬁ⁄";
$_COM_C_COM        = "«· ⁄·Ìﬁ";
$_COM_C_FULLY      = "Ì—ÃÏ „·√ «·ÕﬁÊ· !";
$_COM_C_NEW_COM    = " ⁄·Ìﬁ ÃœÌœ ›Ì";
$_COM_C_HAVE_NEW   = "·œÌﬂ  ⁄·Ìﬁ ⁄·Ï «·„ﬁ«·… «· «·Ì… :";
$_COM_C_LOGIN      = "Ì—ÃÏ «·œŒÊ· ··ÊÕ… «· Õﬂ„ ·‰‘— «·„ﬁ«·… √Ê Õ–›Â«";
$_COM_C_QUICKLINK  = "Â–« —«»ÿ ”—Ì⁄ ·œŒÊ· ·ÊÕ… «· Õﬂ„";
$_COM_C_THANKS     = "‘ﬂ—« · ⁄·Ìﬁﬂ";
$_COM_C_THANKS2    = "‘ﬂ—« · ⁄·Ìﬁﬂ ⁄·Ï «·œ—” √Ê «·„ﬁ«·… «· «·Ì…";
$_COM_C_ADMIN_REV  = "”ÌﬁÊ„ «·„œÌ— » ›ﬁœ «· ⁄·Ìﬁ ﬁ»· ‰‘—Â";
$_COM_C_ENTERED    = "√‰  √œŒ· ";
$_COM_C_VISIT      = "Ì—ÃÏ “Ì«—… «·„Êﬁ⁄ ﬁ—Ì»«";
$_COM_C_THANKS3    = "‘ﬂ—« ·≈÷«› ﬂ «· ⁄·Ìﬁ";
$_COM_C_THANKS4    = "‘ﬂ—« ·ﬂ ⁄·Ï «· ⁄·Ìﬁ ... ”  „ „‘«Âœ… «· ⁄·Ìﬁ ﬁ»· ‰‘—Â „‰ ﬁ»· «·„œÌ—";
$_COM_C_SUBMIT     = "√÷›";
$_COM_C_RESET     = "„”Õ";
$_COM_C_NOT_AUTH   = "·« Ì„ﬂ‰ﬂ ≈÷«›…  ⁄·Ìﬁ Ì—ÃÏ  ”ÃÌ· œŒÊ·";
?>