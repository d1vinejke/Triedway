<?php
	require 'admin/db.php';
	$parseNews = R::findCollection('news');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
			<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-33689281-2"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-33689281-2');
		</script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="keywords" content="грузоперевозки по россии, сайт грузоперевозок по россии, переезд в другой город, грузоперевозки по россии цены, грузоперевозка тонна россия, поиск грузоперевозка, сборный груз россия, квартирный переезд россия, грузоперевозка рф, квартирный переезд другой город, грузоперевозки по россии транспортные компании, ПЕРЕВОЗКА СБОРНЫХ ГРУЗОВ ПО РОССИИ, ПЕРЕВОЗКА ОТДЕЛЬНОЙ МАШИНОЙ, РЕЖИМНЫЕ ПЕРЕВОЗКИ, НЕГАБАРИТНЫЕ ПЕРЕВОЗКИ, грузоперевозки омск, трейдвей, triedway, triedway.ru">
        <meta name="description" content="Грузоперевозки по всей России. От 16 руб/км. Бюджетно, качественно и быстро! Оставляйте заявку. Груз застрахован. Поможем переехать, перевезти и многое другое.">
        <meta name="author" content="">
		<meta name="yandex-verification" content="3b2cba64710838aa" />
		<meta name="google-site-verification" content="8xA39pPXVV8MPebchMxMPnRNNfhm6F_ApIWasV0yVzE" />
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
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript" >
		   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		   ym(55125676, "init", {
				clickmap:true,
				trackLinks:true,
				accurateTrackBounce:true
		   });
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/55125676" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
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
				<br>
				<br>
				<br>
			<div class="tilt" style="padding-left: 10%;padding-right: 10%;">
				<div style="height: auto; min-height: 150px;  padding: 1%;">	
								<div style="padding: 2%; border-radius: 10px;" class="about section-block-grey">
                            <div class="section-heading center-holder">
                                <h3>Транспортная компания Tрейдвэй</h3>
                                <div class="section-heading-line"></div>
                            </div>
                            <div class="row mt-60">
                                <div class="col-md-4 col-sm-12 col-12">
                                    <div class="serv-section-2">
                                        <div class="serv-section-2-icon"> <i class="fas fa-gem"></i> </div>
                                        <div class="serv-section-desc">
                                            <h4>Опыт</h4>
                                            <h5>Наша компания предоставляет услуги уже более 9 лет</h5> </div>
                                        <div class="section-heading-line-left"></div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-12">
                                    <div class="serv-section-2 serv-section-2-act">
                                        <div class="serv-section-2-icon serv-section-2-icon-act"> <i class="fas fa-cogs"></i> </div>
                                        <div class="serv-section-desc">
                                            <h4>Сотрудники</h4>
                                            <h5>Квалифицированный состав работников</h5> </div>
                                        <div class="section-heading-line-left"></div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-12">
                                    <div class="serv-section-2">
                                        <div class="serv-section-2-icon"> <i class="fas fa-signature"></i> </div>
                                        <div class="serv-section-desc">
                                            <h4>Обширный выбор</h4>
                                            <h5>У нас большой выбор тарифов для перевозки грузов</h5> </div>
                                        <div class="section-heading-line-left"></div>

                                    </div>
                                </div>
                            </div>
                            <div class="row mt-60">
                                <div class="col-md-4 col-sm-12 col-12">
                                    <div class="serv-section-2">
                                        <div class="serv-section-2-icon"> <i class="fas fa-shield-alt"></i> </div>
                                        <div class="serv-section-desc">
                                            <h4>Безопасность</h4>
                                            <h5>Можем застраховать ваш груз на время перевозки</h5> </div>
                                        <div class="section-heading-line-left"></div>

                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-12">
                                    <div class="serv-section-2 serv-section-2-act">
                                        <div class="serv-section-2-icon serv-section-2-icon-act"> <i class="far fa-clock"></i> </div>
                                        <div class="serv-section-desc">
                                            <h4>Доступность</h4>
                                            <h5>Предоставляем услуги для наших клиентов ежедневно</h5> </div>
                                        <div class="section-heading-line-left"></div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-12">
                                    <div class="serv-section-2">
                                        <div class="serv-section-2-icon"> <i class="fas fa-signature"></i> </div>
                                        <div class="serv-section-desc">
                                            <h4> Поддержка </h4>
                                            <h5> Быстро ответим вам после оформления заявки! </h5> </div>
                                        <div class="section-heading-line-left"></div>

                                    </div>
                                </div>
                            </div>
                    </div>
					<br>
					<br>
					<br>
					<br>
					<div class="about card">
					<br>
						<h3 style="text-align: center;">О нас</h3>
						<hr>
						<div class="information">Хотите, чтобы во время грузоперевозок Ваш товар или иное имущество находилось в целостности
						и сохранности? Дорожите своим временем и деньгами? Хотите доверить перевозку Вашего груза
						профессионалам? Тогда звоните нам.<br>
						Мы работаем на рынке перевозок <b>более 8 лет</b>. География перевозок грузов нашей транспортной
						компанией — охватывает многие города и мелкие регионы России, ближнее зарубежье. Поэтому
						мы точно знаем, как быстро и правильно можно организовать перевозку вашего груза любого
						объёма, габаритов, веса. Мы предлагаем комплексный подход по перевозкам для того, чтобы
						максимально оградить Вас от хлопот организации доставки Вашего груза от двери до двери. В
						большинстве случаев от Вас потребуется отправить заявку на доставку груза, и оформить
						сопроводительные документы, все остальное мы берем на себя, согласование сроков,
						распределение по транспортному средству, переговоры с грузоотправителем/грузополучателем и
						другую необходимую работу по организации отправки Вашего груза.<br>
						Чтобы оформить заявку или получить помощь специалиста вам достаточно оставить заявку с
						Вашими данными, и мы Вам обязательно ответим в ближайшие сроки по стоимости и срокам
						доставки.<br>
						Мы предлагаем:<br>
						- Комплексный поход к организации грузоперевозке от двери до двери<br>
						- Выгодные цены, удобную форму оплаты<br>
						- Страхование грузов<br>
						- Отслеживание машины в пути<br>
						- Мульти модальные перевозки<br>
						При организации перевозок мы хотим, чтобы на Вас легло как можно меньше проблем. Наши
						сотрудники имеют большой опыт работы и достаточно квалификации, чтобы по возможности
						сократить или предотвратить все трудности.<br>
						<b>Наш девиз – сложных грузов не бывает!</b><br>
						Все наши сотрудники имеют большой опыт работы и постоянно проходят обучающие тренинги
						для повышения квалификации. Все это помогает нам быстро и качественно помогать Вам с
						перевозками любого типа. Наша компания рада предложить вам современный сервис и
						комплексные услуги.
						</div>
					</div>
					<div class="about card post">
						<h3 style="text-align: center;">Новости</h3>
						<hr>
						<?php
							while($parseNew = $parseNews->next()){
								if(mb_strlen($parseNew->text) > 300){
									$text = mb_substr($parseNew->text, 0, 300);
									$text = $text.'... <br><button type="button" class="btn-sm btn-primary float-right" data-toggle="modal" data-target="#news' . $parseNew->id . '">
														  Читать подробнее...
														</button><hr>';
									echo '<h5>' . $parseNew->title . '</h5>';
									echo '<p style="margin-left: 1%;">' . $text . '</p>';
									echo '<div class="modal fade bd-example-modal-xl" id="news' . $parseNew->id . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">';
									echo '<div class="modal-dialog modal-dialog-centered modal-xl" role="document">';
									echo '	<div class="modal-content">';
									echo '	  <div class="modal-header">';
									echo '		<h5 class="modal-title" id="exampleModalCenterTitle">' . $parseNew->title . '</h5>';
									echo '		<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
									echo '		  <span aria-hidden="true">&times;</span>';
									echo '		</button>';
									echo '	  </div>';
									echo '	  <div class="modal-body">';
									echo '		<p style="margin-left: 1%;">' . $parseNew->text . '</p>';
									echo '	  </div>';
									echo '	  <div class="modal-footer">';
									echo '		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>';
									echo '	  </div>';
									echo '	</div>';
									echo '  </div>';
									echo '</div>';
								}else{
									echo '<h5>' . $parseNew->title . '</h5>';
									echo '<p style="margin-left: 1%;">' . $parseNew->text . '</p>';
								}
							}
						?>
                    </div>
					<br>
				</div>
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			</div>
			<br>
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
			slidesToShow: 7,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 1500,
			arrows: false,
			dots: false,
			pauseOnHover: true,
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
