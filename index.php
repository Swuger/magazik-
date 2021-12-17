<?php session_start();
require_once 'php-scripts/connect.php';
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
                <div class="slider">
                    <div id="prevBtn"></div>
                    <div id="nextBtn"></div>
                    <div class="slider__inner">
                        <div class="slide" id="lastClone" draggable="false">
                            <div class="slide__content">
                                <h2 class="slide__title">Подарок на четвертый заказ.</h2>
                                <p class="slide__text">Получите 500 рублей за подписку на рассылку</p>
                                <a class="slide__sub" href="#">Подписаться</a>
                                <img class="slider__img" src="img/slider/image1.png" alt="" draggable="false">
                            </div>
                        </div>
                        <div class="slide" data-index="0" draggable="false">
                            <div class="slide__content">
                                <h2 class="slide__title">Подарок на первый заказ.</h2>
                                <p class="slide__text">Получите 500 рублей за подписку на рассылку</p>
                                <a class="slide__sub" href="#">Подписаться</a>
                                <img class="slider__img" src="img/slider/image1.png" alt="" draggable="false">
                            </div>
                        </div>
                        <div class="slide" data-index="1" draggable="false">
                            <div class="slide__content">
                                <h2 class="slide__title">Подарок на второй заказ.</h2>
                                <p class="slide__text">Получите 500 рублей за подписку на рассылку</p>
                                <a class="slide__sub" href="#">Подписаться</a>
                                <img class="slider__img" src="img/slider/image1.png" alt="" draggable="false">
                            </div>
                        </div>
                        <div class="slide" data-index="2" draggable="false">
                            <div class="slide__content">
                                <h2 class="slide__title">Подарок на третий заказ.</h2>
                                <p class="slide__text">Получите 500 рублей за подписку на рассылку</p>
                                <a class="slide__sub" href="#">Подписаться</a>
                                <img class="slider__img" src="img/slider/image1.png" alt="" draggable="false">
                            </div>
                        </div>
                        <div class="slide" data-index="3" draggable="false">
                            <div class="slide__content">
                                <h2 class="slide__title">Подарок на четвёртый заказ.</h2>
                                <p class="slide__text">Получите 500 рублей за подписку на рассылку</p>
                                <a class="slide__sub" href="#">Подписаться</a>
                                <img class="slider__img" src="img/slider/image1.png" alt="" draggable="false">
                            </div>
                        </div>
                        <div class="slide" id="firstClone" draggable="false">
                            <div class="slide__content">
                                <h2 class="slide__title">Подарок на первый заказ.</h2>
                                <p class="slide__text">Получите 500 рублей за подписку на рассылку</p>
                                <a class="slide__sub" href="#">Подписаться</a>
                                <img class="slider__img" src="img/slider/image1.png" alt="" draggable="false">
                            </div>
                        </div>
                    </div>
                    <div class="slider__btns">
                        <button class="slider__btn slider__btn--active"></button>
                        <button class="slider__btn"></button>
                        <button class="slider__btn"></button>
                        <button class="slider__btn"></button>
                    </div>
                </div>

                <div class="subslider">
                    <div class="subslider__wrapper">
                        <ul class="subslider__inner">
                            <li class="subslider__item">
                                <a class="subslider__link" href="/index.php?filter=soup">СУПЫ</a>
                            </li>
                            <li class="subslider__item">
                                <a class="subslider__link" href="/index.php?filter=khachapuri">ХАЧАПУРИ</a>
                            </li>
                            <li class="subslider__item">
                                <a class="subslider__link" href="/index.php?filter=cold_snacks">ХОЛОДНЫЕ ЗАКУСКИ</a>
                            </li>
                            <li class="subslider__item">
                                <a class="subslider__link" href="/index.php?filter=khinkali">ХИНКАЛИ</a>
                            </li>
                            <li class="subslider__item">
                                <a class="subslider__link" href="/index.php?filter=shashlik">ШАШЛЫК</a>
                            </li>
                            <li class="subslider__item">
                                <a class="subslider__link" href="/index.php?filter=sauce">СОУСЫ</a>
                            </li>
                            <li class="subslider__item">
                                <a class="subslider__link" href="/index.php?filter=salad">САЛАТЫ</a>
                            </li>
                            <li class="subslider__item">
                                <a class="subslider__link" href="/index.php?filter=hot_meals">ГОРЯЧИЕ БЛЮДА</a>
                            </li>
                            <li class="subslider__item">
                                <a class="subslider__link" href="/index.php?filter=garnish">ГАРНИР</a>
                            </li>
                            <li class="subslider__item">
                                <a class="subslider__link" href="/index.php?filter=desserts">ДЕСЕРТЫ</a>
                            </li>
                            <li class="subslider__item">
                                <a class="subslider__link" href="/index.php?filter=beverages">НАПИТКИ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="subslider__btns">
                        <button class="subslider__arrow-prev">
                            <img src="img/slider/arrow-left.svg" alt="left">
                        </button>
                        <button class="subslider__arrow-next">
                            <img src="img/slider/arrow.svg" alt="right">
                        </button>
                    </div>
                </div>

                <section class="products">
                    <h3 class="products__caption"><a href="/index.php">Все товары</a></h3>
                    <div class="products__content">

                        <?php
                        if (!isset($_GET['filter'])) {
                            $query = mysqli_query($conn, "SELECT * FROM products");
                        } else {
                            $query = mysqli_query($conn, "SELECT * FROM products WHERE product_category = '{$_GET['filter']}'");
                        }
                        $id = 1;
                        while ($result = mysqli_fetch_assoc($query)) {
                            $sql = mysqli_query($conn, "SELECT AVG(review) as avg FROM reviews WHERE product_id = $id");
                        ?>
                            <div class="product">
                                <img class="product__img" src="<?= $result['product_img']; ?>" alt="product">
                                <a class="product__title" href="/card.php?id=<?= $result['id']; ?>"><?= $result['product_name']; ?></a>
                                <p class="product__text"><?= $result['product_desc'] ?></p>
                                <div class="product__stars">
                                    <?php
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
                                <div class="product__info">
                                    <b class="product__price"><?= $result['product_price']; ?> ₽/кг</b>
                                    <span class="product__weight">За <?= $result['product_weight']; ?>гр.</span>
                                </div>
                                <a class="product__to-cart" href="/php-scripts/cart-add.php?id=<?= $id; ?>">В корзину</a>
                            </div>

                        <?php
                        $id++;
                        }
                        ?>

                    </div>
                </section>
            </div>
            <div class="container">
                <?php include 'blocks/base/delivery-banner.php'; ?>
            </div>
            <div class="modal">
                <?php
                include 'blocks/pop-up/booking.php';
                include 'blocks/pop-up/log.php';
                include 'blocks/pop-up/mailing.php';
                include 'blocks/pop-up/reg.php';
                include 'blocks/pop-up/reviews.php';
                include '/OpenServer/domains/shop/blocks/react/modal/forgot-pass.php';
                ?>
            </div>
        </main>
        <?php include 'blocks/base/footer.php'; ?>
        <div class="mask"></div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>