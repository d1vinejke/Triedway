<?php
	require 'db.php';
?>

<?php if ( isset ($_SESSION['logged_user']) ) : ?>
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
					include '../assets/navadmin.php';
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
					<div class="row">
						<div class="col-md"></div>
						<div class="col-md">
							
						</div>
						<div class="col-md"></div>
					</div>
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

<?php else : ?>
Вы не авторизованы<br/>
<a href="/admin/login.php">Авторизация</a>
<a href="/admin/signup.php">Регистрация</a>
<?php endif; ?>
