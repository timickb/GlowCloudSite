<?php
session_start();
ob_start();
header('Content-Type: text/html; charset= windows-1251');
//Подключение скриптов
require_once('config.inc.php');
require_once('connect.inc.php');
require_once('functions.inc.php');
require_once('auth.inc.php');
require_once('define.inc.php');
require_once('news.inc.php');
require_once('acc_settings.inc.php');
require_once('register.inc.php');
require_once('notifies.inc.php');
require_once('online.inc.php');
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<title>GlowCraft - '.$cPageName.'</title>';
echo '<link rel="icon" href="graphics/images/favicon.ico" type="image/x-icon">';
echo '<link rel="stylesheet" href="graphics/style.css" />';
echo '<link rel="stylesheet" href="profile/background.css" />';
echo '<link rel="stylesheet" href="profile/select.css" />';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />';
echo '<script type="text/javascript" src="http://mcdonate.ru/api/mcd_script.js?server_id=12502&callback=mcdCallback"></script>';
echo '<meta keywords="майнкрафт, миникрафт, муникрафт, сервера майнкрафт, сервера, мониторинг серверов, играть в майнкрафт, школота" />';
echo '</head>';
echo '<body>';
if (isset($_SESSION['style'])) {
	//empty
} else {
}
//Меню сайта
echo '<div class="menublock">';
echo '<div class="menu">';
//Обычное меню
if (!isset($_SESSION['style'])) {
	echo '<table><tr><td>';
	if ($cPage == 'index.php') {
			echo('<img src="graphics/images/logo_new.png" width="48" height="48"></img>');
	} else {
		 echo('<a href="index.php"><img src="graphics/images/logo_new.png" width="48" height="48"></img></a>');
	}
	echo '</td><td>';
	if ($cPage == 'support.php') {
		echo('<div class="onpage">Помощь</div>');
	} else {
			echo('<a class="topage" href="support.php" title="Помощь">Помощь</a>');
	}
	echo '</td><td>';
	if ($cPage == 'shop.php' || $cPage == 'buy.php') {
		echo('<div class="onpage">Магазин</div>');
	} else {
		echo '<a class="topage" href="shop.php" title="Магазин">Магазин</a>';
	}
	/*echo '</td><td>';
	echo '<a class="topage" href="forum" title="Форум">Форум</a>';*/
	echo '</td></tr></table>';
}
echo '</div>';
/*echo '<div class="ustatus">';
	if (isset($_SESSION['id'])) {
		echo '<table>';
		echo '<tr>';
		echo '<td><div class="loginfo"><img src="https://minotar.net/helm/'.$login.'" width="20" height="20" /><div class="logname">';
		echo "$login</td>";
		echo '<td>';
		if ($cPage != 'user.php') {
			echo '<a class="user_profile" href="user.php?id='.$id.'" title="Профиль"></a>';
		}
		echo '</td>';
		echo '<td>';
		if ($cPage != 'account_settings.php') {
			echo '<a class="user_settings" href="account_settings.php" title="Настройки"></a>';
		}
		echo '</td>';
		echo '<td><a class="user_exit" href="logout.php" title="Выйти"></a></td>';
		echo '</tr>';
		echo '</table>';
		} else {
			echo '<a class="button" href="login.php">Войти</a>';
		}
		echo '</div>';*/
echo '</div></td>';
echo '</tr></table>';
echo '</div>';
echo '<!Тело сайта/>';
echo '<div class="content">';
if ($cPage != 'index.php' && $cPage != 'user.php' && $cPage != 'news.php') {
	echo '<div class="cbackground">';
}