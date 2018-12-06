<?php 
require_once('./includes/top.inc.php');
/*if (isset($_SESSION['id'])) {
	echo 'Вы уже в системе. Хотите <a href="logout.php">выйти</a>?';
} else {
	if(isset($_GET['login']))    $pre_login = $_GET['login'];
	if(isset($_GET['password'])) $pre_psw = $_GET['password'];
	echo '<div class="start_icon"></div><div class=header>Авторизация</div><br>
	<p>Войдите под игрока, под которым вы играете на сервере.</p>
	<form method=post action=login.php>
	<input class=field name=a_login type=text placeholder="Ник игрока" value="';
	if(isset($pre_login))        echo $pre_login;
	echo '"/><br>
	<input class=field name="a_password" type=password placeholder=Пароль value="';
	if(isset($pre_psw))          echo $pre_psw;
	echo '"/><br>
	<input class=button name=enter type=submit value=Войти /><br>
	</form>';
}*/
echo 'Система учетных записей временно недоступна';
require_once('./includes/bottom.inc.php');