<?php
include_once('./includes/top.inc.php');
	if(isset($_GET['id'])) {
		echo '<center><div class="store">Покупка услуги</div></center>';
		//Извлечение ифнормации
		$d_id = $_GET['id'];
		$query027 = mysql_query("SELECT * FROM gc_donate WHERE id = '$d_id'");
		if(mysql_num_rows($query027) > 0) {
			$d_data = mysql_fetch_object($query027);
			$d_name = $d_data->name;
			$d_type = $d_data->type;
			$d_cost = $d_data->cost;
			$d_sale = $d_data->sale;
			$d_color = $d_data->color;
			$d_idpriv = $d_data->id_priv;
			$d_amount = $d_data->amount;
			$d_desc = $d_data->desc;
			switch($d_type) {
				case 0:
					$d_type_text = "Привилегия";
				break;
				case 1:
					$d_type_text = "Игровая валюта";
				break;
				default:
					$d_type_text = "Неизвестно";
				break;
			}
			if(isset($_SESSION['id'])) {
			echo '<script>
			function goPay() {
				mcdApi.setNickname("'.$_SESSION['login'].'");
				mcdApi.buyPreviNative('.$d_idpriv.');
			}
			</script>';
			} else {
				echo '<script>
				function goPay() {
					mcdApi.setNickname(document.forms["nick"].elements["nickname"].value);
					mcdApi.buyPreviNative('.$d_idpriv.');
				}
				</script>';
			}
			echo '<br><b>Тип: </b> '.$d_type_text.'<br />';
			echo '<b>Наименование: </b> '.$d_name.'<br />';
			echo '<b>Цена: </b> '.$d_cost.' рублей без учета комиссий<br />';
			echo '<b>Описание: </b><br>'.$d_desc.'<br>';
			if(!isset($_SESSION['id'])) {
				echo '<form name="nick">
				<input type="text" class="field" placeholder="Введите ваш ник" id="nickname" required/><br />
				</form>';

			}
			echo '<input type="button" class="button" value="Перейти к оплате" onclick="goPay()"/><br>';
			echo '<p class="warning">(!) Если после оплаты в течение минуты вам не выдалась услуга, нажмите кнопку "В магазин" на чеке и вы получите код, который нужно будет ввести.<br>
			(!) Все средства, потраченные вами на платные услуги, уходят на развитие проекта.<br>
			(!) Если при нажатии на кнопку ничего не происходит, попробуйте <a href="http://glowcraft.mcdonate.ru">альтернативную</a> версию магазина</p>';
		} else {
			echo 'Данной услуги не существует';
		}
	}
include_once('./includes/bottom.inc.php');