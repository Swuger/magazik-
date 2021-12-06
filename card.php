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
                    <div class="card-top">
                        <div class="card-top__img">

                        </div>
                        <aside class="card-sidebar info">
                            <div class="card-sidebar__row">
                                <div class="card-sidebar__info">
                                    <h5 class="card-sidebar__title">Говядина 250гр</h5>
                                    <div class="card-sidebar__stars">
                                        <img src="./img/products/star.svg" alt="star">
                                        <img src="./img/products/star.svg" alt="star">
                                        <img src="./img/products/star.svg" alt="star">
                                        <img src="./img/products/star.svg" alt="star">
                                        <img src="./img/products/star.svg" alt="star">
                                    </div>
                                    <p class="card-sidebar__review">Кол-во отзывов: <span>23</span></p>
                                </div>
                                <div class="card-sidebar__actions">
                                    <div class="card-sidebar__price">
                                        <p>Цена за уп.</p>
                                        <span><b>1 050 &#8381;</b></span>
                                    </div>
                                    <div class="card-sidebar__count">
                                        <p>Кол-во шт в упаковке </p>
                                        <span>4 шт.</span>
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
                                    <span>1 050 &#8381;</span>
                                </div>
                                <div class="card-sidebar__btns">
                                    <button class="card-sidebar__btns-buy">Купить</button>
                                    <button class="card-sidebar__btns-cart"></button>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="card-bottom">
                        <div class="card-content">
                            <nav class="card-nav">
                                <ul class="card-nav__list">
                                    <li class="card-nav__list-item active">
                                        <a class="card-nav__list-link" href="#">О товаре</a>
                                    </li>
                                    <li class="card-nav__list-item">
                                        <a class="card-nav__list-link" href="#">Параметры</a>
                                    </li>
                                    <li class="card-nav__list-item">
                                        <a class="card-nav__list-link" href="#">Отзывы</a>
                                    </li>
                                </ul>
                            </nav>
                            <!--content-->
                            <?php include 'blocks/react/card/_reviews.php';?>
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
                                    </div>
                                    <span>3000</span>
                                </div>
                                <p class="card-sidebar__sub-text">Осталось <span>988 RUB</span> до бесплатной доставки
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