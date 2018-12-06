<?php
include_once('./includes/top.inc.php');
if (isset($_POST['send_report'])) {
	$theme = $_POST['theme'];
	$strict = $_POST['strict'];
	$msg = $_POST['msg'];
	$report_send = mysql_query("INSERT INTO reports VALUES ('', '$ulogin', '$theme', '$strict', '$msg', '$currentYear', '$currentMonth', '$currentDay', '', ''");
	echo 'Сообщение успешно отправлено.';
}
if (isset($_SESSION['id'])) {
	echo '<div class="header">Сообщите об ошибке / Задайте вопрос</div>';
	echo '<br>';
	echo '<form action="" method="post">
		<input name="theme" placeholder="Тема" class="field" required /><br>
		<select name="strict" class="select" required >
			<option value="low">Низкая важность</option>
			<option value="mid">Средняя важность</option>
			<option value="high">Высокая важность</option>
		</select><br>
		<textarea class="field" cols="40" rows="10" placeholder="Сообщение" name="msg" required></textarea><br>
		<input class="button" type="submit" value="Отправить" name="send_report" /></form>';
} else {
lets_auth();
}
include_once('./includes/bottom.inc.php');