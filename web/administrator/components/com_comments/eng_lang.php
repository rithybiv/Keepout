<?php
// Copyright (C) 2003 Chanh Ong
// All rights reserved.
// This source file is part of the COMBO - Comments on Articles
// custom Component By Chanh Ong - http://ongetc.com
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
//
//admin.comments.html.php

DEFINE('_COM_A_KEEPUPTODATE','If you want to keep up to date with this and other great components from Chanh Ong please subscribe to the mailing list by clicking these buttons');
DEFINE('_COM_A_SUBSCRIBE','Subscribe');
DEFINE('_COM_A_UNSUBSCRIBE','Unsubscribe');
DEFINE('_COM_A_BACKUP','Backup');
DEFINE('_COM_A_BACKUP_DESC','Backup the mos_content_comments table');
DEFINE('_COM_A_RESTORE','Restore');
DEFINE('_COM_A_RESTORE_DESC','Restore the mos_content_comments table');
DEFINE('_COM_A_CONFIG','Configuration');
DEFINE('_COM_A_CONFIG_DESC','Change the configuration');
DEFINE('_COM_A_INSTRUCTIONS','Instructions');
DEFINE('_COM_A_INSTRUCTIONS_DESC','Post Install Configuration');
DEFINE('_COM_A_ABOUT','About');
DEFINE('_COM_A_ABOUT_DESC','About this component');
DEFINE('_COM_A_LINK','Link');
DEFINE('_COM_A_LINK_DESC','To authors website');
DEFINE('_COM_A_CHECK','Check for updates');
DEFINE('_COM_A_VERSION','Your version is ');
DEFINE('_COM_A_DONATE','Please consider hitting the Ads by Google on the left or the donate button below to donate. This will inspire me to improve this script more');
DEFINE('_COM_A_REVIEW','Review Comments (Newest First)');
DEFINE('_COM_A_DISPLAY','Display #');
DEFINE('_COM_A_NAME_SUB','Name');
DEFINE('_COM_A_EMAIL_SUB','Email');
DEFINE('_COM_A_HOMEPAGE','Homepage');
DEFINE('_COM_A_COMMENT','Comment');
DEFINE('_COM_A_ARTICLE','Article');
DEFINE('_COM_A_PUBLISHED','Published');
DEFINE('_COM_A_MOS_BY','A MOS4.5 Custom Component by');
DEFINE('_COM_A_CURRENT_SETTINGS','Current Setting');
DEFINE('_COM_A_EXPLANATION','Explanation');
DEFINE('_COM_A_ADMIN_EMAIL','Admin Email');
DEFINE('_COM_A_ADMIN_EMAIL_DESC','If email is switched on, an email will be sent to this address when a new comment is entered');
DEFINE('_COM_A_ADMIN_ALERTS','Admin Email Alerts');
DEFINE('_COM_A_ADMIN_EMAIL_ENABLE','Enable/Disable emails to Admin');
DEFINE('_COM_A_VISITOR_EMAIL','Visitor Email Alerts');
DEFINE('_COM_A_VISITOR_EMAIL_DESC','Enable/Disable emails to the person who submitted the comment');
DEFINE('_COM_A_REVIEW_SUBM','Review Submissions');
DEFINE('_COM_A_REVIEW_DESC','If you set this to yes then comments will be added to the database and will wait for you to review and publish them before showing. You will recieve an email <strong>only</strong> if there is a value in &quot;Admin email&quot; and you have &quot;Email Alerts&quot; set to &quot;yes&quot;');
DEFINE('_COM_A_REGISTERED_ONLY','Registered Users Only');
DEFINE('_COM_A_REG_ONLY_DESC','Set &quot;Yes&quot; to allow only registered users to leave comments but anyone can see comments, Set &quot;No&quot; to allow any visitor to comment');
DEFINE('_COM_A_NOTIFY_VERSION','Notify if new version available');
DEFINE('_COM_A_NOT_VER_DESC','If set to &quot;Yes&quot; you will be shown a dialog on the main screen when an update is available to this component (<em>NOTE: The only data sent to the update server is your version number</em>)');
DEFINE('_COM_A_HAVE_DONATED','Have you Donated?');
DEFINE('_COM_A_DONATE2','Please consider make a donation throught paypal. This will inspire me to improve this script more! :-)');
DEFINE('_COM_A_IMPORTANT_NOTE','IMPORTANT NOTES');
DEFINE('_COM_A_TEMPLATE','In order for mambo to check and see if its showing an article that can be commented on, you must make a small change to your template.<br><a href="index2.php?option=templates&task=edit">Edit your template file</a> and look for the entry');
DEFINE('_COM_A_CHANGE_TO','Change this to the following');
DEFINE('_COM_A_HAVE_FUN','Thats it! ~ (I will not be answering emails along the line of &quot;<em>I&quot;ve installed your component but the form doesn&quot;t show.....</em>&quot; :-)</p> <p>          Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
DEFINE('_COM_A_FORCE_PREVIEW','Force a preview');
DEFINE('_COM_A_FORCE_PREVIEW_TEXT','Set this to yes to force your visitors to preview their comments before final submission');
DEFINE('_COM_A_HIDE','Hide  Comments');
DEFINE('_COM_A_HIDE_DESC','Show (Comments (x) - Add Comments) instead of the comments and form by default');
DEFINE('_COM_A_DATE','Date');
DEFINE('_COM_A_HIDE_URL','Hide URL');
DEFINE('_COM_A_HIDE_URL_DESC','Hide URL - Use to hide URL on the comments form by default');

$_COM_A_NO="No";
$_COM_A_YES="Yes";

//comments.php
$_COM_C_COM_NUMBER = "Number of comments";
$_COM_C_NO_COM     = "There are no comments yet - feel free to add one using the form below...";
$_COM_C_POST       = "Posted by";
$_COM_C_HOMEPAGE   = "Whose homepage is";
$_COM_C_DATE_ON    = "on";
$_COM_C_DATE_AT    = "at";
$_COM_C_ADD_COM    = "Add your comments to this article...";
$_COM_C_NAME       = "Name <small><i>(required)</i></small>";
$_COM_C_EMAIL      = "E-Mail <small><i>(required)</i></small>";
$_COM_C_EMAIL_NOT  = "Your email will not be displayed on the site - only to our administrator";
$_COM_C_HOMEPAGE_IN= "Homepage";
$_COM_C_COM        = "Comment";
$_COM_C_FULLY      = "Please complete the form fully!";
$_COM_C_NEW_COM    = "New comment on";
$_COM_C_HAVE_NEW   = "You have a new comment on the following article:";
$_COM_C_LOGIN      = "Please login and publish or delete this comment";
$_COM_C_QUICKLINK  = "Here is a quick link to login";
$_COM_C_THANKS     = "Thanks for your comments on";
$_COM_C_THANKS2    = "Thanks for your comment on the following article";
$_COM_C_ADMIN_REV  = "An administrator will review your comments shortly";
$_COM_C_ENTERED    = "You entered";
$_COM_C_VISIT      = "Please visit our site again soon at";
$_COM_C_THANKS3    = "Thanks for your comments - They have been added to this page";
$_COM_C_THANKS4    = "Thanks for your comments - They will be reviewed by an administrator prior to being published!";
$_COM_C_SUBMIT     = "Submit";
$_COM_C_RESET     = "Reset";
$_COM_C_NOT_AUTH   = "You are not authorized to leave comments - please login.";
?>
