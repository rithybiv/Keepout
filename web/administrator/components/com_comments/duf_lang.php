<?php
// Copyright (C) 2003 Chanh Ong
// All rights reserved.
// This source file is part of the COMBO - Comments on Articles
// custom Component By Chanh Ong - http://ongetc.com
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
//

//admin.comments.html.php
DEFINE('_COM_A_KEEPUPTODATE','Als je op de hoogte wilt blijven van deze en andere goeie componenten van Chanh Ong schrijf je dan in voor de mailing list door op deze knoppen te klikken');
DEFINE('_COM_A_SUBSCRIBE','Abonneren');
DEFINE('_COM_A_UNSUBSCRIBE','Abonnement opzeggen');
DEFINE('_COM_A_BACKUP','Backup');
DEFINE('_COM_A_BACKUP_DESC','Backup de mos_content_comments tabel');
DEFINE('_COM_A_RESTORE','Terugzetten');
DEFINE('_COM_A_RESTORE_DESC','De mos_content_comments tabel terugzetten');
DEFINE('_COM_A_CONFIG','Configuratie');
DEFINE('_COM_A_CONFIG_DESC','Verander de configuratie');
DEFINE('_COM_A_INSTRUCTIONS','Instructies');
DEFINE('_COM_A_INSTRUCTIONS_DESC','Post Installatie Configuratie');
DEFINE('_COM_A_ABOUT','Over');
DEFINE('_COM_A_ABOUT_DESC','Over dit component');
DEFINE('_COM_A_LINK','Link');
DEFINE('_COM_A_LINK_DESC','Naar de auteurs website');
DEFINE('_COM_A_CHECK','Controleer voor updates');
DEFINE('_COM_A_VERSION','Gebruikte versie is ');
DEFINE('_COM_A_DONATE','Aub, neem in overweging om de onderstaande knop aan
te klikken en mij £10 Britse ponden te sturen. Het zal mij zeker motiveren
dit script te verbeteren..');
DEFINE('_COM_A_REVIEW','Beoordeel Commentaren (Nieuwste Eerst)');
DEFINE('_COM_A_DISPLAY','Toon #');
DEFINE('_COM_A_NAME_SUB','Naam');
DEFINE('_COM_A_EMAIL_SUB','E-mail');
DEFINE('_COM_A_HOMEPAGE','Homepage');
DEFINE('_COM_A_COMMENT','Commentaar');
DEFINE('_COM_A_ARTICLE','Artikel');
DEFINE('_COM_A_PUBLISHED','Gepubliceerd');
DEFINE('_COM_A_MOS_BY','Een MOS4.5 Custom Component van');
DEFINE('_COM_A_CURRENT_SETTINGS','Huidige Stand');
DEFINE('_COM_A_EXPLANATION','Verklaring');
DEFINE('_COM_A_ADMIN_EMAIL','Admin E-mail');
DEFINE('_COM_A_ADMIN_EMAIL_DESC','Als e-mail aanstaat zal er een mailtje
gestuurd worden wanneer er een nieuw commentaar is toegevoegd');
DEFINE('_COM_A_ADMIN_ALERTS','Admin E-mail Notificatie');
DEFINE('_COM_A_ADMIN_EMAIL_ENABLE','Zet e-mails naar de Admin aan/uit');
DEFINE('_COM_A_VISITOR_EMAIL','Bezoeker Email Notificatie');
DEFINE('_COM_A_VISITOR_EMAIL_DESC','Zet e-mails naar de bezoeker die
commentaar heeft achtergelaten aan/uit');
DEFINE('_COM_A_REVIEW_SUBM','Beoordeel Inzendingen');
DEFINE('_COM_A_REVIEW_DESC','Als je dit op &quot;Ja&quot; zet, worden de
commentaren aan de database toegevoegd en zullen op je wachten om beoordeeld
en gepubliceerd te worden alvorens ze te zien zullen zijn. Je krijgt
<strong>alleen</strong> een e-mail als er een waarde staat in &quot;Admin
e-mail&quot; en je &quot;Admin Email Notificatie&quot; op &quot;Ja&quot;
hebt gezet');
DEFINE('_COM_A_REGISTERED_ONLY','Alleen geregistreerde gebruikers');
DEFINE('_COM_A_REG_ONLY_DESC','Zet op &quot;Ja&quot; om alleen ingelogde
gebruikers commentaar te tonen en te laten maken. Zet op &quot;Nee&quot; om
iedere bezoeker de commentaren te laten zien');
DEFINE('_COM_A_NOTIFY_VERSION','Bericht bij een nieuwe versie');
DEFINE('_COM_A_NOT_VER_DESC','Als dit op &quot;Ja&quot; staat, zie je op het
hoofdscherm wanneer er een update van deze component beschikbaar is.
(<em>MERK OP: de enige data die naar update server gezonden wordt is je
versie nummer</em>)');
DEFINE('_COM_A_HAVE_DONATED','Heb je al gedoneerd?');
DEFINE('_COM_A_DONATE2','Aub, neem in overweging om GBP&pound;10.00 via
paypal te doneren. Dit zal mij inspireren dit script verder te verbeteren!
:-)');
DEFINE('_COM_A_IMPORTANT_NOTE','BELANGRIJK');
DEFINE('_COM_A_TEMPLATE','Om Mambo in staat te stellen om te controleren of
het een artikel laat zien waarop commentaar geleverd kan worden moet je een
kleine verandering in je template aanbrengen.<br><a
href="index2.php?option=templates&task=edit">Edit jouw template file</a> en
zoek de volgende regel op');
DEFINE('_COM_A_CHANGE_TO','En verander het in het volgende');
DEFINE('_COM_A_HAVE_FUN','Dat is alles! ~ (Ik beantwoord geen e-mail meer in
trant van &quot;<em>Ik heb jouw component geinstalleerd maar ik zie het
formulier niet</em>&quot; :-)</p> <p>          Veel Plezier!</p> <p>~<a
href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
DEFINE('_COM_A_FORCE_PREVIEW','Forceer nakijken');
DEFINE('_COM_A_FORCE_PREVIEW_TEXT','Zet dit op &quot;Ja&quot; om te forceren
dat je bezoekers hun commentaar nakijken voordat het definitief ingezonden
wordt');
DEFINE('_COM_A_HIDE','Verberg commentaar');
DEFINE('_COM_A_HIDE_DESC','Toon &quot;Aantal commentaren (x) - Voeg je commentaar op dit artikel toe&quot; in plaats
van standaard alle commentaren en het formulier');
DEFINE('_COM_A_DATE','Date');
DEFINE('_COM_A_HIDE_URL','Hide URL');
DEFINE('_COM_A_HIDE_URL_DESC','Hide URL - Use to hide URL on the comments form by default');

$_COM_A_NO="Nee";
$_COM_A_YES="Ja";

//comments.php
$_COM_C_COM_NUMBER = "Aantal commentaren";
$_COM_C_NO_COM     = "Er is nog geen commentaar op dit stuk <br /> Voeg er
eentje toe met het formulier hieronder...";
$_COM_C_POST       = "Gemaakt door";
$_COM_C_HOMEPAGE   = "Homepage";
$_COM_C_DATE_ON    = "op";
$_COM_C_DATE_AT    = "om";
$_COM_C_ADD_COM    = "Voeg je commentaar op dit artikel toe...";
$_COM_C_NAME       = "Naam <small><i>(verplicht)</i></small>";
$_COM_C_EMAIL      = "E-mail <small><i>(verplicht)</i></small>";
$_COM_C_EMAIL_NOT  = "Je e-mail wordt niet op de site getoond - alleen aan
onze administrator";
$_COM_C_HOMEPAGE_IN= "Homepage";
$_COM_C_COM        = "Commentaar";
$_COM_C_FULLY      = "Vul het formulier volledig in!";
$_COM_C_NEW_COM    = "Nieuw commentaar op";
$_COM_C_HAVE_NEW   = "Je hebt een nieuw commentaar op artikel:";
$_COM_C_LOGIN      = "Login en publiceer of verwijder dit commentaar";
$_COM_C_QUICKLINK  = "Hier is een quick link om in te loggen";
$_COM_C_THANKS     = "Bedankt voor je commentaar op";
$_COM_C_THANKS2    = "Bedankt voor je commentaar op het volgende artikel";
$_COM_C_ADMIN_REV  = "Een admin zal spoedig je commentaar beoordelen";
$_COM_C_ENTERED    = "Je voerde in";
$_COM_C_VISIT      = "Bezoek onze site gauw nog eens op";
$_COM_C_THANKS3    = "Bedankt voor je commentaar - Het is toegevoegd aan
deze pagina";
$_COM_C_THANKS4    = "Bedankt voor je commentaar - Het zal worden beoordeeld
worden door een administrator alvorens het gepubliceerd wordt!";
$_COM_C_SUBMIT     = "Versturen";
$_COM_C_RESET     = "Reset";
$_COM_C_NOT_AUTH   = "Je bent niet geauthoriseerd om commentaar achter te
laten - Log asljeblieft eerst in.";
?>

