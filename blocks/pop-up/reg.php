<div class="reg-modal">
    <div class="reg-modal__inner">
        <button class="reg-modal__close">
            <img src="../../img/close-modal.svg" alt="close">
        </button>

        <div class="reg-modal__user">
            <img src="../../img/person-modal.svg" alt="img">
        </div>

        <h5 class="reg-modal__title">Регистрация</h5>

        <form class="reg-modal__form" method="POST">
            <div class="reg-modal__input tel">
                <input type="tel" placeholder="Телефон" name="tel" pattern="(\+?\d[- .]*){7,13}">
            </div>
            <div class="reg-modal__input pass">
                <input type="password" placeholder="Пароль" name="pass">
            </div>
            <div class="reg-modal__input last pass">
                <input type="password" placeholder="Подтвердите пароль" name="repeat_pass">
            </div>

            <p id="regDenied"></p>

            <div class="reg-modal__options">
                <div class="reg-modal__row">
                    <input type="checkbox" name="mailing">
                    <label for="mailing">Хочу получать выгодные предложения от магазина</label>
                </div>
                <div class="reg-modal__row">
                    <input type="checkbox" name="politics">
                    <label for="politics">Принимаю условия Пользовательского соглашения</label>
                </div>
            </div>
            <button class="reg-modal__btn" type="submit">Зарегистрироваться</button>
        </form>
        <?php #include '/OpenServer/domains/shop/blocks/react/modal/reg-tel.php';
        ?>
    </div>
</div>