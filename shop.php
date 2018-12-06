<?php
include_once('./includes/top.inc.php');
	echo '<center><div class="store">GlowCraft Store</div></center>';
	gen_error("Магазин работает до 1 октября");
	echo '<div class="category">Привилегии</div>';
	$query029 = mysql_query("SELECT * FROM gc_donate WHERE type = 0");
	$query030 = mysql_query("SELECT * FROM gc_donate WHERE type > 0");
	while($data = mysql_fetch_assoc($query029)) {
		echo '<a class="good_'.$data['color'].'" href="buy.php?id='.$data['id'].'">'.$data['name'].' -  '.$data['cost'].' р.</a>';
	}
	echo '<div class="category">Прочие услуги</div>';
	echo 'Список пуст';
include_once('./includes/bottom.inc.php');