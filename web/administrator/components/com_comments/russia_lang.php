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
DEFINE('_COM_A_SUBSCRIBE','�����������');
DEFINE('_COM_A_UNSUBSCRIBE','���������� �� ��������');
DEFINE('_COM_A_BACKUP','������� �����(Backup)');
DEFINE('_COM_A_BACKUP_DESC','������� ����� ������� ������������');
DEFINE('_COM_A_RESTORE','������������ �� ������');
DEFINE('_COM_A_RESTORE_DESC','������������ ������� ������������ �� ������');
DEFINE('_COM_A_CONFIG','���������');
DEFINE('_COM_A_CONFIG_DESC','�������� ���������');
DEFINE('_COM_A_INSTRUCTIONS','����������');
DEFINE('_COM_A_INSTRUCTIONS_DESC','��������� ����� ���������');
DEFINE('_COM_A_ABOUT','��������');
DEFINE('_COM_A_ABOUT_DESC','�������� ����������');
DEFINE('_COM_A_LINK','������');
DEFINE('_COM_A_LINK_DESC','�� ���� �������');
DEFINE('_COM_A_CHECK','��������� ������� ����������');
DEFINE('_COM_A_VERSION','���� ������ ');
DEFINE('_COM_A_DONATE','������ ��� �������������. ����������� ������ �� ��������������� ���������� �������� ���������');
DEFINE('_COM_A_REVIEW','������������ ����������� (�� ����� � ����� ������)');
DEFINE('_COM_A_DISPLAY','������� #');
DEFINE('_COM_A_NAME_SUB','���');
DEFINE('_COM_A_EMAIL_SUB','Email');
DEFINE('_COM_A_HOMEPAGE','�������� ���������');
DEFINE('_COM_A_COMMENT','�����������');
DEFINE('_COM_A_ARTICLE','������');
DEFINE('_COM_A_PUBLISHED','������������');
DEFINE('_COM_A_MOS_BY','A MOS4.5 Custom Component by');
DEFINE('_COM_A_CURRENT_SETTINGS','������� ���������');
DEFINE('_COM_A_EXPLANATION','����������');
DEFINE('_COM_A_ADMIN_EMAIL','Email ��������������');
DEFINE('_COM_A_ADMIN_EMAIL_DESC','���� email �������, �� email ����� ������� �� ��������� ������� ��� ��������� ����� ������������');
DEFINE('_COM_A_ADMIN_ALERTS','���������� �������������� �� Email');
DEFINE('_COM_A_ADMIN_EMAIL_ENABLE','��������/��������� ������� ����� ��������������');
DEFINE('_COM_A_VISITOR_EMAIL','���������� ������� �� Email');
DEFINE('_COM_A_VISITOR_EMAIL_DESC','��������/��������� ������� email ������ ������������');
DEFINE('_COM_A_REVIEW_SUBM','�������� �������� �����');
DEFINE('_COM_A_REVIEW_DESC','����� ����������. ���� ����������� �� ����� ���������� �������, ����������� �� ������������. �� �������� ���������� <strong>������ ��� �������</strong> ����������� ���������� �������������� �� email');
DEFINE('_COM_A_REGISTERED_ONLY','������ ��� ������������������ �������������');
DEFINE('_COM_A_REG_ONLY_DESC','&quot;��������&quot; � ������ ������������������ ������������ ������ ������ � ��������� �����������');
DEFINE('_COM_A_NOTIFY_VERSION','���������� � ����� �������');
DEFINE('_COM_A_NOT_VER_DESC','������ ���������� �� ����������� (�� ������ ���������� ���������� ������ ������� ������ ����������)');
DEFINE('_COM_A_HAVE_DONATED','�� ��� ���-�� ������������?');
DEFINE('_COM_A_DONATE2','����������� ��� &pound;10.00 ����� paypal. ��� ��������� ���� �� ���������� ���������� :-)');
DEFINE('_COM_A_IMPORTANT_NOTE','������ �������');
DEFINE('_COM_A_TEMPLATE','In order for mambo to check and see if its showing an article that can be commented on, you must make a small change to your template.<br><a href="index2.php?option=templates&task=edit">Edit your template file</a> and look for the entry');
DEFINE('_COM_A_CHANGE_TO','�������� ��� �� ���������');
DEFINE('_COM_A_HAVE_FUN','Thats it! ~ (I will not be answering emails along the line of &quot;<em>I&quot;ve installed your component but the form doesn&quot;t show.....</em>&quot; :-)</p> <p>          Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
DEFINE('_COM_A_FORCE_PREVIEW','������������ �������� ���������');
DEFINE('_COM_A_FORCE_PREVIEW_TEXT','������������ ������������ ���������');
DEFINE('_COM_A_HIDE','�������� �����������');
DEFINE('_COM_A_HIDE_DESC','���������� (����������� (x) - �������� �����������) ������ ������ ������������ � ����� ����� � ������');
DEFINE('_COM_A_DATE','Date');
DEFINE('_COM_A_HIDE_URL','Hide URL');
DEFINE('_COM_A_HIDE_URL_DESC','Hide URL - Use to hide URL on the comments form by default');
$_COM_A_NO="���";
$_COM_A_YES="��";

//comments.php
$_COM_C_COM_NUMBER = "����������� ������������";
$_COM_C_NO_COM     = "���� ����� �� ���������������� - ��� ������ ����������� ��������� ���������� ���� �����...";
$_COM_C_POST       = "�������";
$_COM_C_HOMEPAGE   = "<br>�������� ��������";
$_COM_C_DATE_ON    = "<br>����";
$_COM_C_DATE_AT    = "�����";
$_COM_C_ADD_COM    = "��� �����������:";
$_COM_C_NAME       = "���� ��� <small><i>(������������ ����)</i></small>";
$_COM_C_EMAIL      = "E-Mail <small><i>(������������ ����)</i></small>";
$_COM_C_EMAIL_NOT  = "��� email �� ����� ����������� �� �����, �� ����� ����� ������ �������������� �����";
$_COM_C_HOMEPAGE_IN= "�������� ��������";
$_COM_C_COM        = "�����:";
$_COM_C_FULLY      = "�� ��� ���� ���������!";
$_COM_C_NEW_COM    = "���� ������ �����������";
$_COM_C_HAVE_NEW   = "�������� ����� ����������� � ������:";
$_COM_C_LOGIN      = "���������� ����������������� �� �����, ����� ������������ ��� ������� �����������";
$_COM_C_QUICKLINK  = "������� ������ ��� ����������� �� ����� (login)";
$_COM_C_THANKS     = "������� �� ��� ����������� � ������";
$_COM_C_THANKS2    = "������� �� ��� ����������� � ��������� ������";
$_COM_C_ADMIN_REV  = "��� ����������� ����� ����������� ����� �������� �����������";
$_COM_C_ENTERED    = "�� �����";
$_COM_C_VISIT      = "�������� ���";
$_COM_C_THANKS3    = "������� �� �����������";
$_COM_C_THANKS4    = "��� ����������� ����� ����������� ����� �������� �����������!";
$_COM_C_SUBMIT     = "��������";
$_COM_C_RESET     = "Reset";
$_COM_C_NOT_AUTH   = "����� ��������/��������� ����������� - ����������������� (������������)";
?>
