<?php
	require 'admin/db.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Перевозка сборных грузов по всей РФ! Грузоперевозки по всей России. От 16 руб/км. Бюджетно, качественно и быстро! Груз застрахован. Поможем переехать, перевезти и многое другое.">
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
                    <h3>Перевозка сборных грузов по России</h3>
                    Перевозка сборных грузов сегодня является одним из самых привлекательных и экономически выгодных<br>
                    способов транспортировки отправлений, если вам необходимо отправить небольшую партию груза на удаленное расстояние. Перевозка груза незначительного объема отдельной машиной влечет за собой рост затрат на транспортные расходы.<br>
                    <br>
                    Наша компания предлагает своим клиентам такую услугу, как перевозка сборных грузов, воспользовавшись которой, вы сможете существенно сократить расходы на транспортировку товара.<br>
                    <br>
                    В формате услуги на сборные перевозки предусмотрена консолидация грузов от различных отправителей и доставка получателям. При этом доставка грузов осуществляется не только в крупные города но и во все регионы России, Казахстана и Белорусии.<br>
                    <br>
                    Сборные грузы по России доставляются автомобилями различной тоннажности, что позволяет выбрать оптимальную транспортную модель, которая будет соответствовать общему объему груза, а также его особенностям.<br>
                    <br>
                    Специалисты отдела логистики нашей компании разрабатывают оптимальный маршрут для сбора всего груза, что позволит минимизировать затраты на его консолидацию.<br>
                    Преимущества Нашей компании - отсутствие складов и терминалов, а значит и нет затрат на их аренду, что позволяет сократить стоимость и сроки доставки. А доставка при этом осуществляется от двери до двери.<br>
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
