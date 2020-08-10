<?php 
	$count = R::count('notifications', ' WHERE date = curdate() ');

?>

<div class="wide">
                    <nav class="jumb navbar navbar-expand-lg navbar-light bg-light">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                          <a class="nav-item nav-link active" href="/"><i class="fas fa-home"></i> Главная <span class="sr-only">(current)</span></a>
                          <a class="nav-item nav-link" href="addnews.php"><i class="fas fa-rss"></i> Добавить новость</a>
                          <a class="nav-item nav-link" href="#"><i class="fas fa-ruble-sign"></i> Изменить цены</a>
                          <a class="nav-item nav-link" href="stats.php"><i class="fas fa-chart-pie"></i> Статистика</a>
                          <a class="nav-item nav-link" href="settings.php"><i class="fas fa-wrench"></i> Настройки</a>
						  <a class="nav-item nav-link" href="#"><i class="fas fa-envelope-open-text"></i> Заявки <span class="badge badge-secondary"><?php echo $count; ?></span></a>
                          <a class="nav-item nav-link anim" href="logout.php"><i class="fas fa-sign-out-alt"></i> Выйти</a>
                        </div>
                      </div>
                    </nav>
            </div>
