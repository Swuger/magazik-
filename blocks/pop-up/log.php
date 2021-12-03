<div class="log-modal">
    <div class="log-modal__inner">
        <button class="log-modal__close">
            <img src="../../img/close-modal.svg" alt="close">
        </button>

        <div class="log-modal__user">
            <img src="../../img/person-modal.svg" alt="img">
        </div>

        <h5 class="log-modal__title">Войти в личный кабинет</h5>

        <form class="log-modal__form" method="POST" action="/php-scripts/log.php">
            <div class="log-modal__input tel">
                <input type="tel" placeholder="Телефон" name="log-tel">
            </div>
            <div class="log-modal__input last pass">
                <input type="password" placeholder="Пароль" name="log-pass">
            </div>

            <!-- <p id="logDenied">Неправильный логин или пароль.</p> -->

            <a href="#" class="log-modal__forgot">Забыли пароль?</a>
            <button class="log-modal__btn" type="submit">Войти</button>
        </form>
        <p class="log-modal__unreg">
            Впервые у нас? <a href="#">Зарегистрироваться</a>
        </p>
        <?php #include '/OpenServer/domains/shop/blocks/react/modal/forgot-pass.php';
        ?>
    </div>
</div>