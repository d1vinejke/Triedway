<?php
	require 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
				<?php
          $email = R::load('settings', 1);
          echo '<title>' . $email->title . '</title>';
         ?>
        <!-- Bootstrap core CSS -->
        <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/bootstrap/css/all.css" rel="stylesheet">
        <link href="/bootstrap/css/footer-with-button-logo.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="/style.css" rel="stylesheet">
    </head>
    <body style="overflow-x:hidden;">
        <div class="container-fluid">
					<?php
					include '../assets/header.php';
					include "../assets/navmain.php";
					?>
		</div>
			<br>
			<div class="back">
			<?php 
					include '../assets/callerAD.php';
			?>
			<br>
			<div class="tilt" style="padding-left: 10%;padding-right: 10%; text-align: center;">
				<div class="jumbNav" style="height: auto; min-height: 150px; max-height: inherit; padding: 2%;">
					<b><p>
						<form style="width: 200px; margin-left: auto; margin-right: auto;" action="/admin/login.php" method="POST">
							<h4>Авторизация</h4>
							<?php
								$data = $_POST;
								if ( isset($data['do_login']) )
								{
									$user = R::findOne('users', 'login = ?', array($data['login']));
									if ( $user )
									{
										//логин существует
										if ( password_verify($data['password'], $user->password) )
										{
											//если пароль совпадает, то нужно авторизовать пользователя
											$_SESSION['logged_user'] = $user;
											echo '<meta http-equiv="refresh" content="0;URL=/admin/" />';
										}else
										{
											$errors[] = 'Неверно введен пароль!';
										}

									}else
									{
										$errors[] = 'Пользователь с таким логином не найден!';
									}

									if ( ! empty($errors) )
									{
										//выводим ошибки авторизации
										echo '<div id="errors" style="color:red;">' .array_shift($errors). '</div><hr>';
									}

								}
							 ?>
							<strong>Логин</strong>
							<input class="form-control" type="text" name="login" value="<?php echo @$data['login']; ?>"><br/>

							<strong>Пароль</strong>
							<input type="password"  class="form-control" name="password" value="<?php echo @$data['password']; ?>"><br/>

							<button type="submit" class="btn btn-primary" name="do_login">Войти</button>
						</form>
					</p></b>
				</div>
			</div>
			<br>
			</div>
			<?php
			include '../assets/partners.php';
			include '../assets/footer.php';
			?>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/popper.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
		<script>
		$(document).ready(function(){
		$('.customer-logos').slick({
			slidesToShow: 6,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 1500,
			arrows: false,
			dots: false,
			pauseOnHover: false,
			responsive: [{
				breakpoint: 768,
				settings: {
					slidesToShow: 4
				}
			}, {
				breakpoint: 520,
				settings: {
					slidesToShow: 3
				}
			}]
		});
	});
	</script>
	<?php include '../assets/preloader.php'; ?>
    </body>
</html>
