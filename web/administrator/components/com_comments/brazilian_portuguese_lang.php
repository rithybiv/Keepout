<?php
// Copyright (C) 2003 Chanh Ong
// All rights reserved.
// This source file is part of the COMBO - Comments on Articles
// custom Component By Chanh Ong - http://ongetc.com
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
//
//admin.comments.html.php

DEFINE('_COM_A_KEEPUPTODATE','Se você quer se manter atualizado com este e outros ótimos componentes do Chanh Ong favor se inscrever na lista de email através destes botões');
DEFINE('_COM_A_SUBSCRIBE','Inscrever');
DEFINE('_COM_A_UNSUBSCRIBE','Desinscrever');
DEFINE('_COM_A_BACKUP','Backup');
DEFINE('_COM_A_BACKUP_DESC','Backup a tabela do mos_content_comments');
DEFINE('_COM_A_RESTORE','Restaurar');
DEFINE('_COM_A_RESTORE_DESC','Restaurara tabela do mos_content_comments');
DEFINE('_COM_A_CONFIG','Configuração');
DEFINE('_COM_A_CONFIG_DESC','Mudar a configuração');
DEFINE('_COM_A_INSTRUCTIONS','Instruções');
DEFINE('_COM_A_INSTRUCTIONS_DESC','Configurações pós instalação');
DEFINE('_COM_A_ABOUT','Sobre');
DEFINE('_COM_A_ABOUT_DESC','Sobre este componente');
DEFINE('_COM_A_LINK','Link');
DEFINE('_COM_A_LINK_DESC','Para o site do autor');
DEFINE('_COM_A_CHECK','Checar por atualizações');
DEFINE('_COM_A_VERSION','Sua versão é ');
DEFINE('_COM_A_DONATE','Favor considerar clicar nos Ads do Google na esquerda ou no botão da esquerda para doar. Isso irá inspirar o autor para aprimorar mais o script');
DEFINE('_COM_A_REVIEW','Rever Comentários (Mais novos primeiros)');
DEFINE('_COM_A_DISPLAY','Visualização #');
DEFINE('_COM_A_NAME_SUB','Nome');
DEFINE('_COM_A_EMAIL_SUB','Email');
DEFINE('_COM_A_HOMEPAGE','Homepage');
DEFINE('_COM_A_COMMENT','Comentário');
DEFINE('_COM_A_ARTICLE','Artigo');
DEFINE('_COM_A_PUBLISHED','Publicado');
DEFINE('_COM_A_MOS_BY','Um componente do MOS4.5 por');
DEFINE('_COM_A_CURRENT_SETTINGS','Configurações atuais');
DEFINE('_COM_A_EXPLANATION','Explanação');
DEFINE('_COM_A_ADMIN_EMAIL','Email do Admin.');
DEFINE('_COM_A_ADMIN_EMAIL_DESC','Se o email estiver ligado um email será enviado para este email quando um novo comentário for colocado');
DEFINE('_COM_A_ADMIN_ALERTS','Alertas de Emails para o Admin.');
DEFINE('_COM_A_ADMIN_EMAIL_ENABLE','Habilitar/Desabilitar emails para o Admin');
DEFINE('_COM_A_VISITOR_EMAIL','Emails de alertas para visitantes');
DEFINE('_COM_A_VISITOR_EMAIL_DESC','Habilitar/Desabilitar emails para a pessoa que enviou o comentário');
DEFINE('_COM_A_REVIEW_SUBM','Rever os envios');
DEFINE('_COM_A_REVIEW_DESC','Se você colocou esta opção para sim então os comentários serão adicionados para o banco de dados e terá que esperar para uma revisão antes de ser publicado. Você irá receber um email <strong>somente</strong> se houver um valor em  &quot;Admin email&quot; e você tiver configurado o &quot;Alerta de email &quot; para &quot;sim&quot;');
DEFINE('_COM_A_REGISTERED_ONLY','Usuários registrados somente');
DEFINE('_COM_A_REG_ONLY_DESC','Configurar &quot;Sim&quot; para permitir usuários registrado verem comentários e deixar comentários, Configurar &quot;Não&quot; para permitir qualquer usuário comentar');
DEFINE('_COM_A_NOTIFY_VERSION','Notificar se uma nova versão estive disponível');
DEFINE('_COM_A_NOT_VER_DESC','Se você configurou para &quot;Sim&quot; será mostrado uma caixa de diálogo na tela principal se uma atualização estiver disponível (<em>NOTA: Os únicos dados que serão enviados para o servidor será o número de sua versão</em>)');
DEFINE('_COM_A_HAVE_DONATED','Você doou?');
DEFINE('_COM_A_DONATE2','Favor considerar doar ao criador uma quantia de GBP&pound;10.00 através do paypal. Isto iraá inspirar o autor a aprimorar os scripts! :-)');
DEFINE('_COM_A_IMPORTANT_NOTE','Notas importantes');
DEFINE('_COM_A_TEMPLATE','Para o mambo checar se o artigo mostrado pode ser comentado ou não, você deve fazer uma pequena mudança no seu template.<br><a href="index2.php?option=templates&task=edit">Edite seu aquivo de template </a> e ache a seguinte entrada');
DEFINE('_COM_A_CHANGE_TO','Mudar este para o seguinte');
DEFINE('_COM_A_HAVE_FUN','Pronto! ~ (Eu não irei estar respondendo emails com a seguinte pergunta &quot;<em>Eu&quot;ve instalei o componente mas ele não &quot;funciona.....</em>&quot; :-)</p> <p>          Divirta-se!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
DEFINE('_COM_A_FORCE_PREVIEW','Forçar uma visualização');
DEFINE('_COM_A_FORCE_PREVIEW_TEXT','Configurar essa opção para sim e forçar seus visitantes a visualizar seus comentários antes do envio final');
DEFINE('_COM_A_HIDE','Esconder Comentários');
DEFINE('_COM_A_HIDE_DESC','Mostrar (Comentários (x) - Adicionar comentários) em vez de comentários e o formulário padrão');
$_COM_A_NO="Não";
$_COM_A_YES="Sim";

//comments.php
$_COM_C_COM_NUMBER = "Número de comentários";
$_COM_C_NO_COM     = "Não há comentários ainda - sinta-se livre para usar o formulário abaixo...";
$_COM_C_POST       = "Postado por";
$_COM_C_HOMEPAGE   = "De quem é a página";
$_COM_C_DATE_ON    = "em";
$_COM_C_DATE_AT    = "na";
$_COM_C_ADD_COM    = "Adicionar seus comentários a este artigo...";
$_COM_C_NAME       = "Nome <small><i>(necessário)</i></small>";
$_COM_C_EMAIL      = "E-Mail <small><i>(necessário)</i></small>";
$_COM_C_EMAIL_NOT  = "Seu email não será visualizado no site é somente para o administrador";
$_COM_C_HOMEPAGE_IN= "Homepage";
$_COM_C_COM        = "Comentário";
$_COM_C_FULLY      = "Favor completar o formulário completamente!";
$_COM_C_NEW_COM    = "Novo comentário em";
$_COM_C_HAVE_NEW   = "Você tem um novo comentário no seguinte artigo:";
$_COM_C_LOGIN      = "Favor logar e publicar ou deletar este comentário";
$_COM_C_QUICKLINK  = "Aqui um link rápido para logar";
$_COM_C_THANKS     = "Muito obrigado pelo seu comentário";
$_COM_C_THANKS2    = "Muito obrigado pelo seu comentário no seguinte artigo";
$_COM_C_ADMIN_REV  = "Um administrador irá rever seu comentário assim que possível";
$_COM_C_ENTERED    = "Você entrou";
$_COM_C_VISIT      = "Favor visitar o site novamente em";
$_COM_C_THANKS3    = "Muito obrigado pelos seus comentários - Eles foram adicionados para a seguinte página";
$_COM_C_THANKS4    = "Muito obrigado pelos seus comentários - Eles irão ser revisados pelo administrador o mais rápido para serem publicados assim que possível!";
$_COM_C_SUBMIT     = "Enviar";
$_COM_C_RESET     = "Resetar";
$_COM_C_NOT_AUTH   = "Você não está autorizado para deixar seus comentários - favor logar.";
?>
