<button class="log-modal__close">
    <img src="../../img/close-modal.svg" alt="close">
</button>

<div class="log-modal__user">
    <img src="../../img/person-modal.svg" alt="img">
</div>

<h5 class="log-modal__title">Восстановление пароля</h5>

<form class="log-modal__form">
    <div class="log-modal__input tel">
        <input type="tel" placeholder="Введите телефон">
    </div>
    <div class="log-modal__input pass">
        <input type="password" placeholder="Новый пароль (мин. 6 символов)">
    </div>
    <div class="log-modal__input last pass">
        <input type="password" placeholder="Подтвердите пароль">
    </div>
    <p id="logDenied" class="mb">Вы ввели неверный пароль.</p>
    <div class="log-modal__btns">
        <button class="log-modal__btn inactive" type="submit">Отменить</button>
        <button class="log-modal__btn active" type="submit">Обновить пароль</button>
    </div>
</form>