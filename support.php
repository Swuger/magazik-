<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
    <?php include 'blocks/base/header.php';?>
        <main class="main">
            <div class="page-content">
                <div class="container">
                    <div class="page-content__wrapper">
                        <h1 class="booking">Поддержка</h1>
                        <form class="booking-form" action="/">
                            <textarea class="booking-form__input" placeholder="Напишите сообщение..."></textarea>
                            <button class="booking-form__btn" type="submit">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal">
            <?php
                include 'blocks/pop-up/booking.php';
                include 'blocks/pop-up/log.php';
                include 'blocks/pop-up/mailing.php';
                include 'blocks/pop-up/reg.php';
                include 'blocks/pop-up/reviews.php';
                ?>
            </div>
        </main>
        <?php include 'blocks/base/footer.php';?>
        <div class="mask"></div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>