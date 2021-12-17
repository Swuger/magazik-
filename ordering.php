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
                <section class="ordering">
                    <div class="ordering__pannel">
                        <h3 class="ordering__pannel-title">Оформление заказа</h3>
                        <h4 class="cart__info-title">Вы заказали: </h4>
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
                                            <div class="cart__goods-img">
                                                <a href="/card.php?id=<?= $product['id']; ?>">
                                                    <img src="<?= $product['product_img']; ?>" alt="image">
                                                </a>
                                            </div>
                                            <a class="cart__goods-name" href="/card.php?id=<?= $product['id']; ?>"><?= $product['product_name']; ?></a>
                                            <div class="input-range cart--bp">
                                                <input type="number" name="qty" class="qty" maxlength="2" value="<?= $result['count']; ?>" disabled>
                                            </div>
                                            <span class="cart__goods-price"><span><?= $result['total_price']; ?></span> &#8381;</span>
                                        </li>

                                    <?php
                                    }
                                    ?>
                                <?php
                                } else {
                                    header("Location: /cart.php") or die('что происходит');
                                }
                                ?>

                            </ul>
                        </div>
                        <div class="ordering__delivery-info">
                            <ul class="ordering__delivery-list">
                                <li class="ordering__delivery-item active" id="deliveryTab">
                                    <a href="#0">Доставка</a>
                                </li>
                                <li class="ordering__delivery-item" id="pickupTab">
                                    <a href="#0">Самовывоз (- <span>20</span>%)</a>
                                </li>
                            </ul>
                            <aside class="card-sidebar ord--pg">
                                <div class="ordering__delivery-information">
                                    <div class="ordering__delivery-row">
                                        <p>Итого</p>
                                        <span id="totalPriceBlock">700 &#8381;</span>
                                    </div>
                                    <div class="ordering__delivery-row">
                                        <p>Доставка</p>
                                        <span class="total-delivery">250 &#8381;</span>
                                    </div>
                                </div>
                                <div class="ordering__delivery-total">
                                    <p>Итого к оплате</p>
                                    <span>700 &#8381;</span>
                                </div>
                            </aside>
                        </div>
                    </div>

                    <div class="ordering__info active">
                        <form class="ordering__info-form delivery-form">
                            <label for="district">Район доставки</label>
                            <input class="ordering__info-input" type="text" name="district" placeholder="Введите адрес доставки">

                            <label for="fullname">ФИО</label>
                            <input class="ordering__info-input" type="text" name="deliveryFullname" placeholder="Введите Ваше полное имя">

                            <label for="phone">Телефон</label>
                            <input class="ordering__info-input" type="tel" name="deliveryPhone" placeholder="+7">

                            <label for="adress">Адрес доставки</label>
                            <input class="ordering__info-input" type="text" name="adress" placeholder="Введите адрес доставки">

                            <label for="payment">Способ оплаты</label>
                            <div class="ordering__info-payment" onclick="event.stopPropagation()">
                                <input class="ordering__info-input" type="text" name="payment" placeholder="Выберите" disabled>
                                <img src="img/arrow-down.svg" alt="btn" id="payment-btn">
                                <ul class="ordering__info-list">
                                    <li class="ordering__info-item">Наличные</li>
                                    <li class="ordering__info-item">Картой курьеру</li>
                                    <li class="ordering__info-item">Картой на сайте</li>
                                </ul>
                            </div>

                            <label for="comment">Комментарий к заказу</label>
                            <input class="ordering__info-input" type="text" name="comment" placeholder="Введите ваш комментарий...">

                            <button class="ordering__info-btn">Оформить заказ</button>
                        </form>
                    </div>

                    <div class="ordering__info">
                        <form class="ordering__info-form pickup">
                            <label for="fullname">ФИО</label>
                            <input class="ordering__info-input" type="text" name="fullname" placeholder="Введите Ваше полное имя">

                            <label for="phone">Телефон</label>
                            <input class="ordering__info-input" type="tel" name="phone" placeholder="+7">

                            <label for="payment">Когда заберёте?</label>
                            <div class="ordering__info-payment" onclick="event.stopPropagation()">
                                <input class="ordering__info-input" type="text" placeholder="Выберите" name="action" disabled>
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