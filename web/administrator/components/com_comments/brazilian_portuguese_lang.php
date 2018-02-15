<?php
// Copyright (C) 2003 Chanh Ong
// All rights reserved.
// This source file is part of the COMBO - Comments on Articles
// custom Component By Chanh Ong - http://ongetc.com
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
//
//admin.comments.html.php

DEFINE('_COM_A_KEEPUPTODATE','Se voc� quer se manter atualizado com este e outros �timos componentes do Chanh Ong favor se inscrever na lista de email atrav�s destes bot�es');
DEFINE('_COM_A_SUBSCRIBE','Inscrever');
DEFINE('_COM_A_UNSUBSCRIBE','Desinscrever');
DEFINE('_COM_A_BACKUP','Backup');
DEFINE('_COM_A_BACKUP_DESC','Backup a tabela do mos_content_comments');
DEFINE('_COM_A_RESTORE','Restaurar');
DEFINE('_COM_A_RESTORE_DESC','Restaurara tabela do mos_content_comments');
DEFINE('_COM_A_CONFIG','Configura��o');
DEFINE('_COM_A_CONFIG_DESC','Mudar a configura��o');
DEFINE('_COM_A_INSTRUCTIONS','Instru��es');
DEFINE('_COM_A_INSTRUCTIONS_DESC','Configura��es p�s instala��o');
DEFINE('_COM_A_ABOUT','Sobre');
DEFINE('_COM_A_ABOUT_DESC','Sobre este componente');
DEFINE('_COM_A_LINK','Link');
DEFINE('_COM_A_LINK_DESC','Para o site do autor');
DEFINE('_COM_A_CHECK','Checar por atualiza��es');
DEFINE('_COM_A_VERSION','Sua vers�o � ');
DEFINE('_COM_A_DONATE','Favor considerar clicar nos Ads do Google na esquerda ou no bot�o da esquerda para doar. Isso ir� inspirar o autor para aprimorar mais o script');
DEFINE('_COM_A_REVIEW','Rever Coment�rios (Mais novos primeiros)');
DEFINE('_COM_A_DISPLAY','Visualiza��o #');
DEFINE('_COM_A_NAME_SUB','Nome');
DEFINE('_COM_A_EMAIL_SUB','Email');
DEFINE('_COM_A_HOMEPAGE','Homepage');
DEFINE('_COM_A_COMMENT','Coment�rio');
DEFINE('_COM_A_ARTICLE','Artigo');
DEFINE('_COM_A_PUBLISHED','Publicado');
DEFINE('_COM_A_MOS_BY','Um componente do MOS4.5 por');
DEFINE('_COM_A_CURRENT_SETTINGS','Configura��es atuais');
DEFINE('_COM_A_EXPLANATION','Explana��o');
DEFINE('_COM_A_ADMIN_EMAIL','Email do Admin.');
DEFINE('_COM_A_ADMIN_EMAIL_DESC','Se o email estiver ligado um email ser� enviado para este email quando um novo coment�rio for colocado');
DEFINE('_COM_A_ADMIN_ALERTS','Alertas de Emails para o Admin.');
DEFINE('_COM_A_ADMIN_EMAIL_ENABLE','Habilitar/Desabilitar emails para o Admin');
DEFINE('_COM_A_VISITOR_EMAIL','Emails de alertas para visitantes');
DEFINE('_COM_A_VISITOR_EMAIL_DESC','Habilitar/Desabilitar emails para a pessoa que enviou o coment�rio');
DEFINE('_COM_A_REVIEW_SUBM','Rever os envios');
DEFINE('_COM_A_REVIEW_DESC','Se voc� colocou esta op��o para sim ent�o os coment�rios ser�o adicionados para o banco de dados e ter� que esperar para uma revis�o antes de ser publicado. Voc� ir� receber um email <strong>somente</strong> se houver um valor em  &quot;Admin email&quot; e voc� tiver configurado o &quot;Alerta de email &quot; para &quot;sim&quot;');
DEFINE('_COM_A_REGISTERED_ONLY','Usu�rios registrados somente');
DEFINE('_COM_A_REG_ONLY_DESC','Configurar &quot;Sim&quot; para permitir usu�rios registrado verem coment�rios e deixar coment�rios, Configurar &quot;N�o&quot; para permitir qualquer usu�rio comentar');
DEFINE('_COM_A_NOTIFY_VERSION','Notificar se uma nova vers�o estive dispon�vel');
DEFINE('_COM_A_NOT_VER_DESC','Se voc� configurou para &quot;Sim&quot; ser� mostrado uma caixa de di�logo na tela principal se uma atualiza��o estiver dispon�vel (<em>NOTA: Os �nicos dados que ser�o enviados para o servidor ser� o n�mero de sua vers�o</em>)');
DEFINE('_COM_A_HAVE_DONATED','Voc� doou?');
DEFINE('_COM_A_DONATE2','Favor considerar doar ao criador uma quantia de GBP&pound;10.00 atrav�s do paypal. Isto ira� inspirar o autor a aprimorar os scripts! :-)');
DEFINE('_COM_A_IMPORTANT_NOTE','Notas importantes');
DEFINE('_COM_A_TEMPLATE','Para o mambo checar se o artigo mostrado pode ser comentado ou n�o, voc� deve fazer uma pequena mudan�a no seu template.<br><a href="index2.php?option=templates&task=edit">Edite seu aquivo de template </a> e ache a seguinte entrada');
DEFINE('_COM_A_CHANGE_TO','Mudar este para o seguinte');
DEFINE('_COM_A_HAVE_FUN','Pronto! ~ (Eu n�o irei estar respondendo emails com a seguinte pergunta &quot;<em>Eu&quot;ve instalei o componente mas ele n�o &quot;funciona.....</em>&quot; :-)</p> <p>          Divirta-se!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
DEFINE('_COM_A_FORCE_PREVIEW','For�ar uma visualiza��o');
DEFINE('_COM_A_FORCE_PREVIEW_TEXT','Configurar essa op��o para sim e for�ar seus visitantes a visualizar seus coment�rios antes do envio final');
DEFINE('_COM_A_HIDE','Esconder Coment�rios');
DEFINE('_COM_A_HIDE_DESC','Mostrar (Coment�rios (x) - Adicionar coment�rios) em vez de coment�rios e o formul�rio padr�o');
$_COM_A_NO="N�o";
$_COM_A_YES="Sim";

//comments.php
$_COM_C_COM_NUMBER = "N�mero de coment�rios";
$_COM_C_NO_COM     = "N�o h� coment�rios ainda - sinta-se livre para usar o formul�rio abaixo...";
$_COM_C_POST       = "Postado por";
$_COM_C_HOMEPAGE   = "De quem � a p�gina";
$_COM_C_DATE_ON    = "em";
$_COM_C_DATE_AT    = "na";
$_COM_C_ADD_COM    = "Adicionar seus coment�rios a este artigo...";
$_COM_C_NAME       = "Nome <small><i>(necess�rio)</i></small>";
$_COM_C_EMAIL      = "E-Mail <small><i>(necess�rio)</i></small>";
$_COM_C_EMAIL_NOT  = "Seu email n�o ser� visualizado no site � somente para o administrador";
$_COM_C_HOMEPAGE_IN= "Homepage";
$_COM_C_COM        = "Coment�rio";
$_COM_C_FULLY      = "Favor completar o formul�rio completamente!";
$_COM_C_NEW_COM    = "Novo coment�rio em";
$_COM_C_HAVE_NEW   = "Voc� tem um novo coment�rio no seguinte artigo:";
$_COM_C_LOGIN      = "Favor logar e publicar ou deletar este coment�rio";
$_COM_C_QUICKLINK  = "Aqui um link r�pido para logar";
$_COM_C_THANKS     = "Muito obrigado pelo seu coment�rio";
$_COM_C_THANKS2    = "Muito obrigado pelo seu coment�rio no seguinte artigo";
$_COM_C_ADMIN_REV  = "Um administrador ir� rever seu coment�rio assim que poss�vel";
$_COM_C_ENTERED    = "Voc� entrou";
$_COM_C_VISIT      = "Favor visitar o site novamente em";
$_COM_C_THANKS3    = "Muito obrigado pelos seus coment�rios - Eles foram adicionados para a seguinte p�gina";
$_COM_C_THANKS4    = "Muito obrigado pelos seus coment�rios - Eles ir�o ser revisados pelo administrador o mais r�pido para serem publicados assim que poss�vel!";
$_COM_C_SUBMIT     = "Enviar";
$_COM_C_RESET     = "Resetar";
$_COM_C_NOT_AUTH   = "Voc� n�o est� autorizado para deixar seus coment�rios - favor logar.";
?>
