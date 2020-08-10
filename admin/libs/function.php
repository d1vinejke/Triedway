<?php
	require '../db.php';
	header('Content-Type: text/html; charset=utf-8');
	
		
	if(isset($_POST['addnews'])){
    $addnews = R::dispense('news');
    $addnews->title = $_POST['title'];
    $addnews->date = $_POST['date'];
    $addnews->text = nl2br($_POST['text']);
    R::store($addnews);
    echo '<meta http-equiv="refresh" content="0;URL=/admin/addnews.php" />';
	}

	if(isset($_POST['delete'])){
		$id = $_POST['selector'];
    $DeleteNew = R::load('news', $id);
    R::trash($DeleteNew);
    echo '<meta http-equiv="refresh" content="0;URL=/admin/addnews.php" />';
	}

	if(isset($_POST['trash'])){
		$newz = R::wipe('news');
    echo '<meta http-equiv="refresh" content="0;URL=/admin/addnews.php" />';
	}

	if(isset($_POST['change'])){
		$pochta = R::load('settings', 1);
		$pochta->email = $_POST['changeEmail'];
		R::store($pochta);
		echo '<meta http-equiv="refresh" content="0;URL=/admin/settings.php" />';
	}

	if(isset($_POST['change2'])){
		$title = R::load('settings', 1);
		$title->title = $_POST['changeTitle'];
		R::store($title);
		echo '<meta http-equiv="refresh" content="0;URL=/admin/settings.php" />';
	}

	if(isset($_POST['zvonok'])){
		$firstName = $_POST['firstName'];
		$telephone = $_POST['telephone'];
		$zvonok = R::dispense('notifications');
		$num = R::count('notifications');
		$num += 1;
		$zvonok->title = "Заявка №$num";
		$zvonok->first_name = $_POST['firstName'];
		$zvonok->telephone = $_POST['telephone'];
		$zvonok->date = date("y-m-d"); 
		R::store($zvonok);
		$day = date("d-m-y");
		$email = R::load('settings', 1)->email;
		if (mail("$email", "Заявка №$num", "Имя: $firstName \nТелефон абонента: $telephone \nДата: $day", "From: triedway@triedway.ru \r\n")) {
			echo 'Письмо успешно отправлено!';
		}
		else{ echo 'Что-то пошло не так :('; }
		echo '<meta http-equiv="refresh" content="1;URL=/" />';
	}
	
	if(isset($_POST['ras4et'])){
		$yourname = $_POST['yourname'];
		$yournum = $_POST['yournum'];
		$ras4et = R::dispense('notifications');
		$nums = R::count('notifications');
		$nums += 1;
		$ras4et->title = "Заявка №$num";
		$ras4et->first_name = $_POST['firstName'];
		$ras4et->telephone = $_POST['telephone'];
		$ras4et->date = date("y-m-d"); 
		R::store($ras4et);
		$day = date("d-m-y");
		$email = R::load('settings', 1)->email;
		if (mail("$email", "Заявка №$nums", "Имя: $yourname \nТелефон абонента: $yournum \nДата: $day", "From: triedway@triedway.ru \r\n")) {
			echo 'Письмо успешно отправлено!';
		}
		else{ echo 'Что-то пошло не так :('; }
		echo '<meta http-equiv="refresh" content="1;URL=/" />';
	}

	
?>
