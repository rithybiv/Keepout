<?php
/**
* @version $Id: german.php,v 1.2 2004/11/06 00:33:28 ramiro Exp $
* @package Mambo_4.5.2
* @copyright (C) 2005 Ramiro G�mez
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambo is Free Software
* @autor Ramiro Gomez <web@ramiro.org>
*/
/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Auf diesen Speicherort ist kein direkter Zugriff m�glich.' );

/** common */
DEFINE('_LANGUAGE','de');
DEFINE('_NOT_AUTH','Sie haben nicht die erforderlichen Rechte, diese Ressource anzuzeigen.');
DEFINE('_DO_LOGIN','Sie m�ssen sich anmelden.');
DEFINE('_VALID_AZ09',"Eine g�ltige Eingabe f�r %s ist erforderlich. Keine Leerzeichen, mindestens %d Zeichen, erlaubte Zeichen: 0-9,a-z,A-Z");
DEFINE('_CMN_YES','Ja');
DEFINE('_CMN_NO','Nein');

DEFINE('_CMN_NAME','Name');
DEFINE('_CMN_DESCRIPTION','Beschreibung');
DEFINE('_CMN_SAVE','Speichern');
DEFINE('_CMN_CANCEL','Abbrechen');
DEFINE('_CMN_PRINT','Drucken');
DEFINE('_CMN_PDF','PDF');
DEFINE('_CMN_EMAIL','E-Mail');
DEFINE('_ICON_SEP','|');
DEFINE('_CMN_PARENT','�bergeordnet');
DEFINE('_CMN_ORDERING','Sortierung');
DEFINE('_CMN_ACCESS','Zugriffsebene');
DEFINE('_CMN_SELECT','Ausw�hlen');

DEFINE('_CMN_NEXT','Weiter');
DEFINE('_CMN_NEXT_ARROW',"&gt;&gt;");
DEFINE('_CMN_PREV','Zur�ck');
DEFINE('_CMN_PREV_ARROW',"&lt;&lt; ");

DEFINE('_CMN_SORT_NONE','Nicht sortieren');
DEFINE('_CMN_SORT_ASC','Aufsteigend sortieren');
DEFINE('_CMN_SORT_DESC','Absteigend sortieren');

DEFINE('_CMN_NEW','Neu');
DEFINE('_CMN_NONE','Keine');
DEFINE('_CMN_LEFT','Links');
DEFINE('_CMN_RIGHT','Rechts');
DEFINE('_CMN_CENTER','Mitte');
DEFINE('_CMN_ARCHIVE','Archivieren');
DEFINE('_CMN_UNARCHIVE','Dearchivieren');
DEFINE('_CMN_TOP','Open');
DEFINE('_CMN_BOTTOM','Unten');

DEFINE('_CMN_PUBLISHED',"Ver�ffentlicht");
DEFINE('_CMN_UNPUBLISHED',"Unver�ffentlicht");

DEFINE('_CMN_EDIT_HTML','HTML bearbeiten');
DEFINE('_CMN_EDIT_CSS','CSS bearbeiten');

DEFINE('_CMN_DELETE','L�schen');

DEFINE('_CMN_FOLDER','Ordner');
DEFINE('_CMN_SUBFOLDER','Unterordner');
DEFINE('_CMN_OPTIONAL','optional');
DEFINE('_CMN_REQUIRED','erforderlich');

DEFINE('_CMN_CONTINUE','Fortfahren');

DEFINE('_CMN_NEW_ITEM_LAST','Neue Objekte werden ans Ende gestellt. Die
Reihenfolge kann nach dem Speichern ge�ndert werden.');
DEFINE('_CMN_NEW_ITEM_FIRST','Neue Objekte werden an den Anfang gestellt. Die
Reihenfolge kann nach dem Speichern ge�ndert werden.');
DEFINE('_LOGIN_INCOMPLETE','Geben Sie Benutzername und Kennwort ein.');
DEFINE('_LOGIN_BLOCKED','Ihre Anmeldung wurde verhindert. Wenden Sie sich an den Administrator.');
DEFINE('_LOGIN_INCORRECT','Falscher Benutzername oder Kennwort. Bitte erneut versuchen.');
DEFINE('_LOGIN_NOADMINS','Sie k�nnen sich nicht anmelden. Es ist kein Administrator eingerichtet.');
DEFINE('_CMN_JAVASCRIPT','!Warnung! F�r die ordnungsgem��e Funktion muss Javascript aktiviert sein.');

DEFINE('_NEW_MESSAGE','Eine neue private Nachricht ist angekommen.');
DEFINE('_MESSAGE_FAILED','Der Benutzer hat sein Postfach gesperrt. Nachricht fehlgeschlagen.');

DEFINE('_CMN_IFRAMES', 'Diese Funktion funktioniert nicht richtig. Ihr Browser unterst�tzt keine Inline-Frames');

DEFINE('_INSTALL_WARN','Entfernen Sie aus Sicherheitsgr�nden das Installationsverzeichnis vollst�ndig, inklusive s�mtlicher Dateien und Unterordner. Laden Sie diese Seite dann erneut.');
DEFINE('_TEMPLATE_WARN','<font color=\"red\"><b>Vorlagedatei wurde nicht gefunden. Suche nach Vorlage:</b></font>');
DEFINE('_NO_PARAMS','F�r dieses Objekt sind keine Parameter vorhanden.');
DEFINE('_HANDLER','F�r den Typ sind keine Handler definiert.');

/** mambots */
DEFINE('_TOC_JUMPTO','Artikelindex');

/**  content */
DEFINE('_READ_MORE','Weiterlesen');
DEFINE('_READ_MORE_REGISTER','Registrieren Sie sich, um weiterzulesen...');
DEFINE('_MORE','Mehr...');
DEFINE('_ON_NEW_CONTENT', "Benutzer [%s] hat ein neues Inhaltsobjekt mit dem Titel [%s] aus dem Bereich [ %s ] und der Kategorie [ %s ] �bermittelt." );
DEFINE('_SEL_CATEGORY','- Kategorie w�hlen -');
DEFINE('_SEL_SECTION','- Bereich w�hlen -');
DEFINE('_SEL_AUTHOR','- Autor w�hlen -');
DEFINE('_SEL_POSITION','- Position w�hlen -');
DEFINE('_SEL_TYPE','- Typ w�hlen -');
DEFINE('_EMPTY_CATEGORY','Diese Kategorie enth�lt derzeit keine Objekte.');
DEFINE('_EMPTY_BLOG','Es sind keine Objekte zum Anzeigen vorhanden.');
DEFINE('_NOT_EXIST','Die angeforderte Seite ist nicht vorhanden.<br />W�hlen Sie eine Seite aus dem Hauptmen�.');

/** classes/html/modules.php */
DEFINE('_BUTTON_VOTE','Abstimmen');
DEFINE('_BUTTON_RESULTS','Ergebnisse');
DEFINE('_USERNAME','Benutzername');
DEFINE('_LOST_PASSWORD','Kennwort vergessen?');
DEFINE('_PASSWORD','Kennwort');
DEFINE('_BUTTON_LOGIN','Anmelden');
DEFINE('_BUTTON_LOGOUT','Abmelden');
DEFINE('_NO_ACCOUNT','Noch kein Benutzerkonto?');
DEFINE('_CREATE_ACCOUNT','Konto erstellen');
DEFINE('_VOTE_POOR','Schlecht');
DEFINE('_VOTE_BEST','Sehr gut');
DEFINE('_USER_RATING','Bewertung');
DEFINE('_RATE_BUTTON','Bewerten');
DEFINE('_REMEMBER_ME','Angemeldet bleiben');

/** contact.php */
DEFINE('_ENQUIRY','Anfrage');
DEFINE('_ENQUIRY_TEXT','Dies ist eine E-Mail-Anfrage von %s:');
DEFINE('_COPY_TEXT','Dies ist eine Kopie der folgenden Nachricht, die Sie an
%s �ber %s gesendet haben.');
DEFINE('_COPY_SUBJECT','Kopie von: ');
DEFINE('_THANK_MESSAGE','Danke f�r die E-Mail');
DEFINE('_CLOAKING','Diese E-Mail-Adresse ist gegen Spam gesch�tzt. Zur Anzeige muss Javascript aktiviert sein.');
DEFINE('_CONTACT_HEADER_NAME','Name');
DEFINE('_CONTACT_HEADER_POS','Position');
DEFINE('_CONTACT_HEADER_EMAIL','E-Mail');
DEFINE('_CONTACT_HEADER_PHONE','Telefon');
DEFINE('_CONTACT_HEADER_FAX','Fax');
DEFINE('_CONTACTS_DESC','Kontaktliste f�r diese Website');

/** classes/html/contact.php */
DEFINE('_CONTACT_TITLE','Kontakt');
DEFINE('_EMAIL_DESCRIPTION','Senden Sie eine E-Mail an:');
DEFINE('_NAME_PROMPT',' Name:');
DEFINE('_EMAIL_PROMPT',' E-Mail-Adresse:');
DEFINE('_MESSAGE_PROMPT',' Nachricht:');
DEFINE('_SEND_BUTTON','Senden');
DEFINE('_CONTACT_FORM_NC','Stellen Sie sicher, dass die Eingaben vollst�ndig und g�ltig sind.');
DEFINE('_CONTACT_TELEPHONE','Telefon: ');
DEFINE('_CONTACT_MOBILE','Mobiltelefon: ');
DEFINE('_CONTACT_FAX','Fax: ');
DEFINE('_CONTACT_EMAIL','E-Mail: ');
DEFINE('_CONTACT_NAME','Name: ');
DEFINE('_CONTACT_POSITION','Postition: ');
DEFINE('_CONTACT_ADDRESS','Adresse: ');
DEFINE('_CONTACT_MISC','Informationen: ');
DEFINE('_CONTACT_SEL','Kontakt w�hlen:');
DEFINE('_CONTACT_NONE','Es sind keine Kontaktdaten aufgef�hrt.');
DEFINE('_EMAIL_A_COPY','Eine Kopie dieser E-Mail an mich senden.');
DEFINE('_CONTACT_DOWNLOAD_AS','Informationen herunterladen als');
DEFINE('_VCARD','Visitenkarte');

/** pageNavigation */
DEFINE('_PN_PAGE','Seite');
DEFINE('_PN_OF','von');
DEFINE('_PN_START','Anfang');
DEFINE('_PN_PREVIOUS','Zur�ck');
DEFINE('_PN_NEXT','Weiter');
DEFINE('_PN_END','Ende');
DEFINE('_PN_DISPLAY_NR','Anzahl #');
DEFINE('_PN_RESULTS','Ergebnisse');

/** emailfriend */
DEFINE('_EMAIL_TITLE','E-Mail an einen Freund');
DEFINE('_EMAIL_FRIEND','Senden Sie dies an einen Freund.');
DEFINE('_EMAIL_FRIEND_ADDR',"E-Mail-Adresse des Freundes:");
DEFINE('_EMAIL_YOUR_NAME','Ihr Name:');
DEFINE('_EMAIL_YOUR_MAIL','Ihre E-Mail-Adresse:');
DEFINE('_SUBJECT_PROMPT',' Betreff:');
DEFINE('_BUTTON_SUBMIT_MAIL','E-Mail senden');
DEFINE('_BUTTON_CANCEL','Abbrechen');
DEFINE('_EMAIL_ERR_NOINFO','Sie m�ssen g�ltige Absender- und Empf�ngeradressen eingeben.');
DEFINE('_EMAIL_MSG',' Diese Seite von der Website "%s" wurde Ihnen von %s gesendet ( %s ).

Sie k�nnen Sie unter folgender Adresse erreichen: 
%s');
DEFINE('_EMAIL_INFO','Gesendet von');
DEFINE('_EMAIL_SENT','Gesendet an');
DEFINE('_PROMPT_CLOSE','Fenster schlie�en');

/** classes/html/content.php */
DEFINE('_AUTHOR_BY', ' Verfasst von');
DEFINE('_WRITTEN_BY', ' Geschrieben von');
DEFINE('_LAST_UPDATED', 'Letzte Aktualisierung');
DEFINE('_BACK','[ &lt; ]');
DEFINE('_LEGEND','Legende');
DEFINE('_DATE','Datum');
DEFINE('_ORDER_DROPDOWN','Reihenfolge');
DEFINE('_HEADER_TITLE','Objekttitel');
DEFINE('_HEADER_AUTHOR','Autor');
DEFINE('_HEADER_SUBMITTED','�bermittelt');
DEFINE('_HEADER_HITS','Seitenaufrufe');
DEFINE('_E_EDIT','Bearbeiten');
DEFINE('_E_ADD','Hinzuf�gen');
DEFINE('_E_WARNUSER','Brechen Sie die aktuelle �nderung ab, oder speichern Sie sie.');
DEFINE('_E_WARNTITLE','Inhaltsobjekte ben�tigen einen Titel.');
DEFINE('_E_WARNTEXT','Inhaltsobjekte ben�tigen einen Einleitungstext.');
DEFINE('_E_WARNCAT','W�hlen Sie eine Kategorie.');
DEFINE('_E_CONTENT','Inhalt');
DEFINE('_E_TITLE','Titel:');
DEFINE('_E_CATEGORY','Kategorie:');
DEFINE('_E_INTRO','Einleitungstext');
DEFINE('_E_MAIN','Haupttext');
DEFINE('_E_MOSIMAGE','EINF�GEN {mosimage}');
DEFINE('_E_IMAGES','Bilder');
DEFINE('_E_GALLERY_IMAGES','Galleriebilder');
DEFINE('_E_CONTENT_IMAGES','Inhaltsbilder');
DEFINE('_E_EDIT_IMAGE','Bild bearbeiten');
DEFINE('_E_INSERT','Einf�gen');
DEFINE('_E_UP','&#8593;');
DEFINE('_E_DOWN','&#8595;');
DEFINE('_E_REMOVE','Entfernen');
DEFINE('_E_SOURCE','Quelle:');
DEFINE('_E_ALIGN','Ausrichtung:');
DEFINE('_E_ALT','Alternativer Text:');
DEFINE('_E_BORDER','Rahmen:');
DEFINE('_E_CAPTION','Titelzeile:');
DEFINE('_E_APPLY','Anwenden');
DEFINE('_E_PUBLISHING','Info');
DEFINE('_E_STATE','Status:');
DEFINE('_E_AUTHOR_ALIAS','Autoralias:');
DEFINE('_E_ACCESS_LEVEL','Zugriffsebene:');
DEFINE('_E_ORDERING','Sortierung:');
DEFINE('_E_START_PUB','Beginn der Ver�ffentlichung:');
DEFINE('_E_FINISH_PUB','Ende der Ver�ffentlichung:');
DEFINE('_E_SHOW_FP','Auf Startseite anzeigen:');
DEFINE('_E_HIDE_TITLE','Objekttitel verbergen:');
DEFINE('_E_METADATA','Metadaten');
DEFINE('_E_M_DESC','Beschreibung:');
DEFINE('_E_M_KEY','Stichw�rter:');
DEFINE('_E_SUBJECT','Betreff:');
DEFINE('_E_EXPIRES','Ablaufdatum:');
DEFINE('_E_VERSION','Version:');
DEFINE('_E_ABOUT','�ber');
DEFINE('_E_CREATED','Erstellt:');
DEFINE('_E_LAST_MOD','Letzte �nderung:');
DEFINE('_E_HITS','Seitenaufrufe:');
DEFINE('_E_SAVE','Speichern');
DEFINE('_E_CANCEL','Abbrechen');
DEFINE('_E_REGISTERED','Nur registrierte Benutzer');
DEFINE('_E_ITEM_INFO','Objektinformationen');
DEFINE('_E_ITEM_SAVED','Objekt erfolgreich gespeichert.');
DEFINE('_ITEM_PREVIOUS','&lt; Zur�ck');
DEFINE('_ITEM_NEXT','Weiter &gt;');

/** content.php */
DEFINE('_SECTION_ARCHIVE_EMPTY','Derzeit sind keine archivierten Eintr�ge in diesem Bereich vorhanden. Kommen Sie sp�ter zur�ck.');
DEFINE('_CATEGORY_ARCHIVE_EMPTY','Derzeit sind keine archivierten Eintr�ge in dieser Kategorie vorhanden. Kommen Sie sp�ter zur�ck.');
DEFINE('_HEADER_SECTION_ARCHIVE','Bereicharchiv');
DEFINE('_HEADER_CATEGORY_ARCHIVE','Kategoriearchiv');
DEFINE('_ARCHIVE_SEARCH_FAILURE','Es sind keine archivierten Eintr�ge f�r %s %s vorhanden');	// values are month then year
DEFINE('_ARCHIVE_SEARCH_SUCCESS','Archivierte Eintr�ge f�r  %s %s');	// values are month then year
DEFINE('_FILTER','Filter');
DEFINE('_ORDER_DROPDOWN_DA','Datum aufsteigend');
DEFINE('_ORDER_DROPDOWN_DD','Datum absteigend');
DEFINE('_ORDER_DROPDOWN_TA','Titel aufsteigend');
DEFINE('_ORDER_DROPDOWN_TD','Titel absteigend');
DEFINE('_ORDER_DROPDOWN_HA','Seitenaufrufe aufsteigend');
DEFINE('_ORDER_DROPDOWN_HD','Seitenaufrufe absteigend');
DEFINE('_ORDER_DROPDOWN_AUA','Autor aufsteigend');
DEFINE('_ORDER_DROPDOWN_AUD','Autor absteigend');
DEFINE('_ORDER_DROPDOWN_O','Sortierung');

/** poll.php */
DEFINE('_ALERT_ENABLED','Cookies m�ssen aktiviert sein.');
DEFINE('_ALREADY_VOTE','Sie haben heute bereits bei dieser Umfrage abgestimmt.');
DEFINE('_NO_SELECTION','Es wurde keine Auswahl getroffen, versuchen Sie es erneut.');
DEFINE('_THANKS','Danke f�r die Teilnahme.');
DEFINE('_SELECT_POLL','Umfrage aus der Liste w�hlen');

/** classes/html/poll.php */
DEFINE('_JAN','Januar');
DEFINE('_FEB','Februar');
DEFINE('_MAR','M�rz');
DEFINE('_APR','April');
DEFINE('_MAY','Mai');
DEFINE('_JUN','Juni');
DEFINE('_JUL','Juli');
DEFINE('_AUG','August');
DEFINE('_SEP','September');
DEFINE('_OCT','Oktober');
DEFINE('_NOV','November');
DEFINE('_DEC','Dezember');
DEFINE('_POLL_TITLE','Umfrage - Ergebnisse');
DEFINE('_SURVEY_TITLE','Umfragettitel:');
DEFINE('_NUM_VOTERS','Anzahl der W�hler');
DEFINE('_FIRST_VOTE','Erste Stimme');
DEFINE('_LAST_VOTE','Letzte Stimme');
DEFINE('_SEL_POLL','Umfrage ausw�hlen:');
DEFINE('_NO_RESULTS','Es sind keine Ergebnisse f�r diese Umfrage vorhanden.');

/** registration.php */
DEFINE('_ERROR_PASS','Es wurde kein entsprechender Benutzer gefunden.');
DEFINE('_NEWPASS_MSG','Diese E-Mail ist dem Benutzerkonto $checkusername zugeordnet.\n'
.'Ein Webbenutzer von $mosConfig_live_site hat gerade eines neues Kennwort angefordert.\n\n'
.' Ihr neues Kennwort lautet: $newpass\n\nKeine Sorge, wenn diese Anforderung nicht von Ihnen stammt.'
.' Nur Sie sehen diese Meldung. Wenn es sich um einen Fehler handelt, melden Sie sich mit ihrem'
.' neuen Kennwort an und �ndern Sie es dann in das gew�nschte.');
DEFINE('_NEWPASS_SUB','$_sitename :: Neues Kennwort f�r - $checkusername');
DEFINE('_NEWPASS_SENT','Neues Benutzerkennwort erstellt und gesendet.');
DEFINE('_REGWARN_NAME','Geben Sie Ihren Namen ein.');
DEFINE('_REGWARN_UNAME','Geben Sie einen Benutzernamen ein.');
DEFINE('_REGWARN_MAIL','Geben Sie eine g�ltige E-Mail-Adresse ein.');
DEFINE('_REGWARN_PASS','Geben Sie ein g�ltiges Kennwort ein. Keine Leerzeichen, mindestens 6 Zeichen, erlaubte Zeichen: 0-9,a-z,A-Z');
DEFINE('_REGWARN_VPASS1','Best�tigen Sie das Kennwort.');
DEFINE('_REGWARN_VPASS2','Die Kennw�rter stimmen nicht �berein. Versuchen Sie es erneut.');
DEFINE('_REGWARN_INUSE','Benutzername oder Kennwort sind bereits vergeben. Versuchen Sie eine andere Eingabe.');
DEFINE('_REGWARN_EMAIL_INUSE', 'Diese E-Mail-Adresse ist bereits registriert. Wenn Sie Ihr Kennwort vergessen haben, klicken Sie auf "Kennwort vergessen". Ein neues Kennwort wird dann an Sie gesendet.');
DEFINE('_SEND_SUB','Kontodaten f�r %s bei %s');
DEFINE('_USEND_MSG_ACTIVATE', 'Hallo %s,

Danke, dass Sie sich bei %s registriert haben. Ihr Konto wird erstellt. Bevor Sie es verwenden k�nnen, m�ssen Sie es aktivieren.
Klicken Sie zur Aktivierung auf folgenden Link, oder kopieren Sie ihn in die Adresszeile Ihres Browsers:
%s

Nach der Aktivierung k�nnen Sie sich mit folgendem Benutzernamen und Kennwort bei %s anmelden:

Benutzername - %s
Kennwort - %s');
DEFINE('_USEND_MSG', "Hallo %s,

Danke f�r die Registierung bei %s.

Sie k�nnen sich jetzt bei %s mit dem registrierten Benutzernamen und dem zugeh�rigen Kennwort anmelden.");
DEFINE('_USEND_MSG_NOPASS','Hallo $name,\n\nSie wurden als Benutzer zu $mosConfig_live_site hinzugef�gt.\n'
.'Sie k�nnen sich bei $mosConfig_live_site mit dem registrierten Benutzernamen und dem zugeh�rigen Kennwort anmelden.\n\n'
.'Antworten Sie nicht auf diese Nachricht. Sie wurde automatisch vom System erzeugt und dient nur Ihrer Information.\n');
DEFINE('_ASEND_MSG','Hallo %s,

Ein neuer Benutzer hat sich bei %s registriert.
Diese E-Mail enth�lt die Anmeldedaten:

Name - %s
E-Mail - %s
Benutzername - %s

Antworten Sie nicht auf diese Nachricht. Sie wurde automatisch vom System erzeugt und dient nur Ihrer Information.');
DEFINE('_REG_COMPLETE_NOPASS','<div class="componentheading">Registrierung abgeschlossen.</div><br />&nbsp;&nbsp;'
.'Sie k�nnen Sie jetzt anmelden.<br />&nbsp;&nbsp;');
DEFINE('_REG_COMPLETE', '<div class="componentheading">Registrierung abgeschlossen!</div><br />You may now login.');
DEFINE('_REG_COMPLETE_ACTIVATE', '<div class="componentheading">Registrierung abgeschlossen.</div><br />Ihr Konto wurde erstellt, und der Aktivierungslink wurde in einer E-Mail an Sie gesendet. Beachten Sie, dass Sie das Konto zun�chst durch Klicken des Aktivierungslinks aktivieren m�ssen, bevor Sie sich anmelden k�nnen.');
DEFINE('_REG_ACTIVATE_COMPLETE', '<div class="componentheading">Aktivierung abgeschlossen.</div><br />Ihr Konto wurde aktiviert. Sie k�nnen sich nun mit dem bei der Registrierung gew�hlten Benutzernamen und Kennwort anmelden.');
DEFINE('_REG_ACTIVATE_NOT_FOUND', '<div class="componentheading">Ung�ltiger Aktivierungslink.</div><br />Dieses Konto ist nicht in unserer Datenbank vorhanden oder wurde bereits aktiviert.');

/** classes/html/registration.php */
DEFINE('_PROMPT_PASSWORD','Kennwort vergessen?');
DEFINE('_NEW_PASS_DESC','Geben Sie Benutzernamen und E-Mail-Adresse ein, und klicken Sie dann auf "Kennwort senden".<br />'
.'Sie erhalten in K�rze ein neues Kennwort. Verwenden Sie dieses Kennwort zum Zugriff auf die Website.');
DEFINE('_PROMPT_UNAME','Benutzername:');
DEFINE('_PROMPT_EMAIL','E-Mail-Adresse:');
DEFINE('_BUTTON_SEND_PASS','Kennwort senden');
DEFINE('_REGISTER_TITLE','Registrierung');
DEFINE('_REGISTER_NAME','Name:');
DEFINE('_REGISTER_UNAME','Benutzername:');
DEFINE('_REGISTER_EMAIL','E-Mail:');
DEFINE('_REGISTER_PASS','Kennwort:');
DEFINE('_REGISTER_VPASS','Kennwort best�tigen:');
DEFINE('_REGISTER_REQUIRED','Felder mit einem Asterisk (*) sind erforderlich.');
DEFINE('_BUTTON_SEND_REG','Registrierung senden');
DEFINE('_SENDING_PASSWORD','Ihr Kennwort wird zur angegebenen E-Mail-Adresse gesendet.<br />Sobald Sie dieses erhalten haben, '
.' k�nnen Sie sich anmelden und es �ndern.');

/** classes/html/search.php */
DEFINE('_SEARCH_TITLE','Suche');
DEFINE('_PROMPT_KEYWORD','Suchwort');
DEFINE('_SEARCH_MATCHES','%d Treffer');
DEFINE('_CONCLUSION','Suche nach <b>$searchword</b> ergab $totalRows Treffer.');
DEFINE('_NOKEYWORD','Keine Treffer');
DEFINE('_IGNOREKEYWORD','Mindestens ein Stoppwort wurde bei der Suche ignoriert.');
DEFINE('_SEARCH_ANYWORDS','Eines der W�rter');
DEFINE('_SEARCH_ALLWORDS','Alle W�rter');
DEFINE('_SEARCH_PHRASE','Exakt');
DEFINE('_SEARCH_NEWEST','Neu zuerst');
DEFINE('_SEARCH_OLDEST','Alt zuerst');
DEFINE('_SEARCH_POPULAR','Popul�r');
DEFINE('_SEARCH_ALPHABETICAL','Alphabetisch');
DEFINE('_SEARCH_CATEGORY','Bereich/Kategorie');

/** templates/*.php */
DEFINE('_ISO','charset=iso-8859-1');
DEFINE('_DATE_FORMAT','d.m.Y');  //Uses PHP's DATE Command Format - Depreciated
/**
* Modify this line to reflect how you want the date to appear in your site
*
*e.g. DEFINE("_DATE_FORMAT_LC","%A, %d %B %Y %H:%M"); //Uses PHP's strftime Command Format
*/
DEFINE('_DATE_FORMAT_LC',"%d.%m.%Y"); //Uses PHP's strftime Command Format
DEFINE('_DATE_FORMAT_LC2',"%d.%m.%Y, %H:%M");
DEFINE('_SEARCH_BOX','Suchen...');
DEFINE('_NEWSFLASH_BOX','Newsflash!');
DEFINE('_MAINMENU_BOX','Hauptmen�');

/** classes/html/usermenu.php */
DEFINE('_UMENU_TITLE','Benutzermen�');
DEFINE('_HI','Hi, ');

/** user.php */
DEFINE('_THANK_SUB','Danke f�r Ihre Eingabe. Diese wird vor der Ver�ffentlichung begutachtet.');
DEFINE('_UP_SIZE','Hochzuladende Dateien d�rfen nicht gr��er als 15 KB sein.');
DEFINE('_UP_EXISTS','Das Bild $userfile_name ist bereits vorhanden. Benennen Sie die Datei um, und versuchen Sie es erneut.');
DEFINE('_UP_COPY_FAIL','Kopie fehlgeschlagen');
DEFINE('_UP_TYPE_WARN','Nur die Formate GIF und JPEG d�rfen hochgeladen werden.');
DEFINE('_MAIL_SUB','Benutzer �bermittelt');
DEFINE('_MAIL_MSG','Hallo $adminName,\n\n\nVom Benutzer �bermittelt: $type:\n
[ $title ]\n wurde von Benutzer:\n [ $author ]\n'
.' f�r $mosConfig_live_site �bermittelt.\n\n\n\n'
.'Besuchen Sie $mosConfig_live_site/administrator um $type zu �berpr�fen.\n\n'
.'Antworten Sie nicht auf diese Nachricht. Sie wurde automatisch vom System erzeugt und dient nur Ihrer Information.\n');
DEFINE('_PASS_VERR1','Wenn Sie Ihr Kennwort �ndern, geben Sie es zur Best�tigung erneut ein.');
DEFINE('_PASS_VERR2','Wenn Sie Ihr Kennwort �ndern, stellen Sie sicher, dass die beiden Kennworteingaben �bereinstimmen.');
DEFINE('_UNAME_INUSE','Dieser Benutzername ist bereits vergeben.');
DEFINE('_UPDATE','Aktualisieren');
DEFINE('_USER_DETAILS_SAVE','Ihre Einstellungen wurden gespeichert.');
DEFINE('_USER_LOGIN','Anmelden');

/** components/com_user */
DEFINE('_EDIT_TITLE','Bearbeiten Sie Ihre Anmeldedaten');
DEFINE('_YOUR_NAME','Ihr Name:');
DEFINE('_EMAIL','E-Mail:');
DEFINE('_UNAME','Benutzername:');
DEFINE('_PASS','Kennwort:');
DEFINE('_VPASS','Kennwort best�tigen:');
DEFINE('_SUBMIT_SUCCESS','�bermittlung erfolgreich.');
DEFINE('_SUBMIT_SUCCESS_DESC','Ihr Objekt wurde zu den Administratoren �bermittelt. Vor der Ver�ffentlichung wird es �berpr�ft.');

DEFINE('_WELCOME','Willkommen!');
DEFINE('_WELCOME_DESC','Willkommen im Benutzerbereich unserer Site');
DEFINE('_CONF_CHECKED_IN','Alle bearbeiteten Objekte sind jetzt �bermittelt');
DEFINE('_CHECK_TABLE','�bermittlungstabelle');
DEFINE('_CHECKED_IN','�bermittelt');
DEFINE('_CHECKED_IN_ITEMS',' Objekt(e)');
DEFINE('_PASS_MATCH','Kennw�rter stimmen nicht �berein.');

/** components/com_banners */
DEFINE('_BNR_CLIENT_NAME','Sie m�ssen einen Kundennamen ausw�hlen.');
DEFINE('_BNR_CONTACT','Sie m�ssen einen Kontakt f�r den Kunden ausw�hlen.');
DEFINE('_BNR_VALID_EMAIL','Sie m�ssen f�r den Kunden eine g�ltige E-Mail-Adresse ausw�hlen.');
DEFINE('_BNR_CLIENT','Sie m�ssen einen Kunden ausw�hlen,');
DEFINE('_BNR_NAME','Sie m�ssen einen Namen f�r das Banner ausw�hlen.');
DEFINE('_BNR_IMAGE','Sie m�ssen ein Bild f�r das Banner ausw�hlen.');
DEFINE('_BNR_URL','Sie m�ssen einen URL/Bannercode f�r das Banner ausw�hlen.');

/** components/com_login */
DEFINE('_ALREADY_LOGIN','Sie sind bereits angemeldet.');
DEFINE('_LOGOUT','KLicken Sie zum Abmelden hier');
DEFINE('_LOGIN_TEXT','Geben Sie Ihre Benutzerdaten ein, um vollen Zugriff zu erhalten.');
DEFINE('_LOGIN_SUCCESS','Sie sind angemeldet.');
DEFINE('_LOGOUT_SUCCESS','Sie sind abgemeldet.');
DEFINE('_LOGIN_DESCRIPTION','Melden Sie sich an, um den gesch�tzten Bereich anzuzeigen.');
DEFINE('_LOGOUT_DESCRIPTION','Sie sind derzeit im gesch�tzten Bereich der Site angemeldet.');

/** components/com_weblinks */
DEFINE('_WEBLINKS_TITLE','Weblinks');
DEFINE('_WEBLINKS_DESC','Hier werden regelm��ig interessante Webseiten vorgestellt.'
.'<br />W�hlen Sie unten zun�chst das Thema, und klicken Sie dann auf den gew�nschten Link.');
DEFINE('_HEADER_TITLE_WEBLINKS','Weblink');
DEFINE('_SECTION','Bereich');
DEFINE('_SUBMIT_LINK','Weblink hinzuf�gen');
DEFINE('_URL','URL:');
DEFINE('_URL_DESC','Beschreibung:');
DEFINE('_NAME','Name:');
DEFINE('_WEBLINK_EXIST','Es ist bereits ein Weblink mit diesem Namen vorhanden. Versuchen Sie es erneut.');
DEFINE('_WEBLINK_TITLE','Ein Weblink muss einen Titel haben.');

/** components/com_newfeeds */
DEFINE('_FEED_NAME','Feedname');
DEFINE('_FEED_ARTICLES','# Artikel');
DEFINE('_FEED_LINK','Feedlink');

/** whos_online.php */
DEFINE('_WE_HAVE', '');
DEFINE('_AND', ' und ');
DEFINE('_GUEST_COUNT','$guest_array Gast');
DEFINE('_GUESTS_COUNT','$guest_array G�ste');
DEFINE('_MEMBER_COUNT','$user_array Mitglied');
DEFINE('_MEMBERS_COUNT','$user_array Mitglieder');
DEFINE('_ONLINE',' online');
DEFINE('_NONE','Keine Benutzer online');

/** modules/mod_stats.php */
DEFINE('_TIME_STAT','Zeit');
DEFINE('_MEMBERS_STAT','Mitglieder');
DEFINE('_HITS_STAT','Seitenaufrufe');
DEFINE('_NEWS_STAT','News');
DEFINE('_LINKS_STAT','Weblinks');
DEFINE('_VISITORS','Besucher');

/** /adminstrator/components/com_menus/admin.menus.html.php */
DEFINE('_MAINMENU_HOME','* Das erste im Men� [mainmenu] gespeicherte Objekt
ist die standardm��ige Startseite dieser Site *');
DEFINE('_MAINMENU_DEL','* Dieses Men� kann nicht gel�scht werden, da es f�r
die ordnungsgem��e Ausf�hrung von Mambo erforderlich ist *');
DEFINE('_MENU_GROUP','* Einige Men�typen werden in mehr als einer Gruppe angezeigt *');


/** administrators/components/com_users */
DEFINE('_NEW_USER_MESSAGE_SUBJECT', 'Neue Anmeldedaten' );
DEFINE('_NEW_USER_MESSAGE', 'Hallo %s,


Sie wurden von einem Administrator, %s als Benutzer hinzugef�gt.

Ihre Daten f�r die Anmeldung bei %s sind:

Benutzername - %s
Kennwort - %s

Antworten Sie nicht auf diese Nachricht. Sie wurde automatisch vom System erzeugt und dient nur Ihrer Information');

/** administrators/components/com_massmail */
DEFINE('_MASSMAIL_MESSAGE', "Dies ist eine E-Mail von '%s'

Nachricht:
" );

?>
