<div class="ordering__info">
    <form class="ordering__info-form">
        <label for="district">Район доставки</label>
        <input class="ordering__info-input" type="text" name="district"
            placeholder="Введите адрес доставки">

        <label for="fullname">ФИО</label>
        <input class="ordering__info-input" type="text" name="fullname"
            placeholder="Введите Ваше полное имя">

        <label for="phone">Телефон</label>
        <input class="ordering__info-input" type="tel" name="phone" placeholder="+380">

        <label for="adress">Адрес доставки</label>
        <input class="ordering__info-input" type="text" name="adress"
            placeholder="Введите адрес доставки">

        <label for="payment">Способ оплаты</label>
        <div class="ordering__info-payment" onclick="event.stopPropagation()">
            <input class="ordering__info-input" type="text" name="payment" placeholder="Выберите"
                disabled>
            <img src="img/arrow-down.svg" alt="btn" id="payment-btn">
            <ul class="ordering__info-list">
                <li class="ordering__info-item">Наличные</li>
                <li class="ordering__info-item">Картой курьеру</li>
                <li class="ordering__info-item">Картой на сайте</li>
            </ul>
        </div>

        <label for="comment">Комментарий к заказу</label>
        <input class="ordering__info-input" type="text" name="comment"
            placeholder="Введите ваш комментарий...">

        <button class="ordering__info-btn">Оформить заказ</button>
    </form>
</div>