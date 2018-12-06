<?php
	$host_connect = mysql_connect($db_host,$db_user,$db_psw) or die("Ошибка соединения с сервером.");
	$db_select = mysql_select_db($db_name, $host_connect) or die("База данных не найдена.");
	mysql_query("SET NAMES 'utf8';");
	mysql_query("SET CHARACTER SET 'utf8';");
	mysql_query("SET SESSION collation_connection = 'utf8_general_ci';");