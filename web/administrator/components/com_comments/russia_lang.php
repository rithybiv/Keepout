<?php
// Copyright (C) 2003 Chanh Ong
// All rights reserved.
// This source file is part of the COMBO - Comments on Articles
// custom Component By Chanh Ong - http://ongetc.com
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
//
//admin.comments.html.php

DEFINE('_COM_A_KEEPUPTODATE','If you want to keep up to date with this and other great components from Chanh Ong please subscribe to the mailing list by clicking these buttons');
DEFINE('_COM_A_SUBSCRIBE','Подписаться');
DEFINE('_COM_A_UNSUBSCRIBE','Отказаться от подписки');
DEFINE('_COM_A_BACKUP','Создать архив(Backup)');
DEFINE('_COM_A_BACKUP_DESC','Создать архив таблицы комментариев');
DEFINE('_COM_A_RESTORE','Восстановить из архива');
DEFINE('_COM_A_RESTORE_DESC','Восстановить таблицу комментариев из архива');
DEFINE('_COM_A_CONFIG','Настройка');
DEFINE('_COM_A_CONFIG_DESC','Изменить настройку');
DEFINE('_COM_A_INSTRUCTIONS','Инструкции');
DEFINE('_COM_A_INSTRUCTIONS_DESC','Настройка после установки');
DEFINE('_COM_A_ABOUT','Описание');
DEFINE('_COM_A_ABOUT_DESC','Описание компоненты');
DEFINE('_COM_A_LINK','Ссылка');
DEFINE('_COM_A_LINK_DESC','На сайт авторов');
DEFINE('_COM_A_CHECK','Проверить наличие обновлений');
DEFINE('_COM_A_VERSION','Ваша версия ');
DEFINE('_COM_A_DONATE','Кнопка для пожертвований. Пожертвовав деньги вы простимулируете дальнейшее развитие программы');
DEFINE('_COM_A_REVIEW','Пересмотреть комментарии (От новых к более старым)');
DEFINE('_COM_A_DISPLAY','Вывести #');
DEFINE('_COM_A_NAME_SUB','Имя');
DEFINE('_COM_A_EMAIL_SUB','Email');
DEFINE('_COM_A_HOMEPAGE','Домашняя страничка');
DEFINE('_COM_A_COMMENT','Комментарий');
DEFINE('_COM_A_ARTICLE','Статья');
DEFINE('_COM_A_PUBLISHED','Опубликовано');
DEFINE('_COM_A_MOS_BY','A MOS4.5 Custom Component by');
DEFINE('_COM_A_CURRENT_SETTINGS','Текущие настройки');
DEFINE('_COM_A_EXPLANATION','Объяснение');
DEFINE('_COM_A_ADMIN_EMAIL','Email администратора');
DEFINE('_COM_A_ADMIN_EMAIL_DESC','Если email включен, то email будет отослан на указанный аддресс при появлении новых комментариев');
DEFINE('_COM_A_ADMIN_ALERTS','Оповещение администратора по Email');
DEFINE('_COM_A_ADMIN_EMAIL_ENABLE','Включить/Выключить отсылку писем администратору');
DEFINE('_COM_A_VISITOR_EMAIL','Оповещения визитёра по Email');
DEFINE('_COM_A_VISITOR_EMAIL_DESC','Включить/Выключить отсылку email автору комментариев');
DEFINE('_COM_A_REVIEW_SUBM','Просмотр введённой формы');
DEFINE('_COM_A_REVIEW_DESC','Режим модератора. Пока комментарий не будет просмотрен админом, комментарий не опубликуется. Вы получите оповещение <strong>только при условии</strong> включённого оповещения администратора по email');
DEFINE('_COM_A_REGISTERED_ONLY','Только для зарегистрированных пользователей');
DEFINE('_COM_A_REG_ONLY_DESC','&quot;Включить&quot; и только зарегистрированные пользователи смогут видеть и оставлять комментарии');
DEFINE('_COM_A_NOTIFY_VERSION','Оповещение о новых версиях');
DEFINE('_COM_A_NOT_VER_DESC','Диалог оповещения об обновлениях (на сервер обновлений отсылается только текущая версия компонента)');
DEFINE('_COM_A_HAVE_DONATED','Вы уже что-то пожертвовали?');
DEFINE('_COM_A_DONATE2','Пожертвуйте мне &pound;10.00 через paypal. Это вдохновит меня на дальнейшую разработку :-)');
DEFINE('_COM_A_IMPORTANT_NOTE','ВАЖНЫЕ ЗАМЕТКИ');
DEFINE('_COM_A_TEMPLATE','In order for mambo to check and see if its showing an article that can be commented on, you must make a small change to your template.<br><a href="index2.php?option=templates&task=edit">Edit your template file</a> and look for the entry');
DEFINE('_COM_A_CHANGE_TO','Измените это на следующее');
DEFINE('_COM_A_HAVE_FUN','Thats it! ~ (I will not be answering emails along the line of &quot;<em>I&quot;ve installed your component but the form doesn&quot;t show.....</em>&quot; :-)</p> <p>          Have Fun!</p> <p>~<a href="http://ongetc.com" target="_blank">Chanh Ong</a>. </p>');
DEFINE('_COM_A_FORCE_PREVIEW','Обязательный просмотр введённого');
DEFINE('_COM_A_FORCE_PREVIEW_TEXT','Обязательный предпросмотр введённого');
DEFINE('_COM_A_HIDE','Спрятать комментарии');
DEFINE('_COM_A_HIDE_DESC','Показывать (Комментарии (x) - Добавить комментарий) вместо списка комментариев и формы прямо в статье');
DEFINE('_COM_A_DATE','Date');
DEFINE('_COM_A_HIDE_URL','Hide URL');
DEFINE('_COM_A_HIDE_URL_DESC','Hide URL - Use to hide URL on the comments form by default');
$_COM_A_NO="Нет";
$_COM_A_YES="Да";

//comments.php
$_COM_C_COM_NUMBER = "Колличество комментариев";
$_COM_C_NO_COM     = "Пока никто не прокомментировал - для Вашего комментария заполните приведённую ниже форму...";
$_COM_C_POST       = "Написал";
$_COM_C_HOMEPAGE   = "<br>Домашняя страница";
$_COM_C_DATE_ON    = "<br>Дата";
$_COM_C_DATE_AT    = "Время";
$_COM_C_ADD_COM    = "Ваш комментарий:";
$_COM_C_NAME       = "Ваше имя <small><i>(обязательное поле)</i></small>";
$_COM_C_EMAIL      = "E-Mail <small><i>(обязательное поле)</i></small>";
$_COM_C_EMAIL_NOT  = "Ваш email не будет опубликован на сайте, он будет виден только администратору сайта";
$_COM_C_HOMEPAGE_IN= "Домашняя страница";
$_COM_C_COM        = "Текст:";
$_COM_C_FULLY      = "Не все поля заполнены!";
$_COM_C_NEW_COM    = "Дата нового комментария";
$_COM_C_HAVE_NEW   = "Появился новый комментарий к статье:";
$_COM_C_LOGIN      = "Пожалуйста зарегистрируйтесь на сайте, чтобы опубликовать или удалить комментарий";
$_COM_C_QUICKLINK  = "Быстрая ссылка для регистрации на сайте (login)";
$_COM_C_THANKS     = "Спасибо за Ваш комментарий к статье";
$_COM_C_THANKS2    = "Спасибо за Ваш комментарий к слудующей статье";
$_COM_C_ADMIN_REV  = "Ваш комментарий будет опубликован после проверки модератором";
$_COM_C_ENTERED    = "Вы ввели";
$_COM_C_VISIT      = "Заходите ещё";
$_COM_C_THANKS3    = "Спасибо за комментарий";
$_COM_C_THANKS4    = "Ваш комментарий будет опубликован после проверки модератором!";
$_COM_C_SUBMIT     = "Отослать";
$_COM_C_RESET     = "Reset";
$_COM_C_NOT_AUTH   = "Чтобы оставить/прочитать комментарии - зарегистрируйтесь (залогиньтесь)";
?>
