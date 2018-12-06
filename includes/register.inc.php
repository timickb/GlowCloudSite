<?php
if(isset($_POST['goreg'])) {
	if(strlen($_POST['rlogin']) <= 20) {
		if($_POST['rpsw'] == $_POST['rrpsw']) {
			$rlogin = htmlspecialchars(trim($_POST['rlogin']));
			$check_query = mysql_query("SELECT * FROM users WHERE login='$rlogin'");
			if(mysql_num_rows($check_query) == 0) {
				$rpsw = htmlspecialchars(trim(md5($_POST['rpsw'])));
				$rpsw_simple = htmlspecialchars(trim($_POST['rpsw']));
				$remail = htmlspecialchars(trim($_POST['remail']));
				$reg_query = mysql_query("INSERT INTO gc_users VALUES ('','$rlogin','$rpsw','$remail','','5000','',0,0,0,'null',0,0,'','$cYear','$cMonth','$cDay','$cHour','$cMinute','$cSecond')");
				$tmp_arr = mysql_fetch_object(mysql_query("SELECT * FROM gc_users WHERE login='$rlogin'"));
				$tmp_id = $tmp_arr->id;
				$notify_text = "Благодарим вас за предварительную регистрацию на нашем проекте! В подарок вы получили 5000 игровых монет.";
				$notify_query = mysql_query("INSERT INTO gc_notifies VALUES ('','Администратор','$tmp_id',0,'$notify_text','$cDate','$cTime',0)");
				header("Location: login.php?login=$rlogin&password=$rpsw_simple");
			} else {
				gen_error("Игрок с таким ником уже зарегистрирован.");
			}


		} else {
			gen_error("Пароли не совпадают");
		}
	} else {
		gen_error("Превышена длина никнейма");
	}
	$rlogin = htmlspecialchars(trim($_POST['rlogin']));
}