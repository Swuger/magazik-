<div class="ordering__info">
    <form class="ordering__info-form">
        <label for="fullname">ФИО</label>
        <input class="ordering__info-input" type="text" name="fullname"
            placeholder="Введите Ваше полное имя">

        <label for="phone">Телефон</label>
        <input class="ordering__info-input" type="tel" name="phone" placeholder="+380">

        <label for="payment">Когда заберёте?</label>
        <div class="ordering__info-payment" onclick="event.stopPropagation()">
            <input class="ordering__info-input" type="text" name="payment" placeholder="Выберите"
                disabled>
            <img src="img/arrow-down.svg" alt="btn" id="payment-btn">
            <ul class="ordering__info-list">
                <li class="ordering__info-item"><span>15:00</span> - <span>16:00</span></li>
                <li class="ordering__info-item"><span>17:00</span> - <span>18:00</span></li>
                <li class="ordering__info-item"><span>19:00</span> - <span>20:00</span></li>
                <li class="ordering__info-item"><span>21:00</span> - <span>22:00</span></li>
                <li class="ordering__info-item"><span>23:00</span> - <span>00:00</span></li>
            </ul>
        </div>

        <button class="ordering__info-btn">Оформить заказ</button>
    </form>
</div>