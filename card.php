<?php require_once 'php-scripts/connect.php'; 
if (!isset($_GET['id'])) {
    header("Location: /index.php");
}
?>
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
            <div class="container">
                <section class="card">
                    <?php
                    $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM products WHERE id = {$_GET['id']}"));
                    ?>
                    <div class="card-top">
                        <div class="card-top__img">
                            <img src="<?= $result['product_img']; ?>" alt="image">
                        </div>
                        <aside class="card-sidebar info">
                            <div class="card-sidebar__row">
                                <div class="card-sidebar__info">
                                    <h5 class="card-sidebar__title">
                                        <?= $result['product_name']; ?>
                                        <?= $result['product_weight']; ?> гр
                                    </h5>
                                    <div class="card-sidebar__stars">
                                        <?php
                                        $sql = mysqli_query($conn, "SELECT AVG(review) as avg FROM reviews WHERE product_id = {$_GET['id']}");
                                        $avg = intval(round(mysqli_fetch_assoc($sql)['avg']));
                                        if ($avg === 0) {
                                            for ($i = 0; $i < 5; $i++) {
                                                echo "<img src=\"/img/products/star.svg\">";
                                            }
                                        } else {
                                            for ($i = 0; $i < $avg; $i++) {
                                                echo "<img src=\"/img/star-green.svg\">";
                                            }
                                        }
                                        ?>
                                    </div>
                                    <p class="card-sidebar__review">Кол-во отзывов: <span>
                                        <?php
                                        $count = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) FROM reviews WHERE {$_GET['id']} = product_id"));
                                        echo $count['COUNT(*)'];
                                        ?>
                                    </span></p>
                                </div>
                                <div class="card-sidebar__actions">
                                    <div class="card-sidebar__price">
                                        <p>Цена за уп.</p>
                                        <b><span id="price"><?= $result['product_price']; ?></span> &#8381;</b>
                                    </div>
                                    <div class="card-sidebar__count">
                                        <p>Кол-во шт в упаковке </p>
                                        <span><?= $result['product_count']; ?> шт.</span>
                                    </div>
                                    <div class="card-sidebar__quantity">
                                        <p>Количество </p>
                                        <div class="input-range">
                                            <button class="input-range__minus">-</button>
                                            <input type="number" name="qty" class="qty" maxlength="2">
                                            <button class="input-range__plus">+</button>
                                        </div>
                                    </div>
                                    <div class="card-sidebar__sub-quantity"><span>Ед. изм.: упаковка</span></div>
                                </div>
                            </div>
                            <div class="card-sidebar__payment">
                                <div class="card-sidebar__total">
                                    <p>Итого к оплате</p>
                                    <span><span id="totalPrice"><?= $result['product_price']; ?></span> &#8381;</span>
                                </div>
                                <div class="card-sidebar__btns">
                                    <button class="card-sidebar__btns-buy">Купить</button>
                                    <a class="card-sidebar__btns-cart" href="#0"></a>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="card-bottom">
                        <div class="card-content">
                            <nav class="card-nav">
                                <ul class="card-nav__list">
                                    <li class="card-nav__list-item active">
                                        <a class="card-nav__list-link" href="#0">О товаре</a>
                                    </li>
                                    <li class="card-nav__list-item">
                                        <a class="card-nav__list-link" href="#0">Параметры</a>
                                    </li>
                                    <li class="card-nav__list-item">
                                        <a class="card-nav__list-link" href="#0">Отзывы</a>
                                    </li>
                                </ul>
                            </nav>
                            <!--content-->
                            <?php include 'blocks/react/card/_desc.php'; ?>
                            <?php include 'blocks/react/card/_options.php'; ?>
                            <?php include 'blocks/react/card/_reviews.php'; ?>
                        </div>
                        <aside class="card-sidebar bonus">
                            <p class="card-sidebar__promo">Закажите на 3000 RUB и получите</p>
                            <div class="card-sidebar__bonus">
                                <img class="card-sidebar__img" src="img/pig-bank.svg" alt="piggy">
                                <p class="card-sidebar__text"><span><b>30 RUB</b></span> на бонусный счёт</p>
                            </div>
                            <div class="card-sidebar__delivery">
                                <img class="card-sidebar__img" src="img/delivery-free.svg" alt="delivery">
                                <p class="card-sidebar__text">Бесплатная доставка</p>
                            </div>
                            <div class="card-sidebar__progress">
                                <p class="card-sidebar__sup-text"><span>1000</span> (минимальный заказ)</p>
                                <div class="progress-input">
                                    <span>0</span>
                                    <div class="progress-line">
                                        <img class="progress-circle" src="img/ellipse.svg" alt="circle">
                                        <div></div>
                                    </div>
                                    <span>3000</span>
                                </div>
                                <p class="card-sidebar__sub-text">Осталось <span>3000 RUB</span> до бесплатной доставки
                                </p>
                            </div>
                        </aside>
                    </div>
                </section>
                <?php include 'blocks/base/delivery-banner.php'; ?>
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
        <?php include 'blocks/base/footer.php'; ?>
    </div>
    <div class="mask"></div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>