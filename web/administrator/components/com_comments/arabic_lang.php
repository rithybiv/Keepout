<?php
// Copyright (C) 2003 Chanh Ong
// All rights reserved.
// This source file is part of the COMBO - Comments on Articles
// custom Component By Chanh Ong - http://ongetc.com
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
// translated by Fuga http://dndon.net
//admin.comments.html.php

DEFINE('_COM_A_KEEPUPTODATE','��� ���� �������� �� ����� ��������� ���� ���  ����');
DEFINE('_COM_A_SUBSCRIBE','������');
DEFINE('_COM_A_UNSUBSCRIBE','������');
DEFINE('_COM_A_BACKUP','���� ��������');
DEFINE('_COM_A_BACKUP_DESC','��� ���� �������� �� mos_content_comments');
DEFINE('_COM_A_RESTORE','�������');
DEFINE('_COM_A_RESTORE_DESC','������� ������ ���������� �� mos_content_comments');
DEFINE('_COM_A_CONFIG','���������');
DEFINE('_COM_A_CONFIG_DESC','��� ���������');
DEFINE('_COM_A_INSTRUCTIONS','���������');
DEFINE('_COM_A_INSTRUCTIONS_DESC','����� ����� ��������');
DEFINE('_COM_A_ABOUT','�� ��������');
DEFINE('_COM_A_ABOUT_DESC','�� ��� ��������');
DEFINE('_COM_A_LINK','����');
DEFINE('_COM_A_LINK_DESC','����� ��������');
DEFINE('_COM_A_CHECK','������ �� ���� �������');
DEFINE('_COM_A_VERSION','������ �� ');
DEFINE('_COM_A_DONATE','���� ����� ��� ����� ������ �� ��� ����� �� ���� �������� ����� ����');
DEFINE('_COM_A_REVIEW','��� ��������� ( ������ ���� )');
DEFINE('_COM_A_DISPLAY','��� #');
DEFINE('_COM_A_NAME_SUB','�����');
DEFINE('_COM_A_EMAIL_SUB','������');
DEFINE('_COM_A_HOMEPAGE','������');
DEFINE('_COM_A_COMMENT','�������');
DEFINE('_COM_A_ARTICLE','�������');
DEFINE('_COM_A_PUBLISHED','�����');
DEFINE('_COM_A_MOS_BY','������ ��������� ������');
DEFINE('_COM_A_CURRENT_SETTINGS','������� �������');
DEFINE('_COM_A_EXPLANATION','�����');
DEFINE('_COM_A_ADMIN_EMAIL','���� ������');
DEFINE('_COM_A_ADMIN_EMAIL_DESC','���� ������ ���� ��� ���� ��������� ��� ������');
DEFINE('_COM_A_ADMIN_ALERTS','����� �����');
DEFINE('_COM_A_ADMIN_EMAIL_ENABLE','�� ���� ����� ����� ��� �� �����');
DEFINE('_COM_A_VISITOR_EMAIL','���� ������');
DEFINE('_COM_A_VISITOR_EMAIL_DESC','�� ���� ����� ���� ��� ���� �� ��� ��� ������ �����');
DEFINE('_COM_A_REVIEW_SUBM','���� ��� �����');
DEFINE('_COM_A_REVIEW_DESC','��� ����� ��� ���� ���� �� ������� ���� �� ����� �������� ��� ���� ��� ��� ������ �� ������ .����� ����� ���� ����� ����� ������ ����� ���� ������� ��� �������� ���� ����� �����');
DEFINE('_COM_A_REGISTERED_ONLY','��� �������');
DEFINE('_COM_A_REG_ONLY_DESC','���� ��� ������ ��������� ������� ��� .. �� ��� ���� ��� ��������� ������ ���� �� ������ ������� ��� ��� ��� ����� ����� �� ������');
DEFINE('_COM_A_NOTIFY_VERSION','����� ��� ���� ���� �����');
DEFINE('_COM_A_NOT_VER_DESC','���� ��� ��� ���� �� ���� ��������� ��� ���� ���� ����� �� ��������');
DEFINE('_COM_A_HAVE_DONATED','�� ��� ������� �');
DEFINE('_COM_A_DONATE2','��� ����� ��� ��� ���� ���� ������ ��� ��������� .. ��� ����� �� ������ ���� ������ ���� ���������');
DEFINE('_COM_A_IMPORTANT_NOTE','������� ����');
DEFINE('_COM_A_TEMPLATE','��� ���� ����� ��� �� ������ ���� ������ ��������� �� �����<br><a href="index2.php?option=templates&task=edit">����� ��� �������</a>');
DEFINE('_COM_A_CHANGE_TO','������ ����� ������');
DEFINE('_COM_A_HAVE_FUN','Thats it! ~ (I will not be answering emails along the line of &quot;<em>I&quot;ve installed your component but the form doesn&quot;t show.....</em>&quot; :-)</p> <p>          Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
DEFINE('_COM_A_FORCE_PREVIEW','������ �� �����');
DEFINE('_COM_A_FORCE_PREVIEW_TEXT','���� ��� ��� ���� ��� ����� �� ������� ��� ������� ����� �������');
DEFINE('_COM_A_HIDE','����� ������');
DEFINE('_COM_A_HIDE_DESC','��� ����� ������ ������� � ����� ��������� ���� �� ��� ������ ��� �������');
DEFINE('_COM_A_DATE','�������');
DEFINE('_COM_A_HIDE_URL','����� ������');
DEFINE('_COM_A_HIDE_URL_DESC','�� ��� ����� ��� ����� ���� ���� �������');

$_COM_A_NO="��";
$_COM_A_YES="���";

//comments.php
$_COM_C_COM_NUMBER = "��� ���������";
$_COM_C_NO_COM     = "�� ���� �� ����� ��� ���� .. ����� ����� ������ ��� �����";
$_COM_C_POST       = "������";
$_COM_C_HOMEPAGE   = "���� ����";
$_COM_C_DATE_ON    = "��";
$_COM_C_DATE_AT    = "��";
$_COM_C_ADD_COM    = "��� ������ ������� �� �����";
$_COM_C_NAME       = "����� (�����)";
$_COM_C_EMAIL      = "������ (�����)";
$_COM_C_EMAIL_NOT  = "���� ����� ����� �� ����� �� ������";
$_COM_C_HOMEPAGE_IN= "������";
$_COM_C_COM        = "�������";
$_COM_C_FULLY      = "���� ��� ������ !";
$_COM_C_NEW_COM    = "����� ���� ��";
$_COM_C_HAVE_NEW   = "���� ����� ��� ������� ������� :";
$_COM_C_LOGIN      = "���� ������ ����� ������ ���� ������� �� �����";
$_COM_C_QUICKLINK  = "��� ���� ���� ����� ���� ������";
$_COM_C_THANKS     = "���� �������";
$_COM_C_THANKS2    = "���� ������� ��� ����� �� ������� �������";
$_COM_C_ADMIN_REV  = "����� ������ ����� ������� ��� ����";
$_COM_C_ENTERED    = "��� �����";
$_COM_C_VISIT      = "���� ����� ������ �����";
$_COM_C_THANKS3    = "���� ������� �������";
$_COM_C_THANKS4    = "���� �� ��� ������� ... ���� ������ ������� ��� ���� �� ��� ������";
$_COM_C_SUBMIT     = "���";
$_COM_C_RESET     = "���";
$_COM_C_NOT_AUTH   = "�� ����� ����� ����� ���� ����� ����";
?>