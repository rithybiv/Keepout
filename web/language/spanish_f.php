<?php
// $Id: spanish.php,v 1.60 2004/02/05 14:35:34 saka_car Exp $
/**
* Content code
* @package Mambo Open Source
* @Copyright (C) 2000 - 2003 Miro International Pty Ltd
* @ All rights reserved
* @ Mambo Open Source is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version $Revision: 1.60  - 4.5 stable 1.0.5 $
* Updated for version 4.5.4 (formal) on 2006/07/25 by: Juan Carlos Redondo - www.snoopyvirtualstudio.com
**/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

// common
DEFINE('_LANGUAGE','es');
DEFINE("_NOT_AUTH","No tiene autorización para ver este apartado.");
DEFINE("_DO_LOGIN","Necesita acceder primero.");
DEFINE('_VALID_AZ09',"Por favor, escriba un %s válido. Sin espacios, más de %d carácteres conteniendo 0-9,a-z,A-Z");
DEFINE('_CMN_YES',"Sí");
DEFINE('_CMN_NO',"No");
DEFINE('_CMN_SHOW','Mostrar');
DEFINE('_CMN_HIDE','Ocultar');

DEFINE('_CMN_NAME',"Nombre");
DEFINE('_CMN_DESCRIPTION',"Descripción");
DEFINE('_CMN_SAVE',"Guardar");
DEFINE('_CMN_CANCEL',"Cancelar");
DEFINE('_CMN_PRINT',"Imprimir");
DEFINE('_CMN_PDF',"PDF");
DEFINE('_CMN_EMAIL',"E-Mail");
DEFINE('_ICON_SEP','|');
DEFINE('_CMN_PARENT',"Padre"); // in the context of parent folder, parent menu item, etc
DEFINE('_CMN_ORDERING',"Orden");
DEFINE('_CMN_ACCESS',"Nivel de acceso");
DEFINE('_CMN_SELECT',"Selecciona");

DEFINE('_CMN_NEXT',"Siguiente");
DEFINE('_CMN_NEXT_ARROW'," &gt;&gt;");
DEFINE('_CMN_PREV',"Anterior");
DEFINE('_CMN_PREV_ARROW',"&lt;&lt; ");

DEFINE('_CMN_SORT_NONE',"Sin ordenar");
DEFINE('_CMN_SORT_ASC',"Ordenar ascendentemente");
DEFINE('_CMN_SORT_DESC',"Ordenar descendentemente");

DEFINE('_CMN_NEW','Nuevo');
DEFINE('_CMN_NONE','Ninguno');
DEFINE('_CMN_LEFT','Izquierda');
DEFINE('_CMN_RIGHT','Derecha');
DEFINE('_CMN_CENTER','Centro');
DEFINE('_CMN_ARCHIVE','Archivar');
DEFINE('_CMN_UNARCHIVE','Desarchivar');
DEFINE('_CMN_TOP','Arriba');
DEFINE('_CMN_BOTTOM','Abajo');

DEFINE('_CMN_PUBLISHED',"Publicado");
DEFINE('_CMN_UNPUBLISHED',"Sin publicar");

DEFINE('_CMN_EDIT_HTML','Editar HTML');
DEFINE('_CMN_EDIT_CSS','Editar CSS');

DEFINE('_CMN_DELETE','Borrar');

DEFINE('_CMN_FOLDER',"Carpeta");
DEFINE('_CMN_SUBFOLDER',"Sub-carpeta");
DEFINE('_CMN_OPTIONAL',"Opcional");
DEFINE('_CMN_REQUIRED',"Obligatorio");

DEFINE('_CMN_CONTINUE',"Continuar");

DEFINE('_CMN_NEW_ITEM',"Los nuevos artículos, por defecto, aparecen en último lugar. El orden se puede cambiar después.");
DEFINE('_CMN_NEW_ITEM_FIRST','Los nuevos artículos, por defecto, aparecen en primer lugar. El orden se puede cambiar después.');
DEFINE('_LOGIN_INCOMPLETE','Por favor, rellene los campos Nombre de usuario y Contraseña.');
DEFINE('_LOGIN_BLOCKED','Su cuenta de acceso ha sido bloqueada. Por favor, contacte con el administrador.');
DEFINE('_LOGIN_INCORRECT','Nombre de usuario y/o contraseña incorrecta. Inténtelo de nuevo, por favor.');
DEFINE('_LOGIN_NOADMINS','No ha accedido. No hay administradores configurados.');
DEFINE('_CMN_JAVASCRIPT','¡Aviso! Javascript debe estar habilitado para que funcione correctamente.');

DEFINE('_NEW_MESSAGE','Ha llegado un nuevo mensaje privado');
DEFINE('_MESSAGE_FAILED','El usuario ha bloqueado su bandeja de entrada. No se puede enviar el mensaje.');

DEFINE('_CMN_IFRAMES', 'Esta opción no funcionará correctamente. Por desgracia su navegador no acepta Inline Frames');

DEFINE('_INSTALL_WARN','Para su seguridad por favor elimine completamente el directorio de instalación incluyendo todos los archivos y sub-carpetas - y después recargue esta página');
DEFINE('_TEMPLATE_WARN','<font color=\"red\"><b>¡Archivo de Plantilla No Encontrado! Buscando la plantilla:</b></font>');
DEFINE('_NO_PARAMS','No hay Parámetros para este punto');
DEFINE('_HANDLER','No hay modificadores definidos para el tipo');

//mambots
DEFINE('_TOC_JUMPTO',"IR A");

// content
DEFINE('_READ_MORE','Leer más...');
DEFINE('_READ_MORE_REGISTER','Regístrese para leerlo...');
DEFINE('_MORE','Más...');
DEFINE('_ON_NEW_CONTENT', "Un nuevo contenido ha sido enviado por %s titulado %s." );
DEFINE('_SEL_CATEGORY','- Todas las categorías -');
DEFINE('_SEL_SECTION','- Todas las secciones -');
DEFINE('_SEL_AUTHOR','- Todos los autores -');
DEFINE('_SEL_POSITION','- Todas las posiciones -');
DEFINE('_SEL_TYPE','- Todos los tipos -');
DEFINE('_EMPTY_CATEGORY','Esta categoría está vacía');
DEFINE('_EMPTY_BLOG','No hay artículos que mostrar');
DEFINE('_NOT_EXIST','La página a la que intenta acceder no existe.<br />Por favor, escoga una opción desde los menús.');

// classes/html/modules.php
DEFINE('_BUTTON_VOTE','Votar');
DEFINE('_BUTTON_RESULTS','Resultados');
DEFINE('_USERNAME','Usuario');
DEFINE('_LOST_PASSWORD','Recuperar su contraseña');
DEFINE('_PASSWORD','Contraseña');
DEFINE('_BUTTON_LOGIN','Acceder');
DEFINE('_BUTTON_LOGOUT','Salir');
DEFINE('_NO_ACCOUNT','¿Quiere registrase?');
DEFINE('_CREATE_ACCOUNT','Hagalo aquí');
DEFINE('_VOTE_POOR','Malo');
DEFINE('_VOTE_BEST','Bueno');
DEFINE('_USER_RATING','Calificación usuario');
DEFINE('_RATE_BUTTON','Calificar');
DEFINE('_REMEMBER_ME','Recordar');

// contact.php
DEFINE('_ENQUIRY','Solicitud');
DEFINE('_ENQUIRY_TEXT','Este correo ha sido enviado via %s por');
DEFINE('_COPY_TEXT','Esto es una copia del mensaje que envió a %s via %s ');
DEFINE('_COPY_SUBJECT','Copia de: ');
DEFINE('_THANK_MESSAGE','Gracias por su mensaje');
DEFINE('_CLOAKING','Esta dirección de e-mail está protegida contra spam bots, necesita Javascript activado para verla');
DEFINE('_CONTACT_HEADER_NAME','Nombre');
DEFINE('_CONTACT_HEADER_POS','Posición');
DEFINE('_CONTACT_HEADER_EMAIL','E-mail');
DEFINE('_CONTACT_HEADER_PHONE','Teléfono');
DEFINE('_CONTACT_HEADER_FAX','Fax');
DEFINE('_CONTACTS_DESC','La lista de contactos para esta página web.');

// classes/html/contact.php
DEFINE('_CONTACT_TITLE','Contactar');
DEFINE('_EMAIL_DESCRIPTION','Enviar un E-mail a este Contacto:');
DEFINE('_NAME_PROMPT',' Escriba su nombre:');
DEFINE('_EMAIL_PROMPT',' Escriba su E-mail:');
DEFINE('_MESSAGE_PROMPT',' Escriba el mensaje:');
DEFINE('_SEND_BUTTON','Enviar');
DEFINE('_CONTACT_FORM_NC','Por favor, revise que el formulario esté completo y con datos válidos.');
DEFINE('_CONTACT_TELEPHONE','Teléfono: ');
DEFINE('_CONTACT_MOBILE','Móvil: ');
DEFINE('_CONTACT_FAX','Fax: ');
DEFINE('_CONTACT_EMAIL','E-mail: ');
DEFINE('_CONTACT_NAME','Nombre: ');
DEFINE('_CONTACT_POSITION','Posición: ');
DEFINE('_CONTACT_ADDRESS','Dirección: ');
DEFINE('_CONTACT_MISC','Información: ');
DEFINE('_CONTACT_SEL','Escoge un contacto:');
DEFINE('_CONTACT_NONE','No hay Detalles de Contacto.');
DEFINE('_EMAIL_A_COPY','Envíe una copia de este E-mail a su propia dirección');
DEFINE('_CONTACT_DOWNLOAD_AS','Bajar la información como');
DEFINE('_VCARD','VCard');

//pageNavigation
DEFINE('_PN_PAGE','Página');
DEFINE('_PN_OF','de');
DEFINE('_PN_START','Inicio');
DEFINE('_PN_PREVIOUS','Anterior');
DEFINE('_PN_NEXT','Siguiente');
DEFINE('_PN_END','Final');
DEFINE('_PN_DISPLAY_NR','Mostrar ');
DEFINE('_PN_RESULTS','Resultados');

// emailfriend
DEFINE('_EMAIL_TITLE','Enviar a un amigo');
DEFINE('_EMAIL_FRIEND','Enviar por correo a un amigo.');
DEFINE('_EMAIL_FRIEND_ADDR','E-mail de su amigo:');
DEFINE('_EMAIL_YOUR_NAME','Su nombre:');
DEFINE('_EMAIL_YOUR_MAIL','Su E-mail:');
DEFINE('_SUBJECT_PROMPT',' Asunto del mensaje:');
DEFINE('_BUTTON_SUBMIT_MAIL','Enviar E-mail');
DEFINE('_BUTTON_CANCEL','Borrar');
DEFINE('_EMAIL_ERR_NOINFO','Tiene que escribir su E-mail y el E-mail dónde se enviará.');
DEFINE('_EMAIL_MSG','La siguiente página del sitio web "%s" le ha sido enviada por %s ( %s ).

Puede acceder mediante la siguiente dirección:
%s');
DEFINE('_EMAIL_INFO','Enviado por');
DEFINE('_EMAIL_SENT','Enviado a');
DEFINE('_PROMPT_CLOSE','Cerrar ventana');

// classes/html/content.php
DEFINE('_AUTHOR_BY', 'Autor');
DEFINE('_WRITTEN_BY', 'Escrito por');
DEFINE('_LAST_UPDATED', 'Última modificación');
DEFINE('_BACK','[Página anterior]');
DEFINE('_LEGEND','Leyenda');
DEFINE('_DATE','Fecha');
DEFINE('_ORDER_DROPDOWN','Orden');
DEFINE('_HEADER_TITLE','Título');
DEFINE('_HEADER_AUTHOR','Autor');
DEFINE('_HEADER_SUBMITTED','Enviado el');
DEFINE('_HEADER_HITS','Accesos');
DEFINE('_E_EDIT','Editar');
DEFINE('_E_ADD','Añadir');
DEFINE('_E_WARNUSER','Por favor, cancele o guarde los cambios realizados');
DEFINE('_E_WARNTITLE','El artículo debe contener un título');
DEFINE('_E_WARNTEXT','El artículo debe contener un texto de introducción');
DEFINE('_E_WARNCAT','Por favor, seleccione una categoría');
DEFINE('_E_CONTENT','Contenido');
DEFINE('_E_TITLE','Título:');
DEFINE('_E_CATEGORY','Categoría:');
DEFINE('_E_INTRO','Texto de introducción');
DEFINE('_E_MAIN','Texto principal');
DEFINE('_E_MOSIMAGE','AÑADIR {mosimage}');
DEFINE('_E_IMAGES','Imagenes');
DEFINE('_E_GALLERY_IMAGES','Galería de imágenes');
DEFINE('_E_CONTENT_IMAGES','Imágenes');
DEFINE('_E_EDIT_IMAGE','Editar imagen');
DEFINE('_E_INSERT','Añadir');
DEFINE('_E_UP','Subir');
DEFINE('_E_DOWN','Bajar');
DEFINE('_E_REMOVE','Borrar');
DEFINE('_E_SOURCE','Código:');
DEFINE('_E_ALIGN','Alineación:');
DEFINE('_E_ALT','Texto etiqueta:');
DEFINE('_E_BORDER','Borde:');
DEFINE('_E_CAPTION','Descripción');
DEFINE('_E_APPLY','Aplicar');
DEFINE('_E_PUBLISHING','Publicar');
DEFINE('_E_STATE','Estado:');
DEFINE('_E_AUTHOR_ALIAS','Autor:');
DEFINE('_E_ACCESS_LEVEL','Nivel de acceso:');
DEFINE('_E_ORDERING','Ordenado:');
DEFINE('_E_START_PUB','Inicio de publicación:');
DEFINE('_E_FINISH_PUB','Fin de publicación:');
DEFINE('_E_SHOW_FP','Mostrar en página de inicio:');
DEFINE('_E_HIDE_TITLE','¿Ocultar título?:');
DEFINE('_E_METADATA','Metadata');
DEFINE('_E_M_DESC','Descripción:');
DEFINE('_E_M_KEY','Palabras:');
DEFINE('_E_SUBJECT','Título:');
DEFINE('_E_EXPIRES','Fecha de caducidad:');
DEFINE('_E_VERSION','Versión:');
DEFINE('_E_ABOUT','Sobre');
DEFINE('_E_CREATED','Creado:');
DEFINE('_E_LAST_MOD','Última modificación:');
DEFINE('_E_HITS','Accesos:');
DEFINE('_E_SAVE','Guardar');
DEFINE('_E_CANCEL','Cancelar');
DEFINE('_E_REGISTERED','Sólo usuarios registrados');
DEFINE('_E_ITEM_INFO','Información');
DEFINE('_E_ITEM_SAVED','artículo guardado.');
DEFINE('_ITEM_PREVIOUS','&lt; Anterior');
DEFINE('_ITEM_NEXT','Siguiente &gt;');

/** content.php */
DEFINE('_SECTION_ARCHIVE_EMPTY','No hay actualmente Entradas Guardadas para esta Sección');
DEFINE('_CATEGORY_ARCHIVE_EMPTY','No hay actualmente Entradas Guardadas para esta Categoría');
DEFINE('_HEADER_SECTION_ARCHIVE','Archivos de la Sección');
DEFINE('_HEADER_CATEGORY_ARCHIVE','Archivos de la Categoría');
DEFINE('_ARCHIVE_SEARCH_FAILURE','No hay Entradas guardadas para %s %s');	// values are month then year
DEFINE('_ARCHIVE_SEARCH_SUCCESS','Estas son las Entradas guardadas de %s %s');	// values are month then year
DEFINE('_FILTER','Filtro');
DEFINE('_ORDER_DROPDOWN_DA','Fecha asc');
DEFINE('_ORDER_DROPDOWN_DD','Fecha desc');
DEFINE('_ORDER_DROPDOWN_TA','Título asc');
DEFINE('_ORDER_DROPDOWN_TD','Título desc');
DEFINE('_ORDER_DROPDOWN_HA','Accesos asc');
DEFINE('_ORDER_DROPDOWN_HD','Accesos desc');
DEFINE('_ORDER_DROPDOWN_AUA','Autor asc');
DEFINE('_ORDER_DROPDOWN_AUD','Autor desc');
DEFINE('_ORDER_DROPDOWN_O','Orden');

// poll.php
DEFINE('_ALERT_ENABLED','Tiene que habilitar las cookies!');
DEFINE('_ALREADY_VOTE','¡Ya ha votado hoy!');
DEFINE('_NO_SELECTION','No ha seleccionado nada, inténtelo de nuevo');
DEFINE("_THANKS","¡Gracias por su voto!");
DEFINE("_SELECT_POLL","Seleccione encuesta de la lista siguiente");

// classes/html/poll.php
DEFINE('_JAN','Enero');
DEFINE('_FEB','Febrero');
DEFINE('_MAR','Marzo');
DEFINE('_APR','Abril');
DEFINE('_MAY','Mayo');
DEFINE('_JUN','Junio');
DEFINE('_JUL','Julio');
DEFINE('_AUG','Agosto');
DEFINE('_SEP','Setiembre');
DEFINE('_OCT','Octubre');
DEFINE('_NOV','Noviembre');
DEFINE('_DEC','Diciembre');
DEFINE('_POLL_TITLE','Encuesta - Resultados');
DEFINE('_SURVEY_TITLE','Título de la encuesta:');
DEFINE('_NUM_VOTERS','Número de votos:');
DEFINE('_FIRST_VOTE','Primer voto:');
DEFINE('_LAST_VOTE','Último voto:');
DEFINE('_SEL_POLL','Seleccione encuesta:');
DEFINE('_NO_RESULTS','No hay resultados para esta encuesta.');

// registration.php
DEFINE('_ERROR_PASS','Lo siento, la información de registro no ha sido encontrada para este usuario');
DEFINE('_NEWPASS_MSG','La cuenta del usuario $checkusername tiene este e-mail asociado.\n'
.'Un usuario desde el sitio web $mosConfig_live_site ha pedido el envio de una nueva contraseña.\n\n'
.' Su nueva contraseña es: $newpass\n\nSi usted no lo ha pedido, no se preocupe.'
.' Sólo usted ve este mensaje, nádie más. Si esto ha sido debido a un error acceda con esta'
.' nueva contraseña y cámbiela por otra de su elección.\n\n'
.'Por favor, no responda a este mensaje ya que ha sido generado automáticamente y sólo es para su información.');
DEFINE('_NEWPASS_SUB','$_sitename :: Nueva contraseña para :: $checkusername');
DEFINE('_NEWPASS_SENT','<span class="componentheading">¡La nueva contraseña ha sido creada y enviada!</span>');
DEFINE('_REGWARN_NAME','Por favor, escriba su nombre.');
DEFINE('_REGWARN_UNAME','Por favor, escriba su nombre de usuario.');
DEFINE('_REGWARN_MAIL','Por favor, escriba su dirección E-mail.');
DEFINE('_REGWARN_PASS','Por favor, escriba una contraseña válida. Sin espacios, más de 6 caracteres y conteniendo 0-9,a-z,A-Z');
DEFINE('_REGWARN_VPASS1','Por favor, verifique la contraseña.');
DEFINE('_REGWARN_VPASS2','La contraseña y la verificación, no coinciden, por favor, inténtelo de nuevo.');
DEFINE('_REGWARN_INUSE','Este nombre/contraseña ya está siendo usada. Por favor, inténtelo con otra.');
DEFINE('_REGWARN_EMAIL_INUSE', 'Esta dirección de e-mail ya está registrada. Si olvidó su contraseña acceda a "Recuperar su contraseña" y se le enviará una nueva.');
DEFINE('_SEND_SUB','Detalles del nuevo usuario %s en %s');
DEFINE('_USEND_MSG_ACTIVATE', 'Hola %s,

Gracias por registrarse en %s. Su cuenta ha sido creada pero, por precaución, debe activarla antes de poder usarla.
Para activar su cuenta siga este link o cópielo y péguelo en su navegador:
%s

Después de la activación podrá acceder a %s usando el siguiente nombre de usuario y contraseña:

Nombre de usuario - %s
Contraseña - %s

Por favor, no responda a este mensaje ya que ha sido generado automáticamente y sólo es para su información.');
DEFINE('_USEND_MSG', "Hola %s,

Gracias por registrarse en %s.

Ahora puede acceder a %s usando el nombre de usuario y contraseña con los que se registró.

Por favor, no responda a este mensaje ya que ha sido generado automáticamente y sólo es para su información.");
DEFINE('_USEND_MSG_NOPASS','Hola $name,\n\nHa sido añadido como usuario de $mosConfig_live_site.\n'
.'Puede acceder a $mosConfig_live_site con el nombre de usuario y contraseña con los que se registró.\n\n'
.'Por favor, no responda a este mensaje ya que ha sido generado automáticamente y sólo es para su información.\n');
DEFINE('_ASEND_MSG','Hola %s,

Se ha registrado un nuevo usuario en %s.
Este e-mail contiene sus detalles:

Nombre - %s
e-mail - %s
Nombre de usuario - %s

Por favor, no responda a este mensaje ya que ha sido generado automáticamente y sólo es para su información.');
DEFINE('_REG_COMPLETE_NOPASS','<div class="componentheading">Registro Completado</div><br />&nbsp;&nbsp;'
.'Ya puede acceder.<br />&nbsp;&nbsp;');
DEFINE('_REG_COMPLETE', '<div class="componentheading">Registro Completado</div><br />Ya puede acceder.');
DEFINE('_REG_COMPLETE_ACTIVATE', '<div class="componentheading">Registro Completado</div><br />Su cuenta ha sido creada y se ha enviado un link de activación a la dirección de e-mail que indicó. Debe activar su cuenta siguiendo dicho link antes de poder acceder a la misma.');
DEFINE('_REG_ACTIVATE_COMPLETE', '<div class="componentheading">¡Activación Completa!</div><br />Su cuenta ha sido activada satisfactoriamente. Ahora puede acceder usando el nombre de usuario y contraseña que elegió durante el registro.');
DEFINE('_REG_ACTIVATE_NOT_FOUND', '<div class="componentheading">¡Link de Activación Invalido!</div><br />No existe una cuenta en nuestra base de datos con ese nombre o esa cuenta ya ha sido activada.');

// classes/html/registration.php
DEFINE('_PROMPT_PASSWORD','¿Olvidó su contraseña?');
DEFINE('_NEW_PASS_DESC','Ningún problema. Escriba su nombre de usuario y haga clic sobre el botón Enviar.<br>'
.'Recibirá enseguida una nueva contraseña. Use esta nueva contraseña para acceder a este sitio web.');
DEFINE('_PROMPT_UNAME','Usuario:');
DEFINE('_PROMPT_EMAIL','E-mail:');
DEFINE('_BUTTON_SEND_PASS','Enviar contraseña');
DEFINE('_REGISTER_TITLE','Registrarse como usuario');
DEFINE('_REGISTER_NAME','Nombre:');
DEFINE('_REGISTER_UNAME','Usuario:');
DEFINE('_REGISTER_EMAIL','E-mail:');
DEFINE('_REGISTER_PASS','Contraseña:');
DEFINE('_REGISTER_VPASS','Verificar contraseña:');
DEFINE('_REGISTER_REQUIRED','Los campos marcados con un asterisco (*) son obligatorios.');
DEFINE('_BUTTON_SEND_REG','Enviar registro');
DEFINE('_SENDING_PASSWORD','La contraseña le será enviada a la dirección E-mail de arriba.<br>Una vez tenga'
.' la nueva contraseña podrá acceder y cambiarla.');

// classes/html/search.php
DEFINE('_SEARCH_TITLE','Buscar');
DEFINE('_PROMPT_KEYWORD','Texto buscado:');
DEFINE('_SEARCH_MATCHES','Se encontraron $d resultados');
DEFINE('_CONCLUSION','Hay $totalRows resultados.  Quieres buscar <b>$searchword</b> en');
DEFINE('_NOKEYWORD','No se han encontrado resultados');
DEFINE('_IGNOREKEYWORD','Una o más palabras, demasiado comunes, han sido ignoradas en la búsqueda');
DEFINE('_SEARCH_ANYWORDS','Cualquier palabra');
DEFINE('_SEARCH_ALLWORDS','Todas las palabras');
DEFINE('_SEARCH_PHRASE','Frase exacta');
DEFINE('_SEARCH_NEWEST','Las más nuevas primero');
DEFINE('_SEARCH_OLDEST','Las más viejas primero');
DEFINE('_SEARCH_POPULAR','Las más populares');
DEFINE('_SEARCH_ALPHABETICAL','Orden alfabético');
DEFINE('_SEARCH_CATEGORY','Sección/Categoría');

// templates/*.php
DEFINE('_ISO','charset=iso-8859-1');
DEFINE('_DATE_FORMAT','l, d F de Y');  //Uses PHP's DATE Command Format - Depreciated
/**
* Modify this line to reflect how you want the date to appear in your site
*
*e.g. DEFINE("_DATE_FORMAT_LC","%A, %d %B %Y %H:%M"); //Uses PHP's strftime Command Format
*/
DEFINE("_DATE_FORMAT_LC","%d-%m-%Y"); //Uses PHP's strftime Command Format
DEFINE("_DATE_FORMAT_LC2","%A %d de %B de %Y a las %H:%M");
DEFINE('_SEARCH_BOX','buscar...');
DEFINE('_NEWSFLASH_BOX','¡Noticia destacada!');
DEFINE('_MAINMENU_BOX','Menú principal');

// classes/html/usermenu.php
DEFINE('_UMENU_TITLE','Menú de usuario');
DEFINE('_HI','Hola, ');

// user.php
DEFINE('_SAVE_ERR','Por favor, rellene todos los campos.');
DEFINE('_THANK_SUB','Gracias por su aportación, ésta será revisada por los administradores antes de ser publicada.');
DEFINE('_UP_SIZE','No puede subir archivos superiores a 15kb.');
DEFINE('_UP_EXISTS','Ya hay una imagen $userfile_name. Por favor, renombre el archivo y vuelva a subirla.');
DEFINE('_UP_COPY_FAIL','Error al copiar');
DEFINE('_UP_TYPE_WARN','Solo puede subir archivos de imágenes gif o jpg.');
DEFINE('_MAIL_SUB','Nuevo envio de un usuario');
DEFINE('_MAIL_MSG','Hola $adminName,\n\nUn nuevo $type, $title, ha sido enviado por $author'
.' para el sitio web $mosConfig_live_site.\n'
.'Por favor, acceda a $mosConfig_live_site/administrator para ver y aprobar este $type.\n\n'
.'Por favor, no responda a este mensaje ya que ha sido generado automáticamente y sólo es para su información.\n');
DEFINE('_PASS_VERR1','Si cambia su contraseña, escríbala de nuevo para verificarla.');
DEFINE('_PASS_VERR2','Si cambia su contraseña, por favor, asegúrese que la contraseña y su verificación coinciden.');
DEFINE('_UNAME_INUSE','Este nombre de usuario ya está siendo usado.');
DEFINE('_UPDATE','Actualizar');
DEFINE('_USER_DETAILS_SAVE','Los cambios han sido guardados.');
DEFINE('_USER_LOGIN','Acceso de Usuarios');

// components/com_user/*
DEFINE('_EDIT_TITLE','Editar detalles');
DEFINE('_YOUR_NAME','Nombre:');
DEFINE('_EMAIL','E-Mail:');
DEFINE('_UNAME','Nombre de usuario:');
DEFINE('_PASS','Contraseña:');
DEFINE('_VPASS','Verificar contraseña:');
DEFINE('_SUBMIT_SUCCESS','¡Enviado!');
DEFINE('_SUBMIT_SUCCESS_DESC','El artículo ha sido enviado a los administradores. Una vez revisado será publicado.');
DEFINE('_WELCOME','Bienvenid@!');
DEFINE('_WELCOME_DESC','Bienvenid@ a la sección de usuarios del Web');
DEFINE('_CONF_CHECKED_IN','Comprobando artículos externos e internos');
DEFINE('_CHECK_TABLE','Comprobando tabla');
DEFINE('_CHECKED_IN','Comprobando ');
DEFINE('_CHECKED_IN_ITEMS',' artículos');
DEFINE('_PASS_MATCH','Las contraseñas no son iguales');

/** components/com_banners */
DEFINE('_BNR_CLIENT_NAME','Debe seleccionar un nombre para el cliente.');
DEFINE('_BNR_CONTACT','Debe seleccionar un contacto para el cliente.');
DEFINE('_BNR_VALID_EMAIL','Debe seleccionar un e-mail valido para el cliente.');
DEFINE('_BNR_CLIENT','Debe seleccionar un cliente,');
DEFINE('_BNR_NAME','Debe seleccionar un nombre para el banner.');
DEFINE('_BNR_IMAGE','Debe seleccionar una imagen para el banner.');
DEFINE('_BNR_URL','Debe seleccionar una URL/Código propio para el banner.');

// components/com_login/*
DEFINE('_ALREADY_LOGIN','¡Ya había accedido!');
DEFINE('_LOGOUT','Clic aquí para salir');
DEFINE('_LOGIN_TEXT','Use la información de acceso para obtener acceso completo'); 
DEFINE('_LOGIN_SUCCESS','Ha accedido satisfactoriamente');
DEFINE('_LOGOUT_SUCCESS','Ha salido satisfactoriamente ');
DEFINE('_LOGIN_DESCRIPTION','Para acceder a las áreas Privadas de esta web debe entrar como usuario registrado');
DEFINE('_LOGOUT_DESCRIPTION','Ahora ha accedido a un área privada de esta web');

// components/com_weblinks/*
DEFINE('_WEBLINKS_TITLE','Enlaces Web');
DEFINE('_WEBLINKS_DESC','De la lista de abajo, seleccione el tema que le interese y escoja el sitio web que quieres visitar.');
DEFINE('_HEADER_TITLE_WEBLINKS','Enlaces Web');
DEFINE('_SECTION','Sección:');
DEFINE('_SUBMIT_LINK','Enviar enlace');
DEFINE('_URL','URL:');
DEFINE('_URL_DESC','Descripción:');
DEFINE('_NAME','Título:');
DEFINE('_WEBLINK_EXIST','Ya existe un enlace con este nombre, por favor, inténtelo de nuevo.');
DEFINE('_WEBLINK_TITLE','El enlace debe contener un título.');

/** components/com_newfeeds */
DEFINE('_FEED_NAME','Enviar Nombre');
DEFINE('_FEED_ARTICLES','# Artículos');
DEFINE('_FEED_LINK','Enviar Link');

// whos_online.php
DEFINE('_WE_HAVE', 'Hay ');
DEFINE('_AND', ' y ');
DEFINE('_GUEST_COUNT','$guest_array invitado');
DEFINE('_GUESTS_COUNT','$guest_array invitados');
DEFINE('_MEMBER_COUNT','$user_array usuario');
DEFINE('_MEMBERS_COUNT','$user_array usuarios');
DEFINE('_ONLINE',' en línea');
DEFINE('_NONE','Ningún usuario en línea');

// modules/mod_stats.php
DEFINE('_TIME_STAT','Hora');
DEFINE('_MEMBERS_STAT','Usuarios');
DEFINE('_HITS_STAT','Accesos');
DEFINE('_NEWS_STAT','Noticias');
DEFINE('_LINKS_STAT','Enlaces Web');
DEFINE('_VISITORS','Visitas');

/** /adminstrator/components/com_menus/admin.menus.html.php */
DEFINE('_MAINMENU_HOME','* El primer tema publicado en este menú [mainmenu] es el `Homepage` por defecto para esta web *');
DEFINE('_MAINMENU_DEL','* No puede `borrar` este menú pues es necesario para que Mambo funcione adecuadamente *');
DEFINE('_MENU_GROUP','* Algunos `Tipos de Menú` aparecen en más de un grupo *');


/** administrators/components/com_users */
DEFINE('_NEW_USER_MESSAGE_SUBJECT', 'Detalles de Nuevo Usuario' );
DEFINE('_NEW_USER_MESSAGE', 'Hola %s,


Ha sido añadido como usuario de %s por un Administrador.

Este e-mail contiene su nombre de usuario y contraseña para acceder a %s

Nombre de usuario - %s
Contraseña - %s


Por favor, no responda a este mensaje ya que ha sido generado automáticamente y sólo es para su información.');

/** administrators/components/com_massmail */
DEFINE('_MASSMAIL_MESSAGE', "Este es un e-mail de '%s'

Mensaje:
" );

?>
