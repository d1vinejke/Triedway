<?php
	require 'admin/db.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Множество тарифов для перевозок чего угодно! Грузоперевозки по всей России. От 16 руб/км. Бюджетно, качественно и быстро! Груз застрахован. Поможем переехать, перевезти и многое другое.">
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
			<div class="tilt" style="padding-left: 10%;padding-right: 10%; text-align: center;">
				<div class="jumbNav" style="height: auto; min-height: 150px; max-height: inherit; padding: 1%; margin-left:auto; margin-right: auto;">
					<div class="card text-center">
						<div class="card-header">
							<ul class="nav nav-tabs card-header-tabs">
							  <li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#panel1">1.5 т</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#panel2">3 т</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#panel3">5 т</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#panel4">10 т</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#panel5">20 т</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#panel6">Сборные грузы</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#panel7">Негабаритные грузы, спец. разрешения, сопровождение</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#panel8">Способы оплаты</a>
							  </li>
							</ul>
						</div>
							<div class="tab-content table-responsive">
							  <div id="panel1" class="tab-pane fade active show">
								<table class="table table-bordered">
								  <thead>
									<tr>
									  <th scope="col">Тип машины</th>
									  <th scope="col">Характеристики: длина - ширина - высота</th>
									  <th scope="col">Тариф</th>
									  <th scope="col">Заказать</th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									  <th scope="row">
											<b>Газель 3 метра</b><br>
											<img class="costs" src="img/5.jpg"><br>Тент</img><br>
											<img class="costs" src="img/6.jpg"><br>Бортовая</img><br>
											<img class="costs" src="img/7.jpg"><br>Фургон</img><br>
									  </th>
									  <td class="tdha">
										<p>
											Длина - 3 м<br>
											Ширина - 2 м<br>
											Высота - 2.2 м<br>
											Объем - 13 м3<br>
											Грузоподъемность - 1500 кг<br>
										</p>
									  </td>
									  <td class="tdha">16 руб/км</td>
									  <td class="tdha"><button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Заказать</button></td>
									</tr>
									<tr>
									  <th scope="row">
											<b>Газель 4 метра</b><br>
											<img class="costs" src="img/5.jpg"><br>Тент</img><br>
											<img class="costs" src="img/6.jpg"><br>Бортовая</img><br>
											<img class="costs" src="img/7.jpg"><br>Фургон</img><br>
									  </th>
									  <td class="tdha">
										<p>
											Длина - 4 м<br>
											Ширина - 2 м<br>
											Высота - 2.2 м<br>
											Объем - 17 м3<br>
											Грузоподъемность - 1500 кг<br>
										</p>
									  </td>
									  <td class="tdha">17 руб/км</td>
									  <td class="tdha"><button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Заказать</button></td>
									</tr>
								  </tbody>
								</table>
							  </div>
							  <div id="panel2" class="tab-pane fade">
								<table class="table table-bordered">
								  <thead>
									<tr>
									  <th scope="col">Тип машины</th>
									  <th scope="col">Характеристики: длина - ширина - высота</th>
									  <th scope="col">Тариф</th>
									  <th scope="col">Заказать</th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									  <th scope="row">
											<b>Грузовик 3 тонны 4 метра</b><br>
											<img class="costs" src="img/1.png"><br>Тент</img><br>
											<img class="costs" src="img/2.png"><br>Бортовая</img><br>
											<img class="costs" src="img/3.png"><br>Фургон</img><br>
									  </th>
									  <td class="tdha">
										<p>
											Длина - 4 м<br>
											Ширина - 2 м<br>
											Высота - 2.2 м<br>
											Объем - 17 м3<br>
											Грузоподъемность - 3000 кг<br>
										</p>
									  </td>
									  <td class="tdha">20 руб/км</td>
									  <td class="tdha"><button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Заказать</button></td>
									</tr>
									<tr>
									  <th scope="row">
											<b>Грузовик 3 тонны 5 метров</b><br>
											<img class="costs" src="img/4.png"><br>Тент</img><br>
											<img class="costs" src="img/5.png"><br>Бортовая</img><br>
											<img class="costs" src="img/6.png"><br>Фургон</img><br>
									  </th>
									  <td class="tdha">
										<p>
											Длина - 5 м<br>
											Ширина - 2 м<br>
											Высота - 2.1 м<br>
											Объем - 21 м3<br>
											Грузоподъемность - 3000 кг<br>
										</p>
									  </td>
									  <td class="tdha">22 руб/км</td>
									  <td class="tdha"><button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Заказать</button></td>
									</tr>
								  </tbody>
								</table>
							  </div>
							  <div id="panel3" class="tab-pane fade">
								<table class="table table-bordered">
								  <thead>
									<tr>
									  <th scope="col">Тип машины</th>
									  <th scope="col">Характеристики: длина - ширина - высота</th>
									  <th scope="col">Тариф</th>
									  <th scope="col">Заказать</th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									  <th scope="row">
											<b>Грузовик 5 тонн 5 метров</b><br>
											<img class="costs" src="img/7.png"><br>Тент</img><br>
											<img class="costs" src="img/8.png"><br>Бортовая</img><br>
											<img class="costs" src="img/9.png"><br>Фургон</img><br>
									  </th>
									  <td class="tdha">
										<p>
											Длина - 5 м<br>
											Ширина - 2 м<br>
											Высота - 2.1 м<br>
											Объем - 21 м3<br>
											Грузоподъемность - 5000 кг<br>
										</p>
									  </td>
									  <td class="tdha">25 руб/км</td>
									  <td class="tdha"><button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Заказать</button></td>
									</tr>
									<tr>
									  <th scope="row">
											<b>Грузовик 5 тонн 6 метров</b><br>
											<img class="costs" src="img/10.png"><br>Тент</img><br>
											<img class="costs" src="img/11.png"><br>Бортовая</img><br>
											<img class="costs" src="img/12.png"><br>Фургон</img><br>
									  </th>
									  <td class="tdha">
										<p>
											Длина - 6 м<br>
											Ширина - 2.4 м<br>
											Высота - 2.2 м<br>
											Объем - 34 м3<br>
											Грузоподъемность - 5000 кг<br>
										</p>
									  </td>
									  <td class="tdha">27 руб/км</td>
									  <td class="tdha"><button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Заказать</button></td>
									</tr>
									<tr>
									  <th scope="row">
											<b>Грузовик 5 тонн 7 метров</b><br>
											<img class="costs" src="img/13.png"><br>Тент</img><br>
											<img class="costs" src="img/14.png"><br>Бортовая</img><br>
											<img class="costs" src="img/15.png"><br>Фургон</img><br>
									  </th>
									  <td class="tdha">
										<p>
											Длина - 7 м<br>
											Ширина - 2.4 м<br>
											Высота - 2.4 м<br>
											Объем - 40 м3<br>
											Грузоподъемность - 5000 кг<br>
										</p>
									  </td>
									  <td class="tdha">30 руб/км</td>
									  <td class="tdha"><button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Заказать</button></td>
									</tr>
								  </tbody>
								</table>
							  </div>
							  <div id="panel4" class="tab-pane fade">
								<table class="table table-bordered">
								  <thead>
									<tr>
									  <th scope="col">Тип машины</th>
									  <th scope="col">Характеристики: длина - ширина - высота</th>
									  <th scope="col">Тариф</th>
									  <th scope="col">Заказать</th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									  <th scope="row">
											<b>Грузовик 10 тонн 6 метров</b><br>
											<img class="costs" src="img/17.png"><br>Тент</img><br>
											<img class="costs" src="img/18.png"><br>Бортовая</img><br>
											<img class="costs" src="img/19.png"><br>Фургон</img><br>
									  </th>
									  <td class="tdha">
										<p>
											Длина - 6 м<br>
											Ширина - 2.4 м<br>
											Высота - 2.2 м<br>
											Объем - 34 м3<br>
											Грузоподъемность - 10000 кг<br>
										</p>
									  </td>
									  <td class="tdha">37 руб/км</td>
									  <td class="tdha"><button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Заказать</button></td>
									</tr>
									<tr>
									  <th scope="row">
											<b>Грузовик 10 тонн 7 метров</b><br>
											<img class="costs" src="img/20.png"><br>Тент</img><br>
											<img class="costs" src="img/21.png"><br>Бортовая</img><br>
											<img class="costs" src="img/22.png"><br>Фургон</img><br>
									  </th>
									  <td class="tdha">
										<p>
											Длина - 7 м<br>
											Ширина - 2.4 м<br>
											Высота - 2.4 м<br>
											Объем - 40 м3<br>
											Грузоподъемность - 10000 кг<br>
										</p>
									  </td>
									  <td class="tdha">40 руб/км</td>
									  <td class="tdha"><button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Заказать</button></td>
									</tr>
								  </tbody>
								</table>
							  </div>
							  <div id="panel5" class="tab-pane fade">
								<table class="table table-bordered">
								  <thead>
									<tr>
									  <th scope="col">Тип машины</th>
									  <th scope="col">Характеристики: длина - ширина - высота</th>
									  <th scope="col">Тариф</th>
									  <th scope="col">Заказать</th>
									</tr>
								  </thead>
								  <tbody>
									<tr>
									  <th scope="row">
											<b>Грузовик 20 тонн 13.6 метров</b><br>
											<img class="costs" src="img/23.png"><br>Тент</img><br>
											<img class="costs" src="img/24.png"><br>Бортовая</img><br>
											<img class="costs" src="img/25.png"><br>Фургон</img><br>
									  </th>
									  <td class="tdha">
										<p>
											Длина - 13.6 м<br>
											Ширина - 2.45 м<br>
											Высота - 2.8 м<br>
											Объем - 92 м3<br>
											Грузоподъемность - 20000 кг<br>
										</p>
									  </td>
									  <td class="tdha">40-70 руб/км в зависимости от направления</td>
									  <td class="tdha"><button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Заказать</button></td>
									</tr>
								  </tbody>
								</table>
							  </div>
							  <div id="panel6" class="tab-pane fade">
								<h3>Сборные грузы</h3>
								<div class="row">
									<div class="col-md">
										<p>
											С целью существенной экономии на доставке Вашего груза, Мы можем перевезти его
											совместно с другими грузами в том же направлении от двери до двери.<br><b>
											Сообщите менеджеру количество, объем и вес вашего груза и он рассчитает самую
											оптимальную стоимость доставки.</b><br>
											* объем груза рассчитывается по формуле: ДЛИНА x ШИРИНА x ВЫСОТА <br>
											<button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Заказать</button>
										</p>
									</div>
									<div class="col-md" style="margin-left: auto; margin-right: auto;">
										<img class="costs caller" src="img/car.gif"></img>
									</div>
									<div class="col-md">
										
									</div>
								</div>
							  </div>
							  <div id="panel7" class="tab-pane fade">
								<h3>Негабаритные грузы, спец. разрешения, сопровождение</h3>
								<p>
									С целью существенной экономии Вашего времени на оформление негабаритного груза груза, Мы
									можем перевезти его самостоятельно оформив сопровождение, паромную переправу, доставку
									от двери до двери.<br>
									Сообщите менеджеру количество, точные размеры (ДЛИНА*ШИРИНА*ВЫСОТА ) и вес вашего
									груза и он рассчитает самую оптимальную стоимость доставки, количество транспортных средств,
									в том числе стоимость, если возникает потребность в оформлении, паромной переправы,
									сопровождение и др.<br>
									<button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Заказать</button>
								</p>
							  </div>
							  <div id="panel8" class="tab-pane fade">
								<h3>Способы оплаты</h3>
								<p>
									<ul>
										<li>
											Оплата наличными водителю (При отправке / получении)
										</li>
										<li>
											Оплата квитанции через банк (для физических лиц)
										</li>
										<li>
											Оплата безналичным расчетом (для юридических лиц)
										</li>
									</ul>
									<b>Все цены указаны без учета НДС</b>
								</p>
							  </div>
							</div>
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
