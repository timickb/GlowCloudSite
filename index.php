<?php
require_once('./includes/top.inc.php');
//Статистика онлайна
/*echo '<div class="stats">';
	echo '<center>Общий онлайн: '.$num_online.'<br>
	IP: gc-play.ru / glowcraft.ru
	<br>
	<a class="button" href="online.php">Список игроков онлайн</a></center>';
echo '</div>';*/
//Вывод ссылок
while($data = mysql_fetch_assoc($ibs_query)) {
	echo '<a class="indexblock" href="'.$data['url'].'"><div class="arrow"></div><div class="ib_text">'.$data['text'].'</div></a>';
}
echo '<br><br>';
//Вывод закрепленной новости
while ($data = mysql_fetch_assoc($news_query_fixed)) {
	echo '<div class="news_item">
		<div class="header-news"><div class="img-news"></div>'.$data['title'].'<div class="nfixed" title="Закреплено"></div></div>
		<div class="date">'.$data['date'].'</div>
		<div class="news_text">
		<p>'.$data['text'].'</p>
		</div>
		</div>
		<br>';
}
//Вывод остальных новостей
while($data = mysql_fetch_assoc($news_query)) {
	echo '<div class="news_item">
		<div class="header-news"><div class="img-news"></div>'.$data['title'].'</div>
		<div class="date">'.$data['date'].' '.$data['time'].'</div>
		<div class="news_text"><p>'.$data['text'].'</p></div>
		</div>
		<br>';
}
echo '<br><a class="qlink" href="news.php">Все новости -></a><br>';
require_once('./includes/bottom.inc.php');