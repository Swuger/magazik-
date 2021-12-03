<div class="booking-modal">
    <div class="booking-modal__inner">
        <button class="booking-modal__close">
            <img src="../../img/close-modal.svg" alt="close">
        </button>

        <h5 class="booking-modal__title">Бронирование стола</h5>

        <form class="booking-modal__form">
            <div class="booking-modal__input-grid">
                <div class="booking-modal__input name">
                    <input type="text" placeholder="Имя">
                </div>
                <div class="booking-modal__input">
                    <input type="tel" placeholder="Телефон">
                </div>
                <div class="booking-modal__input">
                    <input type="number" min="1" max="9" maxlength="1" placeholder="Количество человек">
                </div>
                <div class="booking-modal__input">
                    <input type="time" placeholder="Время: _ _ : _ _">
                </div>
                <div class="booking-modal__input">
                    <input type="date" placeholder="Дата:  дд.мм.гг">
                </div>
            </div>

            <button class="booking-modal__btn" type="submit">Забронировать</button>
        </form>
    </div>
</div>