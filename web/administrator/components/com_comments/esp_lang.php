<?php
// Copyright (C) 2003 Chanh Ong
// All rights reserved.
// This source file is part of the COMBO - Comments on Articles
// custom Component By Chanh Ong - http://ongetc.com
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
//
//admin.comments.html.php

DEFINE('_COM_A_KEEPUPTODATE','Si quiweres mantenerte actualizazdo con �ste y otros excelentes componentes de Chanh Ong subscr�bete a la lista de correo clickeando en estos botones');
DEFINE('_COM_A_SUBSCRIBE','Subscribir');
DEFINE('_COM_A_UNSUBSCRIBE','Desuscribir');
DEFINE('_COM_A_BACKUP','Backup');
DEFINE('_COM_A_BACKUP_DESC','Backup la tabla mos_content_comments');
DEFINE('_COM_A_RESTORE','Restaurar');
DEFINE('_COM_A_RESTORE_DESC','Restaurar la tabla mos_content_comments');
DEFINE('_COM_A_CONFIG','Configuraci�n');
DEFINE('_COM_A_CONFIG_DESC','Cambia la configuraci�n');
DEFINE('_COM_A_INSTRUCTIONS','Instrucciones');
DEFINE('_COM_A_INSTRUCTIONS_DESC','Configuraci�n Post Instalaci�n');
DEFINE('_COM_A_ABOUT','Acerca');
DEFINE('_COM_A_ABOUT_DESC','Acerca de este componente');
DEFINE('_COM_A_LINK','Enlace');
DEFINE('_COM_A_LINK_DESC','Al sitio web del autor');
DEFINE('_COM_A_CHECK','Buscar actualizaciones');
DEFINE('_COM_A_VERSION','Su versi�n es ');
DEFINE('_COM_A_DONATE','Por favor considera pulsar el bot�n y enviarme GBP�5.00 Me inspirar� para mejorar este script');
DEFINE('_COM_A_REVIEW','Revisar Comentarios (Recientes primero)');
DEFINE('_COM_A_DISPLAY','Mostrar #');
DEFINE('_COM_A_NAME_SUB','Nombre');
DEFINE('_COM_A_EMAIL_SUB','Email');
DEFINE('_COM_A_HOMEPAGE','Sitio web');
DEFINE('_COM_A_COMMENT','Comentario');
DEFINE('_COM_A_ARTICLE','Art�culo');
DEFINE('_COM_A_PUBLISHED','Publicado');
DEFINE('_COM_A_MOS_BY','Componente para MOS4.5 por');
DEFINE('_COM_A_CURRENT_SETTINGS','Opciomes Actuales');
DEFINE('_COM_A_EXPLANATION','Explicaci�n');
DEFINE('_COM_A_ADMIN_EMAIL','Email del Administrador');
DEFINE('_COM_A_ADMIN_EMAIL_DESC','Si la opci�n email est� activa, se te enviar� un email a esta casilla cuando will se ingrese un nuevo comentario');
DEFINE('_COM_A_ADMIN_ALERTS','Alertas por Email al Administrador');
DEFINE('_COM_A_ADMIN_EMAIL_ENABLE','Habilitar/Deshabilitar emails al Administrador');
DEFINE('_COM_A_VISITOR_EMAIL','Alertas por email al Visitante');
DEFINE('_COM_A_VISITOR_EMAIL_DESC','Habilitar/Deshabilita emails a la persona que envi� el comentario');
DEFINE('_COM_A_REVIEW_SUBM','Revisar Env�os');
DEFINE('_COM_A_REVIEW_DESC','Al optar por SI los comentarios se agregar�n a la base de datos, esperando su revisi�n y publicaci�n antes de hacerse p�blicos. Recibir� un email <strong>s�lo</strong> si est� activado &quot;Email al Admin&quot; y has fijado &quot;Alerts por Email &quot; en &quot;SI&quot;');
DEFINE('_COM_A_REGISTERED_ONLY','S�lo Usuarios Registrados');
DEFINE('_COM_A_REG_ONLY_DESC','Establezca &quot;SI&quot; para permitir que s�lo los usuarios registrados vean o dejen comentarios, Establezca &quot;No&quot; para permitir que cualquier visitante haga comentarios');
DEFINE('_COM_A_NOTIFY_VERSION','Notificarme si hay una nueva vesi�n disponible');
DEFINE('_COM_A_NOT_VER_DESC','Si establece &quot;SI&quot; se le mostrar� un di�logo en la pantalla cuando exista una nueva versi�n de este componente (<em>NOTA: Los �nicos datos eviados al servidor de actualizaci�n es el n�mero de su versi�n</em>)');
DEFINE('_COM_A_HAVE_DONATED','Ha hecho una donaci�n?');
DEFINE('_COM_A_DONATE2','Por avor considere donar GBP&pound;10.00 a trav�s de paypal. Me instpriar� para mejorar m�s este script.! :-)');
DEFINE('_COM_A_IMPORTANT_NOTE','NOTAS IMPORTANTES');
DEFINE('_COM_A_TEMPLATE','Para que mambo revise si est� mostrando un art�culo que puede ser comentado, deber� modificar ligeramente su template.<br><a href="index2.php?option=templates&task=edit">Edit your template file</a> y busque la entrada');
DEFINE('_COM_A_CHANGE_TO','Cambie esto a lo siguiente');
DEFINE('_COM_A_HAVE_FUN','Listo! ~ (No contestar� dedl estilo de &quot;<em>Instal� su componente pero el formulario no se ve.....</em>&quot; :-)</p> <p>          Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
DEFINE('_COM_A_FORCE_PREVIEW','Forar vista previa');
DEFINE('_COM_A_FORCE_PREVIEW_TEXT','Establezca esto en SI para forzar a sus vistantes a ver su comentario antes de enviarlo');

DEFINE('_COM_A_HIDE','Hide  Comments');
DEFINE('_COM_A_HIDE_DESC','Show (Comments (x) - Add Comments) instead of the comments and form by default');
DEFINE('_COM_A_DATE','Date');
DEFINE('_COM_A_HIDE_URL','Hide URL');
DEFINE('_COM_A_HIDE_URL_DESC','Hide URL - Use to hide URL on the comments form by default');

$_COM_A_NO="No";
$_COM_A_YES="SI";

//comments.php
$_COM_C_COM_NUMBER = "N�mero de comentarios";
$_COM_C_NO_COM     = "A�n no hay comentarios - Agrega uno usando el formulario de abajo ...";
$_COM_C_POST       = "Enviado por ";
$_COM_C_HOMEPAGE   = "Cuyo sitio web es";
$_COM_C_DATE_ON    = "el";
$_COM_C_DATE_AT    = "a";
$_COM_C_ADD_COM    = "Agrega tus comentarios a este art�culo...";
$_COM_C_NAME       = "Nombre <small><i>(requerido)</i></small>";
$_COM_C_EMAIL      = "E-Mail <small><i>(requerido)</i></small>";
$_COM_C_EMAIL_NOT  = "Tu email no ser� mostrado en este sitio - s�lo al administrador";
$_COM_C_HOMEPAGE_IN= "Sitio Web";
$_COM_C_COM        = "Comentario";
$_COM_C_FULLY      = "Por favor llena completa el formulario!";
$_COM_C_NEW_COM    = "Nuevo comentario en ";
$_COM_C_HAVE_NEW   = "Hay un nuevo comentario sobre:";
$_COM_C_LOGIN      = "Por favor ingrese y publique o borre este comentario";
$_COM_C_QUICKLINK  = "Enlace r�pido para ingresar";
$_COM_C_THANKS     = "Gracias por tu comentario sobre";
$_COM_C_THANKS2    = "Gracias por tu comentario sobre el siguiente art�culo";
$_COM_C_ADMIN_REV  = "Un administrador revisar� su comentario a la brevedad";
$_COM_C_ENTERED    = "Usted ingres�";
$_COM_C_VISIT      = "Por favor viste nuestro sitio nuevamente en ";
$_COM_C_THANKS3    = "Gracias por su comentario - Ha sido agregado a esta p�gina";
$_COM_C_THANKS4    = "Gracias por su comentario - Ser� revisado por un administrador antes de ser publicado!";
$_COM_C_SUBMIT     = "Enviar";
$_COM_C_RESET     = "Reset";
$_COM_C_NOT_AUTH   = "No est� autorizado a dejar comentarios - Por favor, ingrese como usuario.";
?>
