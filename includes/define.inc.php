<?php
	if (isset($_SESSION['id'])) {
		$id = $_SESSION['id'];
	  	$defarr = mysql_fetch_array(mysql_query("SELECT * FROM gc_users WHERE id='$id'"));
      	$_SESSION['login'] = $defarr['login'];
      	$_SESSION['password'] = $defarr['password'];
      	$_SESSION['lastlogin'] = $defarr['lastlogin'];
      	$_SESSION['profile_color'] = $defarr['profile_color'];
      	$_SESSION['email'] = $defarr['email'];
        $_SESSION['ip'] = $defarr['ip'];
        $_SESSION['isLogged'] = $defarr['isLogged'];
        $temp229 = $_SESSION['login'];
        $query230 = mysql_query("SELECT * FROM permissions_inheritance WHERE child = '$temp229'");
        $query231 = mysql_query("SELECT * FROM gc_user_eco WHERE player_name='$temp229'");
        $_SESSION['coins'] = mysql_fetch_object($query231)->money;
        if(mysql_num_rows($query230) == 0) {
            $_SESSION['status'] == "Игрок";
        } else {
            $obj230 = mysql_fetch_object($query230);
            switch($obj230->parent) {
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
        $login = $_SESSION['login'];
        $password = $_SESSION['password'];
        $lastlogin = $_SESSION['lastlogin'];
        $email = $_SESSION['email'];
        $ip = $_SESSION['ip'];
        $profile_color = $_SESSION['profile_color'];
        $status = $_SESSION['status'];
        $coins = $_SESSION['coins'];
    }
}