    <div class="modal fade bs-example-modal-md" tabindex="-1" id="callback" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Оставьте вашу заявку и мы перезвоним Вам</h4>
                </div>
                <div class="modal-body">
                    <form class="forms" action="mail/callback.php" method="POST" name="form2" enctype="multipart/form-data">
                        <label>
                            <input type="text" name="name" required placeholder="Ваше имя">
                        </label>
                        <label>
                            <input type="text" name="tell" required placeholder="Контактный телефон">
                        </label>
                        <div class="button_submit">
                            <button type="submit" name="send">Заказать звонок</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>