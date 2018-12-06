<?php
require_once('./includes/top.inc.php');
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
require_once('./includes/bottom.inc.php');