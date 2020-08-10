<div class="wide">
                    <nav class="jumb navbar navbar-expand-lg navbar-light bg-light">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                          <a class="nav-item nav-link active" href="/"><i class="fas fa-home"></i> Главная <span class="sr-only">(current)</span></a>
                          <a class="nav-item nav-link" href="services.php"><i class="fas fa-toolbox"></i> Услуги</a>
                          <a class="nav-item nav-link" href="costs.php"><i class="fas fa-ruble-sign"></i> Цены</a>
                          <a class="nav-item nav-link anim" href="/messege.php"><i class="fas fa-sticky-note"></i> Оставить заявку</a>
                          <a class="nav-item nav-link" href="/comments.php"><i class="far fa-comments"></i> Отзывы</a>
                          <a class="nav-item nav-link" href="/contact.php"><i class="fas fa-id-card"></i> Контакты</a>

                          <?php
                            if (isset($_SESSION['logged_user'])) {
                              echo '<a class="nav-item nav-link redanim" href="/admin/"><i class="fas fa-user-shield"></i> Администрационная панель</a>';
                            }
                            else{ echo '<a class="nav-item nav-link redanim" href="/admin/login.php"><i class="fas fa-user-shield"></i> Вход</a>'; }
                           ?>
                        </div>
                      </div>
                    </nav>
            </div>
