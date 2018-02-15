<?php
// Copyright (C) 2003 Chanh Ong
// All rights reserved.
// This source file is part of the COMBO - Comments on Articles
// custom Component By Chanh Ong - http://ongetc.com
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
//
// German Translation from eng_lang.php by Jiri Ripa and Dominik Schub 03.August 2005
// http://www.karlocarlos.com
// mail : george@karlocarlos.de

//admin.comments.html.php

DEFINE('_COM_A_KEEPUPTODATE','If you want to keep up to date with this and other great components from Chanh Ong please subscribe to the mailing list by clicking these buttons');
DEFINE('_COM_A_SUBSCRIBE','Subscribe');
DEFINE('_COM_A_UNSUBSCRIBE','Unsubscribe');
DEFINE('_COM_A_BACKUP','Backup');
DEFINE('_COM_A_BACKUP_DESC','Sichern der mos_content_comments table');
DEFINE('_COM_A_RESTORE','Umlagern');
DEFINE('_COM_A_RESTORE_DESC','Umlagern der mos_content_comments table');
DEFINE('_COM_A_CONFIG','Konfiguration');
DEFINE('_COM_A_CONFIG_DESC','&Auml;ndern der Konfiguration');
DEFINE('_COM_A_INSTRUCTIONS','Instruktionen');
DEFINE('_COM_A_INSTRUCTIONS_DESC','Anzeigen Installations Konfiguration');
DEFINE('_COM_A_ABOUT','Über');
DEFINE('_COM_A_ABOUT_DESC','&Uuml;ber diese Komponente');
DEFINE('_COM_A_LINK','Link');
DEFINE('_COM_A_LINK_DESC','Zum Autor der Website');
DEFINE('_COM_A_CHECK','Suche nach Aktualisierungen');
DEFINE('_COM_A_VERSION','Deine Version ist');
DEFINE('_COM_A_DONATE','Bitte ziehe in erw&auml;gung den Ads by Google Button links an zu klicken, oder den Spenden button darunter. Dadurch f&uuml;hle ich mich inspiriert, dieses script weiter zu entwickeln.');
DEFINE('_COM_A_REVIEW','Kommentare anzeigen (Neuste zuerst)');
DEFINE('_COM_A_DISPLAY','Anzeigen #');
DEFINE('_COM_A_NAME_SUB','Name');
DEFINE('_COM_A_EMAIL_SUB','Email');
DEFINE('_COM_A_HOMEPAGE','Homepage');
DEFINE('_COM_A_COMMENT','Kommentar');
DEFINE('_COM_A_ARTICLE','Artikel');
DEFINE('_COM_A_PUBLISHED','Ver&ouml;ffentlicht');
DEFINE('_COM_A_MOS_BY','A MOS4.5 differenzierte Komponente von');
DEFINE('_COM_A_CURRENT_SETTINGS','gegenw&auml;rtige Einstellungen');
DEFINE('_COM_A_EXPLANATION','Erkl&auml;rung');
DEFINE('_COM_A_ADMIN_EMAIL','Administrator Email');
DEFINE('_COM_A_ADMIN_EMAIL_DESC','Wenn email eingeschaltet ist, wird eine E-Mail an die Adresse verschickt, wenn ein Kommentar eingegeben wurde');
DEFINE('_COM_A_ADMIN_ALERTS','Administrator Email Warnungen');
DEFINE('_COM_A_ADMIN_EMAIL_ENABLE','ein/ausschalten der E-Mails an den Administrator');
DEFINE('_COM_A_VISITOR_EMAIL','Besucher Email Warnungen');
DEFINE('_COM_A_VISITOR_EMAIL_DESC','ein/ausschalten der E-Mails an die Person, die den Kommentar versendet hat');
DEFINE('_COM_A_REVIEW_SUBM','Wiederansehen der Eingabe');
DEFINE('_COM_A_REVIEW_DESC','Wenn dies als ja gesetzt ist, dann werden Kommentare in die Datenbank eingef&uuml;gt und diese m&uuml;ssen zuerst vom Administrator freigeschaltet werden, bevor sie dann endg&uuml;ltig angezeigt werden. Man wird eine email <strong>nur</strong> erhalten, wenn es in &quot;Admin E-Mail&quot; Feld einen Wert gibt und man erh&auml;lt eine &quot;Email als Warnung,&quot; wenn dies &quot;JA&quot; gesetzt ist');
DEFINE('_COM_A_REGISTERED_ONLY','Nur registrierte User');
DEFINE('_COM_A_REG_ONLY_DESC','Setze &quot;Ja&quot; um nur registrierten Usern zu erlauben, kommentare einzutragen, andere k&ouml;nnen sie dagegen nur sehen. Setze &quot;Nein&quot; um allen besuchern die Kommentierung zu erlauben');
DEFINE('_COM_A_NOTIFY_VERSION','benachrichtigen ob neue version erh&auml;ltlich');
DEFINE('_COM_A_NOT_VER_DESC','Wenn dies gesetzt ist,&quot;Yes&quot; dann wird ein dialog auf dem Hauptschirm angezeigt, wenn ein update f&uuml;r diese komponente vorliegt.(<em>NOTE: die einzigen daten, die zu dem update server versendet werden, ist die nummer der version.</em>)');
DEFINE('_COM_A_HAVE_DONATED',' hast du gespendet?');
DEFINE('_COM_A_DONATE2','Bitte ziehe in Erw&auml;gung zu spenden durch paypal. Das wird mich mehr dazu inspirieren das script zu verbessern! :-)');
DEFINE('_COM_A_IMPORTANT_NOTE','Wichtige Notiz');
DEFINE('_COM_A_TEMPLATE','Dass Mambo kontrollieren und feststellen kann, ob ein kommentierf&auml;higer Artikel angezeigt wird, musst Du kleine Ver&auml;nderungen an Deinem Template vornehmen.<br><a href="index2.php?option=templates&task=edit">Bearbeite Dein Template Index</a> Benutze diese Anleitung.');
DEFINE('_COM_A_CHANGE_TO','&Auml;ndere dies folgendermassen');
DEFINE('_COM_A_HAVE_FUN','Das wars! ~ (Ich beantworte keine E-Mails &quot;<em>die&quot;etwas mit dieser Anleitung zu tun haben&quot; sehe.....</em>&quot; :-)</p> <p>          Viel Spass!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
DEFINE('_COM_A_FORCE_PREVIEW','Erzwinge eine Vorschau');
DEFINE('_COM_A_FORCE_PREVIEW_TEXT','Setze ja um Deine Besucher zu veranlassen Ihre Kommentare ansehen zu können, bevor Sie sie endg&uuml;ltig versenden');
DEFINE('_COM_A_HIDE','Verstecke Kommentare');
DEFINE('_COM_A_HIDE_DESC','Zeige (Kommentare (x) - Kommentare hinzuf&uuml;gen) anstelle der Kommentare und Formulare am Anfang');
DEFINE('_COM_A_DATE','Datum');
DEFINE('_COM_A_HIDE_URL','URL ausblenden');
DEFINE('_COM_A_HIDE_URL_DESC','URL ausblenden - Benutze dies um URL des Kommentarformulars am Anfang auszublenden');

$_COM_A_NO="Nein";
$_COM_A_YES="Ja";

//comments.php
$_COM_C_COM_NUMBER = "Anzahl der Kommentare";
$_COM_C_NO_COM     = "Zur Zeit keine Kommentare  - Tue dir kein Zwang an und Benutze das Formular darunter...";
$_COM_C_POST       = "Ver&ouml;ffentlicht von";
$_COM_C_HOMEPAGE   = "Seine Homepage";
$_COM_C_DATE_ON    = "An";
$_COM_C_DATE_AT    = "bei";
$_COM_C_ADD_COM    = "Diesen Artikel Kommentieren ...";
$_COM_C_NAME       = "Name <small><i>(erfordelich)</i></small>";
$_COM_C_EMAIL      = "E-Mail <small><i>(erfordelich)</i></small>";
$_COM_C_EMAIL_NOT  = "Deine E-Mail wird auf der Seite nicht angezeigt - Einsehbar nur von Administrator";
$_COM_C_HOMEPAGE_IN= "Homepage";
$_COM_C_COM        = "Kommentar";
$_COM_C_FULLY      = "Bitte Formular kommplett ausf&uuml;llen!";
$_COM_C_NEW_COM    = "Neuer Kommentar";
$_COM_C_HAVE_NEW   = "Du hast ein neues Kommentar zu folgendem Artikel:";
$_COM_C_LOGIN      = "Bitte einloggen zum Publizieren oder Löschen dieses Artikels";
$_COM_C_QUICKLINK  = "Hier ein schneller Link zum Login";
$_COM_C_THANKS     = "Danke für deinen Kommentar";
$_COM_C_THANKS2    = "Danke für deinen Kommentar zu folgendem Artikel";
$_COM_C_ADMIN_REV  = "Administrator wird sich deine Kommentare in k&uuml;rze ansehen";
$_COM_C_ENTERED    = "Du bist drin";
$_COM_C_VISIT      = "Besucht unsere Seite wieder";
$_COM_C_THANKS3    = "Danke - Dein Kommentar wurde Erolgreich eingetragen";
$_COM_C_THANKS4    = "Danke - Dein Kommentar wurde Erolgreich eingetragen wird von Administrator geprüft werden!";
$_COM_C_SUBMIT     = "Absenden";
$_COM_C_RESET     = "Zur&uuml;cksetzen";
$_COM_C_NOT_AUTH   = "Du bist nicht autorisiert Kommentare zu hinterlassen - Bitte einloggen.";
?>