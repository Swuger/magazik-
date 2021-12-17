<div class="cabinet__inner active">
    <form class="cabinet__personal-form" method="POST" action="/php-scripts/cabinet-info.php" enctype="multipart/form-data">
        <div class="cabinet__content" method="POST">
            <div class="cabinet__personal-info">
                <h4 class="personal-info__title">Персональная информация</h4>
                <div class="personal-info__photo">
                    <?php
                    $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT avatar FROM users WHERE id = {$_COOKIE['authorized']}"));

                    if (!isset($result['avatar'])) {
                        echo "<img class=\"personal-info__image\" src=\"uploads/test.jpg\">";
                    } else {
                        echo "<img class=\"personal-info__image\" src=\"{$result['avatar']}\">";
                    }
                    ?>
                    <div class="personal-info__input--file">
                        <label for="uploadPhoto">Загрузить фотографию</label>
                        <input type="file" name="uploadPhoto">
                    </div>
                </div>
                <div class="personal-info__form">
                    <div class="personal-info__row">
                        <div class="personal-info__column">
                            <label class="personal-info__label" for="firstProfileName">Ваше имя</label>
                            <?php
                            $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT firstname FROM users WHERE id = {$_COOKIE['authorized']}"));
                            if (isset($result['firstname'])) {
                                echo "<input type=\"text\" name=\"firstProfileName\" placeholder=\"Имя\" value=\"{$result['firstname']}\">";
                            } else {
                                echo "<input type=\"text\" name=\"firstProfileName\" placeholder=\"Имя\">";
                            }
                            ?>
                        </div>
                        <div class="personal-info__column">
                            <label class="personal-info__label" for="lastProfileName">Ваша фамилия</label>
                            <?php
                            $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT lastname FROM users WHERE id = {$_COOKIE['authorized']}"));
                            if (isset($result['lastname'])) {
                                echo "<input type=\"text\" name=\"lastProfileName\" placeholder=\"Фамилия\" value=\"{$result['lastname']}\">";
                            } else {
                                echo "<input type=\"text\" name=\"lastProfileName\" placeholder=\"Фамилия\">";
                            }
                            ?>
                        </div>
                    </div>
                    <label class="personal-info__label" for="patronymic">Ваше отчество</label>
                    <?php
                    $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT patronymic FROM users WHERE id = {$_COOKIE['authorized']}"));
                    if (isset($result['patronymic'])) {
                        echo "<input class=\"personal-info__input\" id=\"patronymicInput\" type=\"text\" name=\"patronymic\" placeholder=\"Отчество\" value=\"{$result['patronymic']}\">";
                    } else {
                        echo "<input class=\"personal-info__input\" id=\"patronymicInput\" type=\"text\" name=\"patronymic\" placeholder=\"Отчество\">";
                    }
                    ?>
                    <label class="personal-info__label" for="emailProfile">Адрес электронной почты</label>
                    <?php
                    $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT email FROM users WHERE id = {$_COOKIE['authorized']}"));
                    if (isset($result['email'])) {
                        echo "<input class=\"personal-info__input\" id=\"emailInput\" type=\"email\" name=\"emailProfile\" placeholder=\"E-mail\" value=\"{$result['email']}\">";
                    } else {
                        echo "<input class=\"personal-info__input\" id=\"emailInput\" type=\"email\" name=\"emailProfile\" placeholder=\"E-mail\">";
                    }
                    ?>
                </div>
            </div>

            <div class="cabinet__contact-info">
                <h4 class="cabinet__contact-title">Контактная информация <br> <span>(подтверждения заказов)</span>
                </h4>
                <div class="cabinet__tel-form">
                    <div class="cabinet__tel-column">
                        <label for="mainTel">Основной телефон</label>
                        <?php
                        $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT main_tel FROM users WHERE id = {$_COOKIE['authorized']}"));
                        echo "<input type=\"tel\" name=\"mainTel\" placeholder=\"+7\" value=\"{$result['main_tel']}\" pattern=\"\+?[789][0-9]{9,10}\">";
                        ?>
                    </div>
                    <div class="cabinet__tel-column">
                        <label for="subTel">Дополнительный</label>
                        <?php
                        $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT sub_tel FROM users WHERE id = {$_COOKIE['authorized']}"));
                        if (!isset($result['sub-tel'])) {
                            echo "<input type=\"tel\" name=\"subTel\" placeholder=\"+7\" value=\"{$result['sub_tel']}\" pattern=\"\+?[789][0-9]{9,10}\">";
                        } else {
                            echo "<input type=\"tel\" name=\"subTel\" placeholder=\"+7\" pattern=\"\+?[789][0-9]{9,10}\">";
                        }
                        ?>
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
        <div class="cabinet__form-action">
            <button class="cabinet__form-btn">Сохранить изменения</button>
            <?php
            if (isset($_SESSION['error'])) {
                echo "<span id=\"regDenied\" class=\"mrb\">" . $_SESSION['error'] . "</span>";
                unset($_SESSION['error']);
            }
            ?>
        </div>
    </form>
</div>