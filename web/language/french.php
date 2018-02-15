<?php
/**
* @version $Id: french.php,v 1.60.3 2005/02/28 09:50:23 mamboportail.net - mambofrance.org Exp $
* @package Mambo_4.5.2
* @copyright (C) 2000 - 2004 Miro International Pty Ltd
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambo is Free Software
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'L&#39;acc&egrave;s direct &agrave; ce fichier n&#39;est pas autoris&eacute;.' ); 

/** common */
DEFINE('_LANGUAGE','fr'); // Param&egrave;tre initial 'en'
DEFINE('_NOT_AUTH','Vous n&#39;&ecirc;tes pas autoris&eacute;(e) &agrave; acc&eacute;der &agrave; cette ressource.<br />Vous devez vous connecter.');
DEFINE('_DO_LOGIN','Vous devez vous identifier.');
DEFINE('_VALID_AZ09','Saisissez un %s valide&nbsp;:  sans espace, au moins %d caract&egrave;res, alphanum&eacute;riques uniquement (0-9,a-z,A-Z)');
DEFINE('_CMN_YES','Oui');
DEFINE('_CMN_NO','Non');
DEFINE('_CMN_SHOW','Afficher');
DEFINE('_CMN_HIDE','Cacher');

DEFINE('_CMN_NAME','Nom');
DEFINE('_CMN_DESCRIPTION','Description');
DEFINE('_CMN_SAVE','Sauvegarder');
DEFINE('_CMN_CANCEL','Annuler');
DEFINE('_CMN_PRINT','Version imprimable');
DEFINE('_CMN_PDF','Convertir en PDF');
DEFINE('_CMN_EMAIL','Sugg&eacute;rer par mail');
DEFINE('_ICON_SEP','|');
DEFINE('_CMN_PARENT','Parent');
DEFINE('_CMN_ORDERING','Trier');
DEFINE('_CMN_ACCESS','Niveau d&#39;acc&egrave;s');
DEFINE('_CMN_SELECT','S&eacute;lectionner');

DEFINE('_CMN_NEXT','Suivant');
DEFINE('_CMN_NEXT_ARROW','&gt;&gt;');
DEFINE('_CMN_PREV','Pr&eacute;c&eacute;dent');
DEFINE('_CMN_PREV_ARROW','&lt;&lt;');

DEFINE('_CMN_SORT_NONE','Aucun Tri');
DEFINE('_CMN_SORT_ASC','Tri Croissant');
DEFINE('_CMN_SORT_DESC','Tri D&eacute;croissant');

DEFINE('_CMN_NEW','Nouveau');
DEFINE('_CMN_NONE','Aucun');
DEFINE('_CMN_LEFT','Gauche');
DEFINE('_CMN_RIGHT','Droite');
DEFINE('_CMN_CENTER','Centre');
DEFINE('_CMN_ARCHIVE','Archiver');
DEFINE('_CMN_UNARCHIVE','D&eacute;sarchiver');
DEFINE('_CMN_TOP','Haut');
DEFINE('_CMN_BOTTOM','Bas');

DEFINE('_CMN_PUBLISHED','Publi&eacute;');
DEFINE('_CMN_UNPUBLISHED','Non publi&eacute;');

DEFINE('_CMN_EDIT_HTML','Editer HTML');
DEFINE('_CMN_EDIT_CSS','Editer CSS');

DEFINE('_CMN_DELETE','Effacer');

DEFINE('_CMN_FOLDER','R&eacute;pertoire');
DEFINE('_CMN_SUBFOLDER','Sous-r&eacute;pertoire');
DEFINE('_CMN_OPTIONAL','Facultatif');
DEFINE('_CMN_REQUIRED','Obligatoire');

DEFINE('_CMN_CONTINUE','Continuer');

DEFINE('_CMN_NEW_ITEM_LAST','Les nouveaux &eacute;l&eacute;ments sont plac&eacute;s en derni&egrave;re position');
DEFINE('_CMN_NEW_ITEM_FIRST','Les nouveaux &eacute;l&eacute;ments sont plac&eacute;s en premi&egrave;re position');
DEFINE('_LOGIN_INCOMPLETE','Merci de renseigner votre identifiant et votre mot de passe.');
DEFINE('_LOGIN_BLOCKED','Votre acc&egrave;s a &eacute;t&eacute; bloqu&eacute;. Veuillez contacter un administrateur.');
DEFINE('_LOGIN_INCORRECT','Identifiant ou mot de passe incorrect. Merci de r&eacute;essayer.');
DEFINE('_LOGIN_NOADMINS','Vous ne pouvez pas vous identifier. Aucun administrateur n&#39;a &eacute;t&eacute; d&eacute;clar&eacute;.');
DEFINE('_CMN_JAVASCRIPT','!Avertissement! votre navigateur doit autoriser le javascript pour que la navigation sur ce site soit plus agr&eacute;able.');

DEFINE('_NEW_MESSAGE','Un nouveau message priv&eacute; vient de vous &ecirc;tre envoy&eacute;');
DEFINE('_MESSAGE_FAILED','Cet utilisateur a bloqu&eacute; sa boite de r&eacute;ception. Envoi du message impossible.');

DEFINE('_CMN_IFRAMES', 'Cette option ne fonctionnera pas correctement car votre navigateur ne supporte pas les iframes');

DEFINE('_INSTALL_WARN','Pour votre s&eacute;curit&eacute;, merci de supprimer le r&eacute;pertoire d&#39installation ainsi que tous les fichiers et sous-dossiers qu&#39il contient - ensuite vous pourrez rafra&icirc;chir cette page');
DEFINE('_TEMPLATE_WARN','<font color=\"red\"><B>Fichier template non trouv&eacute;! Le fichier recherch&eacute;&nbsp;:</b></font>');
DEFINE('_NO_PARAMS','Aucun param&egrave;tre d&eacute;fini pour ce module');
DEFINE('_HANDLER','Pas de gestionnaire d&eacute;fini pour ce type');

/** mambots */
DEFINE('_TOC_JUMPTO','Index de l&#39;article');

/**  content */
DEFINE('_READ_MORE','Lire la suite...');
DEFINE('_READ_MORE_REGISTER','Inscrivez-vous pour lire la suite...');
DEFINE('_MORE','Suite...');
DEFINE('_ON_NEW_CONTENT', 'Un nouveau contenu a &eacute;t&eacute; soumis par [ %s ] intitul&eacute; [ %s ] dans la section [ %s ] et la cat&eacute;gorie [ %s ]' );
DEFINE('_SEL_CATEGORY','- S&eacute;lectionner une cat&eacute;gorie -');
DEFINE('_SEL_SECTION','- S&eacute;lectionner une section -');
DEFINE('_SEL_AUTHOR','- S&eacute;lectionner Auteur -');
DEFINE('_SEL_POSITION','- S&eacute;lectionner Position -');
DEFINE('_SEL_TYPE','- S&eacute;lectionner Type -');
DEFINE('_EMPTY_CATEGORY','Cette cat&eacute;gorie ne contient aucune publication');
DEFINE('_EMPTY_BLOG','Aucune publication a afficher');
DEFINE('_NOT_EXIST','Cette page est indisponible.<br />Veuillez faire un autre choix dans le menu g&eacute;n&eacute;ral.');

/** classes/html/modules.php */
DEFINE('_BUTTON_VOTE','Voter');
DEFINE('_BUTTON_RESULTS','R&eacute;sultats');
DEFINE('_USERNAME','Nom d&#39;utilisateur');
DEFINE('_LOST_PASSWORD','Perdu votre mot de passe&nbsp;?');
DEFINE('_PASSWORD','Mot de passe');
DEFINE('_BUTTON_LOGIN','Se connecter');
DEFINE('_BUTTON_LOGOUT','Se d&eacute;connecter');
DEFINE('_NO_ACCOUNT','Pas encore de compte&nbsp;?');
DEFINE('_CREATE_ACCOUNT','Enregistrez-vous');
DEFINE('_VOTE_POOR','Faible');
DEFINE('_VOTE_BEST','Meilleur');
DEFINE('_USER_RATING','Appr&eacute;ciation des Utilisateurs');
DEFINE('_RATE_BUTTON','Appr&eacute;ciation');
DEFINE('_REMEMBER_ME','Se souvenir de moi');

/** contact.php */
DEFINE('_ENQUIRY','Demande');
DEFINE('_ENQUIRY_TEXT','Une demande de contact a &eacute;t&eacute; formul&eacute;e par e-mail via %s de la part de');
DEFINE('_COPY_TEXT','Ceci est une copie du message que vous avez envoy&eacute; &agrave; l&#39;administrateur de %s');
DEFINE('_COPY_SUBJECT','Copie de: ');
DEFINE('_THANK_MESSAGE','Merci pour votre message');
DEFINE('_CLOAKING','Cet email est prot&eacute;g&eacute; contre les robots collecteurs de mails, votre navigateur doit accepter le Javascript pour le voir');
DEFINE('_CONTACT_HEADER_NAME','Nom');
DEFINE('_CONTACT_HEADER_POS','Titre');
DEFINE('_CONTACT_HEADER_EMAIL','Email');
DEFINE('_CONTACT_HEADER_PHONE','T&eacute;l&eacute;phone');
DEFINE('_CONTACT_HEADER_FAX','Fax');
DEFINE('_CONTACTS_DESC','La liste des contacts du site.');


/** classes/html/contact.php */
DEFINE('_CONTACT_TITLE','Contact');
DEFINE('_EMAIL_DESCRIPTION','Envoyez un email &agrave; ce contact&nbsp;:');
DEFINE('_NAME_PROMPT',' Entrez votre nom&nbsp;:');
DEFINE('_EMAIL_PROMPT',' Saisissez votre adresse email&nbsp;:');
DEFINE('_MESSAGE_PROMPT',' Saisissez votre message&nbsp;:');
DEFINE('_SEND_BUTTON','Envoyer');
DEFINE('_CONTACT_FORM_NC','Assurez-vous d&#39;avoir rempli correctement votre formulaire avant de le valider.');
DEFINE('_CONTACT_TELEPHONE','T&eacute;l&eacute;phone&nbsp;:');
DEFINE('_CONTACT_MOBILE','Mobile&nbsp;:');
DEFINE('_CONTACT_FAX','T&eacute;l&eacute;copie&nbsp;:');
DEFINE('_CONTACT_EMAIL','Email&nbsp;:');
DEFINE('_CONTACT_NAME','Nom&nbsp;:');
DEFINE('_CONTACT_POSITION','Titre&nbsp;:');
DEFINE('_CONTACT_ADDRESS','Adresse&nbsp;:');
DEFINE('_CONTACT_MISC','Information&nbsp;:');
DEFINE('_CONTACT_SEL','S&eacute;lectionnez un contact&nbsp;:');
DEFINE('_CONTACT_NONE','Aucun profil de contact d&eacute;fini.');
DEFINE('_EMAIL_A_COPY','Recevoir une copie de cet e-mail');
DEFINE('_CONTACT_DOWNLOAD_AS','T&eacute;l&eacute;charger les informations comme');
DEFINE('_VCARD','VCard');

/** pageNavigation */
DEFINE('_PN_PAGE','Page');
DEFINE('_PN_OF','sur');
DEFINE('_PN_START','D&eacute;but');
DEFINE('_PN_PREVIOUS','Pr&eacute;c&eacute;dente');
DEFINE('_PN_NEXT','Suivante');
DEFINE('_PN_END','Fin');
DEFINE('_PN_DISPLAY_NR','Affiche #');
DEFINE('_PN_RESULTS','R&eacute;sultats');

/** emailfriend */
DEFINE('_EMAIL_TITLE','Sugg&eacute;rer l&#39;article &agrave; un ami');
DEFINE('_EMAIL_FRIEND','Sugg&eacute;rer l&#39;article &agrave; un ami');
DEFINE('_EMAIL_FRIEND_ADDR','Son adresse email&nbsp;:');
DEFINE('_EMAIL_YOUR_NAME','Votre nom&nbsp;:');
DEFINE('_EMAIL_YOUR_MAIL','Votre adresse email&nbsp;:');
DEFINE('_SUBJECT_PROMPT','Objet du message&nbsp;:');
DEFINE('_BUTTON_SUBMIT_MAIL','Envoyer');
DEFINE('_BUTTON_CANCEL','Annuler');
DEFINE('_EMAIL_ERR_NOINFO','Vous devez saisir une adresse email valide');
DEFINE('_EMAIL_MSG',' Une page du site %s vous est sugg&eacute;r&eacute;e par %s ( %s ).

Vous pouvez consulter la page en question &agrave; l&#39;adresse suivante:
%s

Cordialement.');
DEFINE('_EMAIL_INFO','Publication envoy&eacute;e par');
DEFINE('_EMAIL_SENT','Cette publication a &eacute;t&eacute; sugg&eacute;r&eacute;e &agrave;');
DEFINE('_PROMPT_CLOSE','Fermer la fen&ecirc;tre');

/** classes/html/content.php */
DEFINE('_AUTHOR_BY', ' Soumis par'); 
DEFINE('_WRITTEN_BY', ' Ecrit par');
DEFINE('_LAST_UPDATED', ' Derni&egrave;re mise &agrave; jour&nbsp;:');
DEFINE('_BACK','[&nbsp;Retour&nbsp;]');
DEFINE('_LEGEND','L&eacute;gende');
DEFINE('_DATE','Date');
DEFINE('_ORDER_DROPDOWN','Trier');
DEFINE('_HEADER_TITLE','Titre de la publication');
DEFINE('_HEADER_AUTHOR','Auteur');
DEFINE('_HEADER_SUBMITTED','Soumis');
DEFINE('_HEADER_HITS','Clics');
DEFINE('_E_EDIT','Editer');
DEFINE('_E_ADD','Ajouter');
DEFINE('_E_WARNUSER','Validez ou annulez la modification en cours');
DEFINE('_E_WARNTITLE','Une publication doit avoir un titre');
DEFINE('_E_WARNTEXT','Le contenu de la publication doit avoir une introduction');
DEFINE('_E_WARNCAT','S&eacute;lectionnez une cat&eacute;gorie');
DEFINE('_E_CONTENT','Contenu');
DEFINE('_E_TITLE','Titre&nbsp;:');
DEFINE('_E_CATEGORY','Cat&eacute;gorie&nbsp;:');
DEFINE('_E_INTRO','Texte d&#39;introduction');
DEFINE('_E_MAIN','Texte principal');
DEFINE('_E_MOSIMAGE','INSERT {mosimage}'); // Ne pas traduire c'est une commande SQL
DEFINE('_E_IMAGES','Images');
DEFINE('_E_GALLERY_IMAGES','Galerie d&#39;images');
DEFINE('_E_CONTENT_IMAGES','Images s&eacute;lectionn&eacute;es');
DEFINE('_E_EDIT_IMAGE','Propri&eacute;t&eacute;s de l&#39;image');
DEFINE('_E_INSERT','Insertion');
DEFINE('_E_UP','Au dessus');
DEFINE('_E_DOWN','Au dessous');
DEFINE('_E_REMOVE','Suppression');
DEFINE('_E_SOURCE','Source&nbsp;:');
DEFINE('_E_ALIGN','Alignement&nbsp;:');
DEFINE('_E_ALT','Balise alt&nbsp;:');
DEFINE('_E_BORDER','Bordure&nbsp;:');
DEFINE('_E_CAPTION','Caption&nbsp;:');
DEFINE('_E_APPLY','Appliquer');
DEFINE('_E_PUBLISHING','Publication');
DEFINE('_E_STATE','Etat&nbsp;:');
DEFINE('_E_AUTHOR_ALIAS','Alias de l&#39;auteur&nbsp;:');
DEFINE('_E_ACCESS_LEVEL','Niveau d&#39;acc&egrave;s&nbsp;:');
DEFINE('_E_ORDERING','Ordre&nbsp;:');
DEFINE('_E_START_PUB','D&eacute;but de publication&nbsp;:');
DEFINE('_E_FINISH_PUB','Fin de publication&nbsp;:');
DEFINE('_E_SHOW_FP','Afficher en page d&#39;accueil&nbsp;:');
DEFINE('_E_HIDE_TITLE','Cacher le titre de l&#39;&eacute;l&eacute;ment&nbsp;:');
DEFINE('_E_METADATA','M&eacute;tadonn&eacute;es');
DEFINE('_E_M_DESC','Description&nbsp;:');
DEFINE('_E_M_KEY','Mots-cl&eacute;s&nbsp;:');
DEFINE('_E_SUBJECT','Sujet&nbsp;:');
DEFINE('_E_EXPIRES','Date d&#39;expiration&nbsp;:');
DEFINE('_E_VERSION','Version&nbsp;:');
DEFINE('_E_ABOUT','A propos');
DEFINE('_E_CREATED','Cr&eacute;&eacute;&nbsp;:');
DEFINE('_E_LAST_MOD','Modifi&eacute; le&nbsp;:');
DEFINE('_E_HITS','Clics&nbsp;:');
DEFINE('_E_SAVE','Sauvegarder');
DEFINE('_E_CANCEL','Abandonner');
DEFINE('_E_REGISTERED','Utilisateurs enregistr&eacute;s seulement');
DEFINE('_E_ITEM_INFO','Info sur l&#39;article');
DEFINE('_E_ITEM_SAVED','Publication sauvegard&eacute;e avec succ&egrave;s.');
DEFINE('_ITEM_PREVIOUS','&lt; Pr&eacute;c&eacute;dent');
DEFINE('_ITEM_NEXT','Suivant &gt;');

/** content.php */
DEFINE('_SECTION_ARCHIVE_EMPTY','Cette section ne contient aucune archive.');	
DEFINE('_CATEGORY_ARCHIVE_EMPTY','Cette cat&eacute;gorie ne contient aucune archive.');
DEFINE('_HEADER_SECTION_ARCHIVE','Archives par Section');
DEFINE('_HEADER_CATEGORY_ARCHIVE','Archives par Cat&eacute;gorie');
DEFINE('_ARCHIVE_SEARCH_FAILURE','Il n&#39;y a pas d&#39;Archives pour %s %s');	// les valeurs %s repr&eacute;sentent mois et ann&eacute;e
DEFINE('_ARCHIVE_SEARCH_SUCCESS','Voici les Archives de %s %s');	// les valeurs %s repr&eacute;sentent mois et ann&eacute;e
DEFINE('_FILTER','Filtre');
DEFINE('_ORDER_DROPDOWN_DA','Date asc');
DEFINE('_ORDER_DROPDOWN_DD','Date desc');
DEFINE('_ORDER_DROPDOWN_TA','Titre asc');
DEFINE('_ORDER_DROPDOWN_TD','Titre desc');
DEFINE('_ORDER_DROPDOWN_HA','Clics asc');
DEFINE('_ORDER_DROPDOWN_HD','Clics desc');
DEFINE('_ORDER_DROPDOWN_AUA','Auteur asc');
DEFINE('_ORDER_DROPDOWN_AUD','Auteur desc');
DEFINE('_ORDER_DROPDOWN_O','Ordre');

/** poll.php */
DEFINE('_ALERT_ENABLED','Vous devez autoriser les cookies.'); 
DEFINE('_ALREADY_VOTE','Vous avez d&eacute;ja vot&eacute; pour ce sondage aujourd&#39;hui.');
DEFINE('_NO_SELECTION','Vous n&#39;avez rien s&eacute;lectionn&eacute;, veuillez recommencer');
DEFINE('_THANKS','Merci pour votre vote. Pour voir les r&eacute;sultats, cliquez sur le bouton &#39;R&eacute;sultats&#39;');
DEFINE('_SELECT_POLL','Veuillez s&eacute;lectionner un sondage dans la liste');

/** classes/html/poll.php */
DEFINE('_JAN','Janvier');
DEFINE('_FEB','F&eacute;vrier');
DEFINE('_MAR','Mars');
DEFINE('_APR','Avril');
DEFINE('_MAY','Mai');
DEFINE('_JUN','Juin');
DEFINE('_JUL','Juillet');
DEFINE('_AUG','Ao&ucirc;t');
DEFINE('_SEP','Septembre');
DEFINE('_OCT','Octobre');
DEFINE('_NOV','Novembre');
DEFINE('_DEC','D&eacute;cembre');
DEFINE('_POLL_TITLE','R&eacute;sultats du sondage');
DEFINE('_SURVEY_TITLE','Titre du sondage');
DEFINE('_NUM_VOTERS','Nombre de votants');
DEFINE('_FIRST_VOTE','Premier vote');
DEFINE('_LAST_VOTE','Dernier vote');
DEFINE('_SEL_POLL','S&eacute;lectionner un sondage:');
DEFINE('_NO_RESULTS','Il n&#39;y a pas encore de r&eacute;sultat pour ce sondage.');

/** registration.php */
DEFINE('_ERROR_PASS','Aucun utilisateur correspondant n&#39;a &eacute;t&eacute; trouv&eacute;');
DEFINE('_NEWPASS_MSG','Le compte utilisateur $checkusername est associ&eacute; &agrave; cet email.\n'
.' Un utilisateur de $mosConfig_live_site a demand&eacute; un nouveau mot de passe.\n\n'
.' Votre nouveau mot de passe est&nbsp;: $newpass\n\n Vous n&#39;aviez pas demand&eacute; &agrave; changer&nbsp;? Ne soyez pas d&eacute;rout&eacute;(e)&nbsp;!'
.' Vous &ecirc;tes le(la) seul(e) &agrave; voir ce message. Ainsi, si vous pensez que c&#39;est une erreur, connectez vous juste avec votre'
.' nouveau mot de passe puis changez-le de nouveau dans votre profil.');
DEFINE('_NEWPASS_SUB','$_sitename :: Nouveau mot de passe pour - $checkusername'); 
DEFINE('_NEWPASS_SENT','<span class="componentheading">Un nouveau mot de passe a &eacute;t&eacute; cr&eacute;&eacute; et vous a &eacute;t&eacute; envoy&eacute;.</span>');
DEFINE('_REGWARN_NAME','Saisissez votre nom.'); 
DEFINE('_REGWARN_UNAME','Saisissez un nom d&#39;utilisateur.'); 
DEFINE('_REGWARN_MAIL','Saisissez une adresse email valide.');
DEFINE('_REGWARN_PASS','Saisissez un mot de passe valide&nbsp;: sans espace, d&#39;au moins 6 caract&egrave;res, alphanum&eacute;riques uniquement (0-9,a-z,A-Z)'); //
DEFINE('_REGWARN_VPASS1','V&eacute;rifiez le mot de passe.');
DEFINE('_REGWARN_VPASS2','Le mot de passe ne correspond pas, veuillez r&eacute;essayer.');
DEFINE('_REGWARN_INUSE','Ce nom d&#39;utilisateur / mot de passe existe d&eacute;j&agrave;. Veuillez r&eacute;essayer.');
DEFINE('_REGWARN_EMAIL_INUSE', 'Cet email est d&eacute;j&agrave; pr&eacute;sent dans notre base de donn&eacute;es. Si vous avez perdu votre mot de passe, utilisez la fonction de r&eacute;cup&eacute;ration et nous vous enverrons un nouveau mot de passe &agrave; cette adresse email.');
DEFINE('_SEND_SUB','Profil de %s inscrit &agrave; %s');
DEFINE('_USEND_MSG_ACTIVATE', 'Bonjour %s,

Merci de vous &ecirc;tre enregistr&eacute;(e) sur %s. Votre compte a &eacute;t&eacute; cr&eacute;&eacute; correctement, il ne vous reste qu&#39;&agrave; l&#39;activer.
Pour l&#39;activer vous pouvez cliquer sur le lien ci-dessous ou le copier/coller dans votre navigateur:
%s

Apr&egrave;s l&#39;activation vous pourrez vous connecter &agrave; %s en utilisant l&#39;identifiant et le mot de passe suivant:

Nom d&#39;Utilisateur - %s
Mot de passe - %s');
DEFINE('_USEND_MSG', "Bonjour %s,

Merci de vous &ecirc;tre enregistr&eacute;(e) sur %s.

Vous pouvez maintenant vous connecter &agrave; %s en utilisant votre identifiant et mot de passe choisis lors de votre inscription.");
DEFINE('_USEND_MSG_NOPASS','Bonjour $name,\n\nVous avez &eacute;t&eacute; inscrit(e) comme utilisateur $mosConfig_live_site.\n'
.'Vous pouvez vous connecter au site $mosConfig_live_site avec le nom d&#39;utilisateur et le mot de passe que vous avez choisi.\n\n'
.'Ne r&eacute;pondez pas &agrave; cet email. Il a &eacute;t&eacute; envoy&eacute; automatiquement pour votre information\n');
DEFINE('_ASEND_MSG','Bonjour %s,

un nouvel utilisateur s&#39;est inscrit &agrave; %s.
Cet email contient son profil&nbps;:

Nom - %s
e-mail - %s
Nom d&#39;Utilisateur - %s

Ne r&eacute;pondez pas &agrave; ce message, il a &eacute;t&eacute; g&eacute;n&eacute;r&eacute; automatiquement pour votre information');
DEFINE('_REG_COMPLETE_NOPASS','<div class="componentheading">Inscription compl&egrave;te.</div><br />&nbsp;&nbsp;'
.'Vous pouvez vous connecter.<br />&nbsp;&nbsp;');
DEFINE('_REG_COMPLETE', '<div class="componentheading">Inscription compl&egrave;te.</div><br />Vous pouvez maintenant vous connecter.');
DEFINE('_REG_COMPLETE_ACTIVATE', '<div class="componentheading">Enregistrement effectu&eacute;.</div><br />Votre profil a &eacute;t&eacute; cr&eacute;&eacute; correctement pour confirmer votre email et finir votre enregistrement nous vous avons adress&eacute; un lien d&#39;activation par email. Avant de vous connecter sur ce site, il est imp&eacute;ratif d&#39;activer votre compte en utilisant le lien contenu dans cet email d&#39;activation.');
DEFINE('_REG_ACTIVATE_COMPLETE', '<div class="componentheading">Activation effectu&eacute;e.</div><br />Votre profil a &eacute;t&eacute; correctement activ&eacute;. Vous pouvez maintenant vous connecter en utilisant le nom d&#39;utilisateur et mot de passe choisis lors de votre inscription.');
DEFINE('_REG_ACTIVATE_NOT_FOUND', '<div class="componentheading">Lien d&#39;activation invalide.</div><br />Le lien fait r&eacute;f&eacute;rence &agrave; un profil in&eacute;xitsant ou d&eacute;j&agrave; activ&eacute; dans notre base de donn&eacute;es.');

/** classes/html/registration.php */
DEFINE('_PROMPT_PASSWORD','Perdu votre mot de passe&nbsp;?'); 
DEFINE('_NEW_PASS_DESC','Entrez votre nom d&#39;utilisateur et votre adresse email, puis cliquez sur le bouton envoyer le mot de passe.<br />'
.'Vous recevrez un nouveau mot de passe rapidement. Utilisez-le pour vous identifier sur le site.'); 
DEFINE('_PROMPT_UNAME','Nom d&#39;utilisateur&nbsp;:');
DEFINE('_PROMPT_EMAIL','Adresse email&nbsp;:');
DEFINE('_BUTTON_SEND_PASS','Envoyer le mot de passe');
DEFINE('_REGISTER_TITLE','Inscription');
DEFINE('_REGISTER_NAME','Nom&nbsp;:');
DEFINE('_REGISTER_UNAME','Nom d&#39;utilisateur&nbsp;:');
DEFINE('_REGISTER_EMAIL','Email&nbsp;:');
DEFINE('_REGISTER_PASS','Mot de passe&nbsp;:');
DEFINE('_REGISTER_VPASS','V&eacute;rification du mot de passe&nbsp;:');
DEFINE('_REGISTER_REQUIRED','Les champs marqu&eacute;s avec un ast&eacute;risque (*) sont obligatoires.');
DEFINE('_BUTTON_SEND_REG','Terminer l&#39;inscription'); 
DEFINE('_SENDING_PASSWORD','Votre mot de passe sera envoy&eacute; &agrave; l&#39;adresse email ci-dessus.<br />Une fois que vous l&#39;aurez reçu'
.' vous pourrez vous identifier et le modifier &agrave; votre convenance dans votre profil.');

/** classes/html/search.php */
DEFINE('_SEARCH_TITLE','Rechercher');
DEFINE('_PROMPT_KEYWORD','Rechercher les mots-cl&eacute;s');
DEFINE('_SEARCH_MATCHES','$d r&eacute;sultat(s)');
DEFINE('_CONCLUSION','$totalRows r&eacute;sultat(s) trouv&eacute;(s) au total.  Rechercher <b>$searchword</b> avec');
DEFINE('_NOKEYWORD','Aucun r&eacute;sultat pour cette recherche');
DEFINE('_IGNOREKEYWORD','Un ou plusieurs mots communs ont &eacute;t&eacute; ignor&eacute;s');
DEFINE('_SEARCH_ANYWORDS','Un des termes');
DEFINE('_SEARCH_ALLWORDS','Tous les termes');
DEFINE('_SEARCH_PHRASE','Phrase exacte');
DEFINE('_SEARCH_NEWEST','Plus r&eacute;cent en premier');
DEFINE('_SEARCH_OLDEST','Plus ancien en premier');
DEFINE('_SEARCH_POPULAR','Plus populaire');
DEFINE('_SEARCH_ALPHABETICAL','Alphab&eacute;tique');
DEFINE('_SEARCH_CATEGORY','Section/Cat&eacute;gorie');

/** templates/*.php */
DEFINE('_ISO','charset=iso-8859-1');
DEFINE('_DATE_FORMAT','l, F d Y');  //Uses PHP's DATE Command Format - Depreciated
/**
* Modifier la ligne en accord avec le format de date que vous souhaitez voir apparaitre sur votre site
*
*e.g. DEFINE('_DATE_FORMAT_LC','%A, %d %B %Y %H:%M'); // R&eacute;f&eacute;rez-vous &agrave; l'utilisation de la commande PHP strftime
*/
DEFINE('_DATE_FORMAT_LC','%d-%m-%Y'); // R&eacute;f&eacute;rez-vous &agrave; l'utilisation de la commande PHP strftime
/** la ligne initiale dans le fichier source en anglais :  DEFINE('_DATE_FORMAT_LC2','%A, %d %B %Y %H:%M'); */
DEFINE('_DATE_FORMAT_LC2','%d-%m-%Y %H:%M');
DEFINE('_SEARCH_BOX','Rechercher...');
DEFINE('_NEWSFLASH_BOX','Annonce');
DEFINE('_MAINMENU_BOX','Menu Principal');

/** classes/html/usermenu.php */
DEFINE('_UMENU_TITLE','Menu Utilisateur');
DEFINE('_HI','Bonjour, ');

/** user.php */
DEFINE('_SAVE_ERR','Veuillez remplir tous les champs du formulaire, merci.');
DEFINE('_THANK_SUB','Merci pour votre proposition. Votre proposition sera v&eacute;rifi&eacute;e  avant d&#39;&ecirc;tre publi&eacute;e sur le site.');
DEFINE('_UP_SIZE','Vous ne pouvez pas transmettre des fichiers de plus de 15ko.'); 
DEFINE('_UP_EXISTS','Une image portant le nom $userfile_name existe d&eacute;ja. Veuillez renommer votre fichier avant de r&eacute;essayer.');
DEFINE('_UP_COPY_FAIL','La copie a &eacute;chou&eacute;');
DEFINE('_UP_TYPE_WARN','Seuls les fichiers gif ou jpg sont autoris&eacute;s.');
DEFINE('_MAIL_SUB','Publication soumise par un membre'); 
DEFINE('_MAIL_MSG','Bonjour $adminName,\n\nUn nouveau texte $type, $title, a &eacute;t&eacute; soumis par $author'
.' pour le site $live_site website. \n' 
.'Rendez-vous sur $mosConfig_live_site/administrator pour v&eacute;rifier et valider ce $type.\n\n'
.'Ne r&eacute;pondez pas &agrave; cet email, il a &eacute;t&eacute; g&eacute;n&eacute;r&eacute; automatiquement pour votre information\n');
DEFINE('_PASS_VERR1','Si vous modifiez votre mot de passe, retapez-le pour v&eacute;rification.');
DEFINE('_PASS_VERR2','Si vous modifiez votre mot de passe, assurez-vous que le mot de passe et sa v&eacute;rification concordent.');
DEFINE('_UNAME_INUSE','Ce nom d&#39;utilisateur est d&eacute;ja utilis&eacute;.');
DEFINE('_UPDATE','Mise &agrave; jour');
DEFINE('_USER_DETAILS_SAVE','Votre profil a &eacute;t&eacute; sauvegard&eacute;.');
DEFINE('_USER_LOGIN','Identification Utilisateur');

/** components/com_user */
DEFINE('_EDIT_TITLE','Editer vos informations personnelles'); 
DEFINE('_YOUR_NAME','Votre nom&nbsp;:');
DEFINE('_EMAIL','Email&nbsp;:');
DEFINE('_UNAME','Nom d&#39;utilisateur&nbsp;:');
DEFINE('_PASS','Mot de passe&nbsp;:');
DEFINE('_VPASS','V&eacute;rifiez votre mot de passe&nbsp;:');
DEFINE('_SUBMIT_SUCCESS','Envoi r&eacute;ussi');
DEFINE('_SUBMIT_SUCCESS_DESC','Votre article a &eacute;t&eacute; propos&eacute; avec succ&egrave;s &agrave; nos administrateurs. Il sera v&eacute;rifi&eacute; et valid&eacute; avant d&#39;&ecirc;tre plubli&eacute; sur le site.');
DEFINE('_WELCOME','Bienvenue');
DEFINE('_WELCOME_DESC','<span class="componentheading">Bienvenue dans la partie utilisateur de notre site</span>');
DEFINE('_CONF_CHECKED_IN','Tous vos &eacute;l&eacute;ments sont consid&eacute;r&eacute;s comme v&eacute;rifi&eacute;s/lib&eacute;r&eacute;s');
DEFINE('_CHECK_TABLE','Table de V&eacute;rification');
DEFINE('_CHECKED_IN','V&eacute;rifi&eacute; ');
DEFINE('_CHECKED_IN_ITEMS',' items');
DEFINE('_PASS_MATCH','Mots de passe ne correspondent pas');

/** components/com_banners */
DEFINE('_BNR_CLIENT_NAME','Vous devez sp&eacute;cifier un nom pour ce client.');
DEFINE('_BNR_CONTACT','Vous devez sp&eacute;cifier un contact pour ce client.');
DEFINE('_BNR_VALID_EMAIL','Vous devez sp&eacute;cifier un email valide pour ce client.');
DEFINE('_BNR_CLIENT','Vous devez s&eacute;lectionner un client,');
DEFINE('_BNR_NAME','Vous devez sp&eacute;cifier un nom pour cette banni&egrave;re.');
DEFINE('_BNR_IMAGE','Vous devez s&eacute;lectionner une image pour cette banni&egrave;re.');
DEFINE('_BNR_URL','Vous devez pr&eacute;ciser une URL ou un code personnalis&eacute; pour cette banni&egrave;re.');

/** components/com_login */
DEFINE('_ALREADY_LOGIN','Vous &ecirc;tes d&eacute;j&agrave; connect&eacute;(e)');
DEFINE('_LOGOUT','Cliquez ici pour vous d&eacute;connecter');
DEFINE('_LOGIN_TEXT','Utilisez le formulaire d&#39;identification ci-contre pour obtenir un acc&egrave;s complet');
DEFINE('_LOGIN_SUCCESS','Vous &ecirc;tes connect&eacute;(e)');
DEFINE('_LOGOUT_SUCCESS','Vous &ecirc;tes d&eacute;connect&eacute;(e)');
DEFINE('_LOGIN_DESCRIPTION','Pour acc&eacute;der &agrave; la partie priv&eacute;e merci de vous identifier');
DEFINE('_LOGOUT_DESCRIPTION','Vous &ecirc;tes connect&eacute;(e) &agrave; la partie priv&eacute;e du site');

/** components/com_weblinks */
DEFINE('_WEBLINKS_TITLE','Liens Web');
DEFINE('_WEBLINKS_DESC','Nous surfons souvent sur le Web. D&egrave;s que nous rencontrons un site int&eacute;ressant, nous le r&eacute;pertorions'
.' pour vous.  <br />S&eacute;lectionnez dans la liste propos&eacute;e un de nos liens Web.');
DEFINE('_HEADER_TITLE_WEBLINKS','Liens Web');
DEFINE('_SECTION','Section&nbsp;:');
DEFINE('_SUBMIT_LINK','Soumettre un Lien Web');
DEFINE('_URL','URL&nbsp;:');
DEFINE('_URL_DESC','Description&nbsp;:');
DEFINE('_NAME','Nom&nbsp;:');
DEFINE('_WEBLINK_EXIST','il existe d&eacute;j&agrave; un Lien Web qui porte ce nom, merci de r&eacute;essayer.');
DEFINE('_WEBLINK_TITLE','Votre Lien Web doit contenir un titre.');

/** components/com_newfeeds */
DEFINE('_FEED_NAME','Nom du Fil de News');
DEFINE('_FEED_ARTICLES','# Articles');
DEFINE('_FEED_LINK','Lien vers le fil de news');

/** whos_online.php */
DEFINE('_WE_HAVE', 'Il y a actuellement ');
DEFINE('_AND', ' et ');
DEFINE('_GUEST_COUNT','$guest_array invit&eacute;');
DEFINE('_GUESTS_COUNT','$guest_array invit&eacute;s');
DEFINE('_MEMBER_COUNT','$user_array membre');
DEFINE('_MEMBERS_COUNT','$user_array membres');
DEFINE('_ONLINE',' en ligne');
DEFINE('_NONE','Aucun utilisateur enregistr&eacute; en ligne');

/** modules/mod_stats.php */
DEFINE('_TIME_STAT','Heure');
DEFINE('_MEMBERS_STAT','Membres');
DEFINE('_HITS_STAT','Clics');
DEFINE('_NEWS_STAT','Publications');
DEFINE('_LINKS_STAT','Liens');
DEFINE('_VISITORS','Visiteurs');

/** /adminstrator/components/com_menus/admin.menus.html.php */
DEFINE('_MAINMENU_HOME','* Ceci est le premier &eacute;l&eacute;ment publi&eacute; dans ce menu [mainmenu] c&#39;est la page d&#39;accueil du site par d&eacute;faut *');
DEFINE('_MAINMENU_DEL','* Vous ne pouvez pas effacer ce menu, car il est n&eacute;cessaire au bon fonctionnement de Mambo *');
DEFINE('_MENU_GROUP','* Quelques &#39;Types de Menu&#39; existent dans plus d&#39;un groupe *');

/** administrators/components/com_users */
DEFINE('_NEW_USER_MESSAGE_SUBJECT', 'Votre Profil Utilisateur' );
DEFINE('_NEW_USER_MESSAGE', 'Bonjour %s,


Vous avez &eacute;t&eacute; inscrit(e) comme membre du site %s par un administrateur.

Cet email contient votre nom d&#39;utilisateur et mot de passe qui vous permettent de vous identifier sur %s:

Nom d&#39;Utilisateur - %s
Mot de passe - %s


Merci de ne pas r&eacute;pondre &agrave; cer email. Il a &eacute;t&eacute; envoy&eacute; automatiquement pour votre information');

/** administrators/components/com_massmail */
DEFINE('_MASSMAIL_MESSAGE', "Ceci est un email de '%s'

Message:
" );

?>
