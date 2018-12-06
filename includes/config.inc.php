<?php
$db_host = "51.254.116.118";
$db_user = "root";
$db_psw = "Y23bc666777";
$db_name = "glowcraft";
$cYear = date('Y');
$cMonth = date('m');
$cDay = date('d');
$cHour = date('H');
$cMinute = date('i');
$cSecond = date('s');
$cDate = $cDay.".".$cMonth.".".$cYear;
$cTime = $cHour.":".$cMinute.":".$cSecond;
$cPage = basename($_SERVER['SCRIPT_FILENAME']);
$cPageName;
	switch ($cPage) {
		case "index.php":
		$cPageName = "Главная";
		break;
		case "start.php":
		$cPageName = "Начать играть";
		break;
		case "support.php":
		$cPageName = "Справочный разедл";
		break;
		case "contacts.php":
		$cPageName = "Контакты";
		break;
		case "report.php":
		$cPageName = "Сообщить об ошибке";
		break;
		case "support_begin.php":
		$cPageName = "Начало игры";
		break;
		case "support_game.php":
		$cPageName = "Игровые режимы";
		break;
		case "support_rules.php":
		$cPageName = "Правила";
		break;
		case "support_shop.php":
		$cPageName = "О магазине";
		break;
		case "birthday.php":
		$cPageName = "НАМ 1 ГОД!";
		break;
		case "account_settings.php":
		$cPageName = "Параметры учетной записи";
		break;
		case "user.php":
		$cPageName = "Профиль";
		break;
		case "notifies.php":
		$cPageName = "Центр уведомлений";
		break;
		case "dev.php":
		$cPageName = "Поддержите разработку";
		break;
		case "friends.php":
		$cPageName = "Мои друзья";
		break;
		case "login.php":
		$cPageName = "Авторизация";
		break;
		case "shop_select.php";
		$cPageName = "Выбор магазина";
		break;
		case "news.php":
		$cPageName = "Новости";
		break;
		default:
		$cPageName = "";
		break;
	}