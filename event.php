<?php
require_once('./includes/top.inc.php');
if(isset($_GET['id'])) {
	$eid = $_GET['id'];
	switch ($eid) {
		case 1:
		$eidn = '';
		break;
		case 2:
		$eidn = 'II';
		break;
		case 3:
		$eidn = 'III';
		break;
		case 4:
		$eidn = 'IV';
		break;
		case 5:
		$eidn = 'V';
		break;
		case 6:
		$eidn = 'VI';
		break;
	}
	echo '<div class="empty_icon"></div> <div class="header"><b>GlowCraft Event '.$eidn.'</b></div><br>';
	switch($eid) {
		case 1:
		echo '<b>Дата и время проведения: </b>20 марта 2015 20:30 МСК<br>';
		echo '<b>Повод: </b>Глобальное обновление 3.0<br>';
		echo '<b>Раздача: </b>была<br>';
		echo '<b>Конкурс на донат: </b>был<br>';
		echo '<b>Прямая трансляция: </b>не было<br>';
		echo '<b>Организаторы: </b>Sargasmic (_TimicK_), MrGreenYT_<br>';
		break;
		case 2:
		echo '<b>Дата и время проведения: </b>20 июня 2015 20:30 МСК<br>';
		echo '<b>Повод: </b>Глобальное обновление 4.0<br>';
		echo '<b>Раздача: </b>была<br>';
		echo '<b>Конкурс на донат: </b>был<br>';
		echo '<b>Прямая трансляция: </b>не было<br>';
		echo '<b>Организаторы: </b>_TimicK_, MrGreenYT_<br>';
		break;
		case 3:
		echo '<b>Дата и время проведения: </b>31 августа 2015 19:00 МСК<br>';
		echo '<b>Повод: </b>День знаний<br>';
		echo '<b>Раздача: </b>не было<br>';
		echo '<b>Конкурс на донат: </b>был<br>';
		echo '<b>Прямая трансляция: </b>не было<br>';
		echo '<b>Организаторы: </b>_TimicK_<br>';	
		break;
		case 4:
		echo '<b>Дата и время проведения: </b>19 октября 2015 19:30 МСК, 20 октября 2015 14:00 МСК<br>';
		echo '<b>Повод: </b>День рождения проекта<br>';
		echo '<b>Раздача: </b>не было<br>';
		echo '<b>Конкурс на донат: </b>был<br>';
		echo '<b>Прямая трансляция: </b>не было<br>';
		echo '<b>Организаторы: </b>_TimicK_<br>';
		break;
		case 5:
		echo '<b>Дата и время проведения: </b>30 октября 2015 19:30 МСК<br>';
		echo '<b>Повод: </b>Хеллоуин<br>';
		echo '<b>Раздача: </b>не было<br>';
		echo '<b>Конкурс на донат: </b>был<br>';
		echo '<b>Прямая трансляция: </b>не было<br>';
		echo '<b>Организаторы: </b>_TimicK_<br>';
		break;
		case 6:
		echo '<b>Дата и время проведения: </b>7 июня 2016 17:00 МСК<br>';
		echo '<b>Повод: </b>Возрождение игрового сервера<br>';
		echo '<b>Раздача: </b>будет<br>';
		echo '<b>Конкурс на донат: </b>был<br>';
		echo '<b>Прямая трансляция: </b>сорвалась';
		echo '<b>Организаторы: </b>_TimicK_, NegatiB4icK, MrGreenYT_<br>';
		break;
		case 7:
		echo '<b>Дата и время проведения: </b>з21 июня 2016 19:00 МСК<br>';
		echo '<b>Повод: </b>День рождения основателя (_TimicK_)<br>';
		echo '<b>Раздача: </b>была<br>';
		echo '<b>Конкурс на донат: </b>был<br>';
		echo '<b>Прямая трансляция: </b>не было';
		echo '<b>Организаторы: </b>_TimicK_, NegatiB4icK, MrGreenYT_<br>';
		break;
		case 8:
		echo '<b>Дата и время проведения: </b>запланировано на 2 июля 2016 19:00 МСК<br>';
		echo '<b>Повод: </b>День рождения второго основателя(MrGreenYT_)<br>';
		echo '<b>Раздача: </b>будет<br>';
		echo '<b>Конкурс на донат: </b>будет<br>';
		echo '<b>Прямая трансляция: </b>неизвестно';
		echo '<b>Организаторы: </b>_TimicK_, NegatiB4icK, MrGreenYT_<br>';
		break;
		default:
		echo '<p>Данного мероприятия не существует.</p>';
		break;
	}
} else {
	echo '<div class="birthday_icon"></div> <div class="birthday_header"><b>GlowCraft Event</b></div>';
	echo '<p>GlowCraft Event - мероприятие, проводимое в честь какого-либо праздника или обновления. Сопровождается конкурсом на донат или раздачей.<BR><br><br>';
	echo 'Предстоящие мероприятия:<br>';
	echo '<a class="event" href="event.php?id=8">GlowCraft Event VIII</a>';
	echo '<br><br>';
	echo 'Прошедшие мероприятия:<br>';
	echo '<a class="event" href="event.php?id=7">GlowCraft Event VII</a>';
	echo '<a class="event" href="event.php?id=6">GlowCraft Event VI</a>';
	echo '<a class="event" href="event.php?id=5">GlowCraft Event V</a>';
	echo '<a class="event" href="event.php?id=4">GlowCraft Event IV</a>';
	echo '<a class="event" href="event.php?id=3">GlowCraft Event III</a>';
	echo '<a class="event" href="event.php?id=2">GlowCraft Event II</a>';
	echo '<a class="event" href="event.php?id=1">GlowCraft Event</a>';
}
require_once('./includes/bottom.inc.php');