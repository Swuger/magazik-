<form class="cabinet__personal-form" method="POST" action="/php-scripts/cabinet-info.php" enctype="multipart/form-data">
    <div class="cabinet__content" method="POST">
        <div class="cabinet__personal-info">
            <h4 class="personal-info__title">Персональная информация</h4>
            <div class="personal-info__photo">
                <img class="personal-info__image" src="/img/author.png">
                </img>
                <div class="personal-info__input--file">
                    <label for="uploadPhoto">Загрузить фотографию</label>
                    <input type="file" name="uploadPhoto">
                </div>
            </div>
            <div class="personal-info__form">
                <div class="personal-info__row">
                    <div class="personal-info__column">
                        <label class="personal-info__label" for="firstProfileName">Ваше имя</label>
                        <input type="text" name="firstProfileName" placeholder="Имя">
                    </div>
                    <div class="personal-info__column">
                        <label class="personal-info__label" for="lastProfileName">Ваша фамилия</label>
                        <input type="text" name="lastProfileName" placeholder="Фамилия">
                    </div>
                </div>
                <label class="personal-info__label" for="patronymic">Ваше отчество</label>
                <input class="personal-info__input" id="patronymicInput" type="text" name="patronymic" placeholder="Отчество">
                <label class="personal-info__label" for="emailProfile">Адрес электронной почты</label>
                <input class="personal-info__input" id="emailInput" type="email" name="emailProfile" placeholder="E-mail">
            </div>
        </div>

        <div class="cabinet__contact-info">
            <h4 class="cabinet__contact-title">Контактная информация <br> <span>(подтверждения заказов)</span>
            </h4>
            <div class="cabinet__tel-form">
                <div class="cabinet__tel-column">
                    <label for="mainTel">Основной телефон</label>
                    <input type="tel" name="mainTel" placeholder="+7">
                </div>
                <div class="cabinet__tel-column">
                    <label for="subTel">Дополнительный</label>
                    <input type="tel" name="subTel" placeholder="+7">
                </div>
            </div>
            <h4 class="cabinet__contact-title">Изменение пароля</h4>
            <div class="cabinet__pass-form">
                <label for="oldPass">Ваш старый пароль</label>
                <input type="password" name="oldPass" placeholder="Старый пароль">

                <label for="newPass">Ваш новый пароль</label>
                <input type="password" name="newPass" placeholder="Новый пароль">

                <label for="repPass">Подтверждение</label>
                <input type="password" name="repPass" placeholder="Подтвердить пароль">

            </div>
        </div>
    </div>
    <button class="cabinet__form-btn">Сохранить изменения</button>
</form>