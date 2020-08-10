<div class="row header">
    <div class="col-md-4">
        <img src="/img/logo.png" style="max-width: 100%; height: auto;">
    </div>
    <div class="col-md-4">
        <p>
Обработка заявок с 9-00 до 17-00 <br> <i style="color: red;" class="fas fa-phone-square-alt fa-3x"></i> <b style="color: blue;"><a href="tel:+78002016038" style="font-size: 20pt;">8 (800) 201-60-38</a></b> </p>
    </div>
    <div class="col-md-4">
        <p>
        <i class="far fa-check-circle"></i> Наличный расчет <br>
        <i class="far fa-check-circle"></i> Безналичный расчет  <br><br>
        <button type="button" class="pulse btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
          Заказать звонок
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Мы обязательно Вам перезвоним!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
              <form action="/admin/libs/function.php" method="post">
                <fieldset class="form-group">
                  <input type="text" class="form-control" name="firstName" placeholder="Ваше имя?" required>
                </fieldset>
                <fieldset class="form-group">
                  <input type="tel" class="form-control" name="telephone" placeholder="+7 (000) 000-00-00" required>
                </fieldset>
            </div>
            <div class="modal-footer">
              <button type="submit" name="zvonok" class="btn btn-primary">Отправить</button>
            </form>
            </div>
          </div>
          </div>
        </div>
        </p>
    </div>
</div>
