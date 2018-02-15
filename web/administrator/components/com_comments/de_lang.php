<?php
// Copyright (C) 2003 Chanh Ong
// All rights reserved.
// This source file is part of the COMBO - Comments on Articles
// custom Component By Chanh Ong - http://ongetc.com
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
//
//admin.comments.html.php

DEFINE('_COM_A_KEEPUPTODATE','Falls Sie mit dieser und weiteren großartigen Komponenten von Chanh Ong auf dem Laufenden bleiben wollen, sollten Sie die Mailing-Liste abonieren, indem Sie den &quot;Abonieren&quot; Button verwenden');
DEFINE('_COM_A_SUBSCRIBE','Abonieren');
DEFINE('_COM_A_UNSUBSCRIBE','Abbestellen');
DEFINE('_COM_A_BACKUP','Sicherung');
DEFINE('_COM_A_BACKUP_DESC','Sicherung der mos_content_comments Tabelle');
DEFINE('_COM_A_RESTORE','Wiederherstellen');
DEFINE('_COM_A_RESTORE_DESC','Wiederherstellung der mos_content_comments Tabelle');
DEFINE('_COM_A_CONFIG','Konfiguration');
DEFINE('_COM_A_CONFIG_DESC','&Auml;ndern der Konfiguartion');
DEFINE('_COM_A_INSTRUCTIONS','Anleitung');
DEFINE('_COM_A_INSTRUCTIONS_DESC','Konfiguration nach Installation');
DEFINE('_COM_A_ABOUT','&Uuml;ber');
DEFINE('_COM_A_ABOUT_DESC','&Uuml;ber diese Komponente');
DEFINE('_COM_A_LINK','Link');
DEFINE('_COM_A_LINK_DESC','Zur Webseite des Autors');
DEFINE('_COM_A_CHECK','&Uuml;berpr&uuml;fung auf Updates');
DEFINE('_COM_A_VERSION','Ihre Veersion ist ');
DEFINE('_COM_A_DONATE','Bitte verwenden Sie den linken Ads by Google oder donate (= Spenden) button. Es wird mich inspirieren, mein script zu verbessern');
DEFINE('_COM_A_REVIEW','Kommentare ansehen (Die neusten zuerst)');
DEFINE('_COM_A_DISPLAY','Zeige Nummer');
DEFINE('_COM_A_NAME_SUB','Name');
DEFINE('_COM_A_EMAIL_SUB','E-mail');
DEFINE('_COM_A_HOMEPAGE','Homepage');
DEFINE('_COM_A_COMMENT','Kommentar');
DEFINE('_COM_A_ARTICLE','Artikle');
DEFINE('_COM_A_PUBLISHED','Ver&ouml;ffentlicht');
DEFINE('_COM_A_MOS_BY','Eine &ouml;ffentliche MOS4.5 Komponente von');
DEFINE('_COM_A_CURRENT_SETTINGS','Derzeitige Einstellungen');
DEFINE('_COM_A_EXPLANATION','Erkl&auml;rungn');
DEFINE('_COM_A_ADMIN_EMAIL','Admin E-mail');
DEFINE('_COM_A_ADMIN_EMAIL_DESC','Wenn e-mail eingeschaltet ist, wird an diese Adresse eine e-mail gesendet, sobald neue Kommentare eingegeben werden');
DEFINE('_COM_A_ADMIN_ALERTS','Admin E-mail Benachrichtigungen');
DEFINE('_COM_A_ADMIN_EMAIL_ENABLE','Admin E-mail ein/ausschalten');
DEFINE('_COM_A_VISITOR_EMAIL','Besucher E-mail Benachrichtigungen');
DEFINE('_COM_A_VISITOR_EMAIL_DESC','Ein/ausschalten von Benachrichtigungen an den Autor des Kommentars');
DEFINE('_COM_A_REVIEW_SUBM','Eintr&auml;ge genehmigen');
DEFINE('_COM_A_REVIEW_DESC','In der Einstellung JA werden die Kommentare in der Datenbank vorgehanlten aber vor der Begutachtung und Genehmigung nicht ver&ouml;ffentlicht. Sie bekommen <strong>nur dann</strong> eine e-mail Benachrichtigung, wenn oben eine e-mail Adresse im Feld &quot;Admin e-mail&quot; eingegeben ist <strong>und</strong> &quot;Admin e-mail Benachrichtigungen&quot; auf &quot;ja&quot; steht.');
DEFINE('_COM_A_REGISTERED_ONLY','Nur registrierte Benutzer');
DEFINE('_COM_A_REG_ONLY_DESC','Bei &quot;Ja&quot; d&uuml;rfen nur registrierte Benutzer Kommentare hinterlassen, die aber alle sehen k&ouml;nnen. Bei &quot;Nein&quot; d&uuml;rfen alle Benutzer Kommentare hinterlassen.');
DEFINE('_COM_A_NOTIFY_VERSION','Benachrichtigungen &uuml;ber neue Versionen');
DEFINE('_COM_A_NOT_VER_DESC','Bei &quot;Ja&quot; werden sie auf der Hauptseite &uuml;ber neue Versionen dieser Komponente informiert (<em>Es wird lediglich ihre Versionsnummer zum Update Server gesendet)</em>');
DEFINE('_COM_A_HAVE_DONATED','Haben Sie gespendet?');
DEFINE('_COM_A_DONATE2','Bitte &uuml;berlegen sie das Projekt mit einer Paypal Spende zu unterst&uuml;tzen. Es wird mich inspririeren dieses script weiter zu verbessern! :-)');
DEFINE('_COM_A_IMPORTANT_NOTE','WICHTIGER HINWEIS');
DEFINE('_COM_A_TEMPLATE','Damit mambo feststellen kann, ob ein kommentierbarer Artikel angezeigt wird, m&uuml;ssen sie Ihre Vorlage (template) etwas ver&auml;ndern.<br><a href="index2.php?option=templates&task=edit">Bearbeiten sie ihre Vorlagen Datei</a> und suchen sie nach dem Eintrag');
DEFINE('_COM_A_CHANGE_TO','&Auml;ndern Sie dies wie folgt:');
DEFINE('_COM_A_HAVE_FUN','Das wars! ~ (E-mails mit der Frage &quot;<em>Ich habe ihre componente installiert aber das Formular zeigt keine ... </em>&quot; werde ich nicht beantworten :-)   -Anmerk. des &Uuml;bersetzers: Der Autor spricht kein Deutsch- </p> <p>          Viel Spa&szlig;!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
DEFINE('_COM_A_FORCE_PREVIEW','Vorschau erzwingen');
DEFINE('_COM_A_FORCE_PREVIEW_TEXT','Hiermit erzwingen Sie, da&szlig; sich Ihre Benutzer die Kommentare vor dem endg&uuml;ltigen Versand nochmals ansehen');
DEFINE('_COM_A_HIDE','Kommentare verstecken');
DEFINE('_COM_A_HIDE_DESC','Zeige standardm&auml;&szlig;ig (Kommentare (x) - Kommentare hinzuf&uuml;gen) anstat der Kommentare selbstt');
DEFINE('_COM_A_DATE','Datum');
DEFINE('_COM_A_HIDE_URL','Verstecke URL');
DEFINE('_COM_A_HIDE_URL_DESC','Hiermit verstecken Sie das standardm&auml;&szlig;ig eingeblendete URL Eingabefenster');

$_COM_A_NO="Nein";
$_COM_A_YES="Ja";

//comments.php
$_COM_C_COM_NUMBER = "Anzahl der Kommentare";
$_COM_C_NO_COM     = "Es gibt derzeit keine Kommantare - Bitte nutzen sie das unten stehende Formular f&uuml;r ihre Kommentare....";
$_COM_C_POST       = "Gesendet von";
$_COM_C_HOMEPAGE   = "Autor Homepage";
$_COM_C_DATE_ON    = "am";
$_COM_C_DATE_AT    = "um";
$_COM_C_ADD_COM    = "F&uuml;gen sie diesem Artikel Ihren Kommentar hinzu...";
$_COM_C_NAME       = "Name <small><i>(erforderlich)</i></small>";
$_COM_C_EMAIL      = "E-Mail <small><i>(erforderlich)</i></small>";
$_COM_C_EMAIL_NOT  = "Ihre e-mail Adresse wird ausschlie&szlig;lich unseren Administratoren bekannt gemacht";
$_COM_C_HOMEPAGE_IN= "Homepage";
$_COM_C_COM        = "Kommentar";
$_COM_C_FULLY      = "Bitte f&uuml;llen Sie das Formular vollst&auml;ndig aus!";
$_COM_C_NEW_COM    = "Neuer Kommentar zu";
$_COM_C_HAVE_NEW   = "Sie haben einen neuen Kommentar zu folgendem Artikel:";
$_COM_C_LOGIN      = "Bitte melden sie sich an und ver&ouml;ffentlichen oder l&ouml;schen sie den Kommentar";
$_COM_C_QUICKLINK  = "Hier ein Direktlink zum anmelden";
$_COM_C_THANKS     = "Danke f&uuml;r ihren Kommentar von";
$_COM_C_THANKS2    = "Danke f&uuml;r Ihren Kommentar des folgenden Artikels";
$_COM_C_ADMIN_REV  = "Ein Administrator wird Ihren Kommantar in K&uuml;rze &uuml;berpr&uuml;fen";
$_COM_C_ENTERED    = "Sie gaben ein";
$_COM_C_VISIT      = "Bitte besuchen Sie unsere Seite bald wieder unter";
$_COM_C_THANKS3    = "Danke f&uuml;r Ihre Kommentare - Sie wurden dieser Seite hinzugef&uuml;gt";
$_COM_C_THANKS4    = "Danke f&uumlr Ihre Kommentare - Vor der Ver&ouml;ffentlichung m&uuml;ssen sie von einem Administrator freigegeben werden!";
$_COM_C_SUBMIT     = "Absenden";
$_COM_C_RESET     = "Zur&uuml;cksetzen";
$_COM_C_NOT_AUTH   = "Sie haben keine Berechtigung Kommentare zu hinterlassen - Bitte melden Sie sich an.";
?>

