<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.min.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <?php include 'blocks/base/header.php'; ?>
        <main class="main">
            <div class="container">
                <section class="ordering">
                    <div class="ordering__pannel">
                        <h3 class="ordering__pannel-title">Оформление заказа</h3>
                        <h4 class="cart__info-title">Вы заказали: </h4>
                        <div class="cart__goods">
                            <ul class="cart__goods-list">
                                <li class="cart__goods-item">
                                    <button class="cart__goods-remove">
                                        <img src="img/plus.svg" alt="remove">
                                    </button>
                                    <div class="cart__goods-img"></div>
                                    <span class="cart__goods-name">Хачапури</span>
                                    <div class="input-range ordering--bp">
                                        <button class="input-range__minus">-</button>
                                        <input type="number" name="qty" class="qty" maxlength="2">
                                        <button class="input-range__plus">+</button>
                                    </div>
                                    <span class="cart__goods-price">350 &#8381;</span>
                                </li>

                                <li class="cart__goods-item">
                                    <button class="cart__goods-remove">
                                        <img src="img/plus.svg" alt="remove">
                                    </button>
                                    <div class="cart__goods-img"></div>
                                    <span class="cart__goods-name">Хачапури</span>
                                    <div class="input-range ordering--bp">
                                        <button class="input-range__minus">-</button>
                                        <input type="number" name="qty" class="qty" maxlength="2">
                                        <button class="input-range__plus">+</button>
                                    </div>
                                    <span class="cart__goods-price">350 &#8381;</span>
                                </li>
                            </ul>
                        </div>
                        <div class="ordering__delivery-info">
                            <ul class="ordering__delivery-list">
                                <li class="ordering__delivery-item active">
                                    <a href="#">Доставка</a>
                                </li>
                                <li class="ordering__delivery-item">
                                    <a href="#">Самовывоз (- <span>20</span>%)</a>
                                </li>
                            </ul>
                            <aside class="card-sidebar ord--pg">
                                <div class="ordering__delivery-information">
                                    <div class="ordering__delivery-row">
                                        <p>Итого</p>
                                        <span>700 &#8381;</span>
                                    </div>
                                    <div class="ordering__delivery-row">
                                        <p>Доставка</p>
                                        <span class="total-delivery">0 &#8381;</span>
                                    </div>
                                </div>
                                <div class="ordering__delivery-total">
                                    <p>Итого к оплате</p>
                                    <span>700 &#8381;</span>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <?php include 'blocks/react/ordering/delivery-tab.php';?>
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
    <script src="js/script.min.js"></script>
</body>

</html>