<?php
  if (isset($_POST['enter']) || isset($_POST['enter_'])) {
    $a_login = $_POST['a_login'];
    $a_password = md5($_POST['a_password']);
    $query = mysql_query("SELECT * FROM gc_users WHERE login = '$a_login'");
    $user_data = mysql_fetch_array($query);
    if($user_data['password'] == $a_password) {
      if($user_data['blocked'] == 0) {
        $_SESSION['login'] = $a_login;
        $_SESSION['password'] = $user_data['password'];
        $_SESSION['lastlogin'] = $user_data['lastlogin'];
        $_SESSION['email'] = $user_data['email'];
        $_SESSION['ip'] = $user_data['ip'];
        $_SESSION['id'] = $user_data['id'];
        $_SESSION['profile_color'] = $user_data['profile_color'];
        $query229 = mysql_query("SELECT * FROM permissions_inheritance WHERE child = '$ulogin'");
        $query230 = mysql_query("SELECT * FROM gc_user_eco WHERE player_name='$ulogin'");
        $_SESSION['coins'] = mysql_fetch_object($query230)->money;
        if(mysql_num_rows($query229) == 0) {
            $_SESSION['status'] == "Игрок";
        } else {
            $obj229 = mysql_fetch_object($query229);
            switch($obj229->parent) {
                case "deluxe":
                $_SESSION['status'] = "Deluxe";
                break;
                case "gold":
                $_SESSION['status'] = "Gold";
                break;
                case "lord":
                $_SESSION['status'] = "Lord";
                break;
                case "ultra":
                $_SESSION['status'] = "Ultra";
                break;
                case "Allah":
                $_SESSION['status'] = "YouTuber";
                break;
                case "ag":
                $_SESSION['status'] = "Anti-Grief";
                break;
                case "spectator":
                $_SESSION['status'] = "Смотрящий";
                break;
                case "owner":
                $_SESSION['status'] = "Владелец";
                break;
                case "lowmoder":
                $_SESSION['status'] = "LowModer";
                break;
                case "moder":
                $_SESSION['status'] = "Moder";
                break;
            }
        }
        $id = $_SESSION['id'];
        if(!isset($_POST['enter_'])) {
            unset($_POST);
            header("Location: user.php?id=$id");
        } else {
            unset($_POST);
            header("Location: $cPage");
        }
      } else {
        gen_error("Игрок заблокирован. Обратитесь к администратору.");
      }
    } else {
    	gen_error("Неправильный логин или пароль.");
      unset($_POST);
    }
  }