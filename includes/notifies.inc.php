<?php
if(isset($_POST['read_notify'])) {
	$nid = $_POST['nid'];
	$query024 = mysql_query("UPDATE gc_notifies SET readed=1 WHERE id='$nid'");
	unset($_POST);
	header("Location: notifies.php");
}
if(isset($_POST['friend_accept'])) {
	$fid = $_POST['sid'];
	$nid = $_POST['nid'];
	$query021 = mysql_query("INSERT INTO gc_friends VALUES ('','$id','$fid')");
	$ntext = "Пользователь $login принял вас в друзья.";
	$query022 = mysql_query("INSERT INTO gc_notifies VALUES('','$id','$fid',3,'$ntext','$cDate','$cTime',0)");
	$query024 = mysql_query("DELETE FROM gc_notifies WHERE id='$nid'");
	gen_success("Пользователь успешно добавлен в друзья.");
	unset($_POST);
}
if(isset($_POST['friend_deny'])) {
	$fid = $_POST['sid'];
	$nid = $_POST['nid'];
	$ntext = "Пользователь $login не принял вас в друзья.";
	$query022 = mysql_query("INSERT INTO gc_notifies VALUES('','$id','$fid',3,'$ntext','$cDate','$cTime',0)");
	$query024 = mysql_query("DELETE FROM gc_notifies WHERE id='$nid'");
	unset($_POST);
}