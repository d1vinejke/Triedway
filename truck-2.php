<?php
	require 'admin/db.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Переезд в другой город! Грузоперевозки по всей России. От 16 руб/км. Бюджетно, качественно и быстро! Груз застрахован. Поможем переехать, перевезти и многое другое.">
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
			<div class="container tilt" style="text-align: center;">
				<div class="jumbNav" style="height: auto; min-height: 150px; padding: 1%; margin-left:auto; margin-right: auto;">
                  <div class="services">
                    <h3>Переезд в другой город</h3>
                    Мы, занимаемся грузоперевозками и домашними переездами. Если вы планируете переезд<br>
                    по межгороду или внутри вашего города, мы с радостью вам поможем с: <br>
                    ✔ ПОГРУЗКОЙ <br>
                    ✔ УПАКОВКОЙ <br>
                    ✔ ТРАНСПОРТИРОВКОЙ <br>
                    Несем полную ответственность за доставку и сохранность товара. Вам не нужно отдельно<br>
                    искать людей для упаковки и погрузки, просто обратитесь к нам! Все вопросы вы можете<br>
                    задать по телефонам<br>
                    С целью существенной экономии на доставке Вашего груза, Мы можем перевезти его<br>
                    совместно с другими грузами в том же направлении от двери до двери.<br>
                    Сообщите менеджеру количество, объем и вес вашего груза и он рассчитает самую<br>
                    оптимальную стоимость доставки.<br>
                    * объем груза рассчитывается по формуле ДЛИНА*ШИРИНА*ВЫСОТА<br>
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
