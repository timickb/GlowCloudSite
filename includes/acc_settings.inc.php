<?php
   //Сообщение об успешном изменении пароля
      if (isset($_SESSION['psw_was_edit'])) {
            gen_success("Пароль успешно изменен");
            unset($_SESSION['psw_was_edit']);
      }
      //Сообщение об успешном изменении цвета профиля
      if (isset($_SESSION['color_was_edit'])) {
            gen_success("Цвет профиля успешно изменен.");
            unset($_SESSION['color_was_edit']);
      }
      //Смена пароля
	if (isset($_POST['editpsw'])) {
		$npassword = md5($_POST['npassword']);
		$rnpassword = md5($_POST['rnpassword']);
        $opassword = md5($_POST['opassword']);
		if ($npassword != '' && $rnpassword != '') {
                  $opsw_query = mysql_query("SELECT password FROM gc_users WHERE login = '$login'");
                  $check_opsw = mysql_fetch_array($opsw_query);
                if ($check_opsw['password'] == $opassword) {
					if ($npassword == $rnpassword) {
						$query = mysql_query("UPDATE gc_users SET password = '$npassword' WHERE login = '$login'");
						$_SESSION['psw_was_edit'] = 1;
						unset($_POST);
						header('Location: account_settings.php');
					} else {
						gen_error("Пароли не совпадают");
						unset($_POST);
					} 	
				} else {
                       gen_error("Неверный текущий пароль");
                       unset($_POST);
                }
		} else {
			echo ('Заполните все поля');
		}
	}
      //Изменение цвета профиля
      //Изменение на blue
      if (isset($_POST['blue_select'])) {
            $getcolor = 'blue';
            $query = mysql_query("UPDATE gc_users SET profile_color = '$getcolor' WHERE login = '$login'");
            $_SESSION['color_was_edit'] = 1;
            $_SESSION['profile_color'] = 'blue';
            unset($_POST);
            header('Location: account_settings.php');
      }
      //Изменение на lightblue
      if (isset($_POST['lightblue_select'])) {
            $getcolor = 'lightblue';
            $query = mysql_query("UPDATE gc_users SET profile_color = '$getcolor' WHERE login = '$login'");
            $_SESSION['color_was_edit'] = 1;
            $_SESSION['profile_color'] = 'lightblue';
            unset($_POST);
            header('Location: account_settings.php');
      }
      //Изменение на deepskyblue
      if (isset($_POST['deepskyblue_select'])) {
            $getcolor = 'deepskyblue';
            $query = mysql_query("UPDATE gc_users SET profile_color = '$getcolor' WHERE login = '$login'");
            $_SESSION['color_was_edit'] = 1;
            $_SESSION['profile_color'] = 'deepskyblue';
            unset($_POST);
            header('Location: account_settings.php');
      }
      //Изменение на green
      if (isset($_POST['green_select'])) {
            $getcolor = 'green';
            $query = mysql_query("UPDATE gc_users SET profile_color = '$getcolor' WHERE login = '$login'");
            $_SESSION['color_was_edit'] = 1;
            $_SESSION['profile_color'] = 'green';
            unset($_POST);
            header('Location: account_settings.php');
      }
      //Изменение на darkgreen
      if (isset($_POST['darkgreen_select'])) {
            $getcolor = 'darkgreen';
            $query = mysql_query("UPDATE gc_users SET profile_color = '$getcolor' WHERE login = '$login'");
            $_SESSION['color_was_edit'] = 1;
            $_SESSION['profile_color'] = 'darkgreen';
            unset($_POST);
            header('Location: account_settings.php');
      }
      //Изменение на yellow
      if (isset($_POST['yellow_select'])) {
            $getcolor = 'yellow';
            $query = mysql_query("UPDATE gc_users SET profile_color = '$getcolor' WHERE login = '$login'");
            $_SESSION['color_was_edit'] = 1;
            $_SESSION['profile_color'] = 'yellow';
            unset($_POST);
            header('Location: account_settings.php');
      }
      //Изменение на orange
      if (isset($_POST['orange_select'])) {
            $getcolor = 'orange';
            $query = mysql_query("UPDATE gc_users SET profile_color = '$getcolor' WHERE login = '$login'");
            $_SESSION['color_was_edit'] = 1;
            $_SESSION['profile_color'] = 'orange';
            unset($_POST);
            header('Location: account_settings.php');
      }
      //Изменение на red
      if (isset($_POST['red_select'])) {
            $getcolor = 'red';
            $query = mysql_query("UPDATE gc_users SET profile_color = '$getcolor' WHERE login = '$login'");
            $_SESSION['color_was_edit'] = 1;
            $_SESSION['profile_color'] = 'red';
            unset($_POST);
            header('Location: account_settings.php');
      }
      //Изменение на chocolate
      if (isset($_POST['chocolate_select'])) {
            $getcolor = 'chocolate';
            $query = mysql_query("UPDATE gc_users SET profile_color = '$getcolor' WHERE login = '$login'");
            $_SESSION['color_was_edit'] = 1;
            $_SESSION['profile_color'] = 'chocolate';
            unset($_POST);
            header('Location: account_settings.php');
      }
      //Изменение на hotpink
      if (isset($_POST['hotpink_select'])) {
            $getcolor = 'hotpink';
            $query = mysql_query("UPDATE gc_users SET profile_color = '$getcolor' WHERE login = '$login'");
            $_SESSION['color_was_edit'] = 1;
            $_SESSION['profile_color'] = 'hotpink';
            unset($_POST);
            header('Location: account_settings.php');
      }
      //Изменение на gray
      if (isset($_POST['gray_select'])) {
            $getcolor = 'gray';
            $query = mysql_query("UPDATE gc_users SET profile_color = '$getcolor' WHERE login = '$login'");
            $_SESSION['color_was_edit'] = 1;
            $_SESSION['profile_color'] = 'gray';
            unset($_POST);
            header('Location: account_settings.php');
      }
      //Изменение на purple
      if (isset($_POST['purple_select'])) {
            $getcolor = 'purple';
            $query = mysql_query("UPDATE gc_users SET profile_color = '$getcolor' WHERE login = '$login'");
            $_SESSION['color_was_edit'] = 1;
            $_SESSION['profile_color'] = 'purple';
            unset($_POST);
            header('Location: account_settings.php');
      }
      //Изменение на white
      if (isset($_POST['white_select'])) {
            $getcolor = 'white';
            $query = mysql_query("UPDATE gc_users SET profile_color = '$getcolor' WHERE login = '$login'");
            $_SESSION['color_was_edit'] = 1;
            $_SESSION['profile_color'] = 'white';
            unset($_POST);
            header('Location: account_settings.php');
      }
//Изменение порядка вывода информации
if(isset($_POST['change_out_order'])) {
      $new_order = $_POST['new_order'];
      $query017 = mysql_query("UPDATE gc_users SET forum_data_order='$new_order' WHERE id='$id'");
      gen_success("Настройки изменены");
      unset($_POST);
}
//Изменение критерии вывода тем
if(isset($_POST['change_topics_out'])) {
      $new_out = $_POST['new_out'];
      $query019 = mysql_query("UPDATE gc_users SET forum_my_topics='$new_out' WHERE id='$id'");
      gen_success("Настройки изменены");
      unset($_POST);
}