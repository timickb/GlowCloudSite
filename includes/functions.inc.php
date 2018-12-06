<?php
//Функция: просьба авторизироваться
function lets_auth() {
	echo '<div class="notify_icon"></div><div class="header">Необходима авторизация</div><br><p>Для доступа к данной странице необходимо <a href="login.php" class="link">Войти</a> в учетную запись GlowCraft.</p>';
	header("Location: login.php");
}
//Функция: нужно разлогиниться
function lets_logout() {
	echo '<div class="notify_icon"></div><div class="header">Доступ запрещен</div><br><p>Доступ к данной странице имеют только неавторизованные пользователи.</p>';
}
function gen_error($message) {
	echo '<div class="wrong">'.$message.'</div><br>';
}
function gen_success($message) {
	echo '<div class="success">'.$message.'</div><br>';
}