<?php
	require 'admin/db.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Оставьте заявку и мы вам перезвоним в течении 15 минут! Грузоперевозки по всей России. От 16 руб/км. Бюджетно, качественно и быстро! Поможем переехать, перевезти и многое другое.">
        <meta name="author" content="">
				<?php
          $email = R::load('settings', 1);
          echo '<title>' . $email->title . '</title>';
         ?>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/all.css" rel="stylesheet">
        <link href="bootstrap/css/footer-with-button-logo.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">
		<?php include 'assets/scripts.php'; ?>
    </head>
    <body style="overflow-x:hidden;">
        <div class="container-fluid">
					<?php
					include 'assets/header.php';
					include "assets/navmain.php";
					?>
				</div>
			<br>
			<div class="back">
			<?php 
					include 'assets/caller.php';
			?>
			<br>
			<div class="container tilt">
				<div class="jumbNav" style="height: auto; min-height: 150px; padding: 1%; margin-left:auto; margin-right: auto;">
                  <div style="padding: 5%;" class="services">
                    <h3>Онлайн заявка на расчет стоимости</h3>
                    <p>
                        * Мы обязательно Вам перезвоним после отправления заявки!
                    </p>
                    <br>
                    <form style="max-width: 500px;" action="/admin/libs/function.php" method="post">
                        <fieldset class="form-group">
                        <input type="text" class="form-control" name="firstName" placeholder="Ваше имя?" required>
                        </fieldset>
                        <fieldset class="form-group">
                        <input type="tel" class="form-control" name="telephone" placeholder="+7 (000) 000-00-00" required>
                        </fieldset>
                        <button type="submit" name="zvonok" class="btn btn-primary">Отправить</button>
                    </form>

                    </div>
				</div>
			</div>
			<br>
		</div>
      <?php
      include 'assets/partners.php';
      include 'assets/footer.php';
      ?>

        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
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
	<?php include 'assets/preloader.php'; ?>
    </body>
</html>
