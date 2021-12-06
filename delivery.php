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
        <?php include 'blocks/base/header.php'; ?>
        <main class="main">
            <div class="page-content">
                <div class="container">
                    <div class="page-content__wrapper">
                        <h1>Доставка</h1>
                        <p>Нашим гостям мы предлагаем жаркую парилку, разогретую до оптимального температурного режима и
                            душистые веники. Благодаря правильному проектированию помещений русской бани в Домодедово,
                            наш
                            легкий пар не жжет кожу и не оставляет после себя головную боль. В банный комплекс входят:
                            русская
                            баня на дровах, оздоровительные SPA-процедуры, хаммам, бассейн и караоке. Для Вашего
                            удобства в
                            составе нашего комплекса имеется уютный зал, где Вы можете расслабиться и сделать заказ из
                            нашего
                            меню. Банный комплексе De’Lore рассчитан на одновременное посещение 25 человек.</p>
                        <p>
                            Нашим гостям мы предлагаем жаркую парилку, разогретую до оптимального температурного режима
                            и
                            душистые веники. Благодаря правильному проектированию помещений русской бани в Домодедово,
                            наш
                            легкий пар не жжет кожу и не оставляет после себя головную боль. В банный комплекс входят:
                            русская
                            баня на дровах, оздоровительные SPA-процедуры, хаммам, бассейн и караоке. Для Вашего
                            удобства в
                            составе нашего комплекса имеется уютный зал, где Вы можете расслабиться и сделать заказ из
                            нашего
                            меню. Банный комплексе De’Lore рассчитан на одновременное посещение 25 человек.
                        </p>
                        <div class="page-content__links">
                            <a class="catalog-link" href="#">В каталог</a>
                            <a class="payment-link" href="#">Об оплате</a>
                        </div>
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
        </main>
        <?php include 'blocks/base/footer.php'; ?>
        <div class="mask"></div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>