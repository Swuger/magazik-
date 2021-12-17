<?php session_start();
if (!isset($_COOKIE['authorized'])) {
    header("Location: /index.php");
}
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
                <section class="cart">
                    <div class="cart__info">
                        <h4 class="cart__info-title">Корзина</h4>
                        <div class="cart__goods">
                            <ul class="cart__goods-list">
                                <?php
                                $query = mysqli_query($conn, "SELECT * FROM cart WHERE {$_COOKIE['authorized']} = user_id");
                                if (mysqli_num_rows($query) > 0) {
                                    while ($result = mysqli_fetch_assoc($query)) {
                                    ?>
                                    <?php
                                    $product = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM products WHERE {$result['product_id']} = id"));
                                    ?>
                                    <li class="cart__goods-item" data-price="<?= $product['product_price']; ?>">
                                        <a class="cart__goods-remove" href="/php-scripts/cart-remove.php?id=<?= $product['id']; ?>">
                                            <img src="img/plus.svg" alt="remove">
                                        </a>
                                        <div class="cart__goods-img">
                                            <a href="/card.php?id=<?= $product['id']; ?>">
                                                <img src="<?= $product['product_img']; ?>" alt="image">
                                            </a>
                                        </div>
                                        <a class="cart__goods-name" href="/card.php?id=<?= $product['id']; ?>"><?= $product['product_name']; ?></a>
                                        <div class="input-range cart--bp">
                                            <button class="input-range__minus">-</button>
                                            <input type="number" name="qty" class="qty" maxlength="2" value="<?= $result['count']; ?>">
                                            <button class="input-range__plus">+</button>
                                        </div>
                                        <span class="cart__goods-price"><span><?= $result['total_price']; ?></span> &#8381;</span>
                                    </li>
                                    
                                    <?php
                                    }
                                    ?>
                                    <?php
                                } else {
                                    echo "Корзина пустая";
                                }
                                ?>
                            </ul>
                        </div>
                        <aside class="card-sidebar cart">
                            <p class="card-sidebar__promo cart--fz">Закажите на 3000 RUB и получите</p>
                            <div class="card-sidebar__bonus">
                                <img class="card-sidebar__img cart--fz" src="img/pig-bank.svg" alt="piggy">
                                <p class="card-sidebar__text cart--fz"><span><b>30 RUB</b></span> на бонусный счёт</p>
                            </div>
                            <div class="card-sidebar__delivery">
                                <img class="card-sidebar__img cart--fz" src="img/delivery-free.svg" alt="delivery">
                                <p class="card-sidebar__text cart--fz">Бесплатная доставка</p>
                            </div>
                            <div class="card-sidebar__progress">
                                <p class="card-sidebar__sup-text cart--ml"><span>1000</span> (минимальный заказ)</p>
                                <div class="progress-input">
                                    <span class="cart--fz">0</span>
                                    <div class="progress-line">
                                        <img class="progress-circle" src="img/ellipse.svg" alt="circle">
                                        <div></div>
                                    </div>
                                    <span class="cart--fz">3000</span>
                                </div>
                                <p class="card-sidebar__sub-text cart--ml">Осталось <span>988 RUB</span> до бесплатной доставки</p>
                            </div>
                        </aside>
                    </div>

                    <div class="cart__pay">
                        <aside class="card-sidebar discount">
                            <h5 class="card-sidebar__title cart">Информация о заказе</h5>
                            <div class="card-sidebar__total-amount">
                                <p>Товаров в корзине</p>
                                <span><span>0</span> &#8381;</span>
                            </div>
                            <div class="card-sidebar__discount">
                                <p>Промокод</p>
                                <span><span>
                                    0
                                </span> &#8381;</span>
                            </div>
                            <div class="card-sidebar__total-pay">
                                <p>Итого к оплате</p>
                                <span>0 &#8381;</span>
                            </div>
                            <a class="card-sidebar__accept-btn" href="/ordering.php">Оформить заказ</a>
                        </aside>

                        <div class="cart__discount">
                            <h5 class="cart__discount-title">Промокод</h5>
                            <form class="cart__discount-row" action="/php-scripts/codes.php" method="POST">
                                <input type="text" placeholder="Введите промокод" name="promo">
                                <button>Подтвердить</button>
                            </form>
                            <p id="regDenied" style="text-align: unset; margin-top: 1rem;"></p>
                        </div>
                    </div>
                </section>
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
        <div class="mask"></div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>