<?php
if($cPage == "index.php") {
	$news_query = mysql_query("SELECT * FROM gc_news WHERE fixed=0 ORDER BY id DESC LIMIT 19");
	$news_query_fixed = mysql_query("SELECT * FROM gc_news WHERE fixed=1 ORDER BY id DESC LIMIT 1");
	$ibs_query = mysql_query("SELECT * FROM gc_ibs ORDER BY id DESC");
}
if($cPage == "news.php") {
	$news_query = mysql_query("SELECT * FROM gc_news WHERE fixed=0 ORDER BY id DESC");
	$news_query_fixed = mysql_query("SELECT * FROM gc_news WHERE fixed=1 ORDER BY id DESC LIMIT 1");
}