<?php
require_once('./includes/top.inc.php');
/*	if(isset($_GET['id'])) {
		$uid = $_GET['id'];
		$query011 = mysql_query("SELECT * FROM gc_users WHERE id='$uid'");
		if(mysql_num_rows($query011) == 1) {
			//Определение данных пользователя
			$udata = mysql_fetch_object($query011);
			$ulogin = $udata->login;
			$uemail = $udata->email;
			$uip = $udata->ip;
			$ucolor = $udata->profile_color;
			switch($udata->isLogged) {
				case 0:
				$uonline = "Нет";
				break;
				case 1:
				$uonline = "Да";
				break;
			}
			$query061 = mysql_query("SELECT * FROM permissions_inheritance WHERE child = '$ulogin'");
			$query062 = mysql_query("SELECT * FROM gc_user_eco WHERE player_name='$ulogin'");
			if(mysql_num_rows($query062) > 0) {
				$ucoins = mysql_fetch_object($query062)->money;
			} else {
				$ucoins = 0;
			}
			if(mysql_num_rows($query061) == 0) {
				$ustatus = "Игрок";
				$ustatusid = 0;
			} else {
				 $obj061 = mysql_fetch_object($query061);
            	switch($obj061->parent) {
	                case "deluxe":
	                $ustatus = "Deluxe";
	                $ustatusid = 1;
	                break;
	                case "gold":
	                $ustatus = "Gold";
	                $ustatusid = 2;
	                break;
	                case "lord":
	                $ustatus = "Lord";
	                $ustatusid = 3;
	                break;
	                case "ultra":
	                $ustatus = "Ultra";
	                $ustatusid = 4;
	                break;
	                case "Allah":
	                $ustatus = "YouTuber";
	                $ustatusid = 5;
	                break;
	                case "ag":
	                $ustatus = "Anti-Grief";
	                $ustatusid = 6;
	                break;
	                case "spectator":
	                $ustatus = "Смотрящий";
	                $ustatusid = 9;
	                break;
	                case "owner":
	                $ustatus = "Администратор";
	                $ustatusid = 10;
	                break;
	                case "lowmoder":
	                $ustatus = "LowModer";
	                $ustatusid = 7;
	                break;
	                case "moder":
	                $ustatus = "Moder";
	                $ustatusid = 8;
	                break;
            	}
			}
			echo '<br>';
			if (isset($_SESSION['style']) && $id == $uid) {
				echo '<div class="profile_panel">';
				echo '<table><tr>';
				echo '<td><div class="menu_padding"><a href="account_settings.php"><img src="graphics/images/user/user_settings.png" width="88" height="88" /></a></div></td>';
				echo '<td><div class="menu_padding"><a href="logout.php"><img src="graphics/images/user/user_exit.png" width="88" height="88" /></a></div></td>';
				echo '</tr></table>';
				echo '</div>';
				echo '<br>';
			}
			echo '<div class="';
			switch($ucolor) {
		  		case 'white':
	  			echo 'white';
	  			break;
	  			case 'blue':
	  			echo 'blue';
	  			break;
	  			case 'lightblue':
	  			echo 'lightblue';
	  			break;
	  			case 'deepskyblue':
	  			echo 'deepskyblue';
	  			break;
	  			case 'green':
	  			echo 'green';
	  			break;
	  			case 'darkgreen':
	  			echo 'darkgreen';
	  			break;
	  			case 'yellow':
	  			echo 'yellow';
	  			break;
	  			case 'orange':
	  			echo 'orange';
	  			break;
	  			case 'red':
	  			echo 'red';
	  			break;
	  			case 'chocolate':
	  			echo 'chocolate';
	  			break;
	  			case 'hotpink':
	  			echo 'hotpink';
	  			break;
	  			case 'purple':
	  			echo 'purple';
	  			break;
	  			case 'gray':
	  			echo 'gray';
	  			break;
	  			default:
	  			echo 'default';
	  			break;
			}
			echo '"">';
			echo '<font color="';
			switch($ucolor) {
		  		case 'white':
	  			echo '#009ACD';
	  			break;
	  			case 'blue':
	  			echo 'white';
	  			break;
	  			case 'lightblue':
	  			echo 'black';
	  			break;
	  			case 'deepskyblue':
	  			echo 'white';
	  			break;
	  			case 'green':
	  			echo 'white';
	  			break;
	  			case 'darkgreen':
	  			echo 'white';
	  			break;
	  			case 'yellow':
	  			echo 'chocolate';
	  			break;
	  			case 'orange':
	  			echo 'white';
	  			break;
	  			case 'red':
	  			echo 'white';
	  			break;
	  			case 'chocolate':
	  			echo 'white';
	  			break;
	  			case 'hotpink':
	  			echo 'white';
	  			break;
	  			case 'purple':
	  			echo 'white';
	  			break;
	  			case 'gray':
	  			echo 'white';
	  			break;
	  			default:
	  			echo '#1874CD';
	  			break;
			}
			echo '">';
			if(isset($_SESSION['id'])) {
				if ($ucolor == '' && $uid == $id ) {
					echo '<a class="notify" href="account_settings.php">Попробуйте возможность изменения фона профиля</a><br><br>';
				}
			}
			echo '<img src="https://www.minecraftindex.com/player-skin/'.$ulogin.'/front.png" width="50" height="110"></img>';
			echo '<div class="profilename">';
			echo $ulogin;
			echo '</div>';
			echo '<br><br>Порядковый номер (ID): ';
			echo $uid;
			echo '<br><br>Статус: ';
			echo $ustatus;
			if(isset($_SESSION['id'])) {
				if($id == $uid && $ustatusid < 6) {
					echo '<a class="button" href="shop.php">Повысить</a>';
				}
			}
			echo '<br><br>Коины: ';
			echo $ucoins.' ';
			if(isset($_SESSION['id'])) {
				if($uid == $id) {
					echo '<a class="button" href="shop.php">Пополнить</a>';
				}
			}
			echo '<br><br>GlowMoney: ';
			echo '0 ';
			if(isset($_SESSION['id'])) {
				if($uid == $id) {
					echo '<a class="button" href="shop.php">Пополнить</a>';
				}
			}
			echo '<br><br>Сейчас играет: ';
			echo $uonline;
			echo '</div>';
			echo '<br>';
		} else {
			echo 'Данного пользователя не существует.';
		}
	} else {
		echo 'undefined';
	}*/
	echo 'Система учетных записей временно недоступна';
require_once('./includes/bottom.inc.php');