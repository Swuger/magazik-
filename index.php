<?php session_start(); ?>
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
    <?php


    ?>
    <div class="wrapper">
        <?php include 'blocks/base/header.php'; ?>
        <main class="main">
            <div class="container">
                <div class="slider">
                    <div id="prevBtn"></div>
                    <div id="nextBtn"></div>

                    <!-- <div class="super-slider">
                        <div class="slider">
                            <div class="slider__inner">
                                <div class="slide"></div>
                                <div class="slide"></div>
                                <div class="slide"></div>
                                <div class="slide"></div>
                            </div>
                            <div class="nav-btns"></div>
                        </div>
                        <div class="left"></div>
                        <div class="right"></div> 
                    </div> -->

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
                                <a class="subslider__link" href="#">СУПЫ</a>
                            </li>
                            <li class="subslider__item">
                                <a class="subslider__link" href="#">ХАЧАПУРИ</a>
                            </li>
                            <li class="subslider__item">
                                <a class="subslider__link" href="#">ХОЛОДНЫЕ ЗАКУСКИ</a>
                            </li>
                            <li class="subslider__item">
                                <a class="subslider__link" href="#">ХИНКАЛИ</a>
                            </li>
                            <li class="subslider__item">
                                <a class="subslider__link" href="#">ШАШЛЫК</a>
                            </li>
                            <li class="subslider__item">
                                <a class="subslider__link" href="#">СОУСЫ</a>
                            </li>
                            <li class="subslider__item">
                                <a class="subslider__link" href="#">САЛАТЫ</a>
                            </li>
                            <li class="subslider__item">
                                <a class="subslider__link" href="#">ГОРЯЧИЕ БЛЮДА</a>
                            </li>
                            <li class="subslider__item">
                                <a class="subslider__link" href="#">ГАРНИР</a>
                            </li>
                            <li class="subslider__item">
                                <a class="subslider__link" href="#">ДЕСЕРТЫ</a>
                            </li>
                            <li class="subslider__item">
                                <a class="subslider__link" href="#">НАПИТКИ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="subslider__btns">
                        <button class="subslider__arrow-prev">
                            <img src="img/slider/arrow-left.svg" alt="">
                        </button>
                        <button class="subslider__arrow-next">
                            <img src="img/slider/arrow.svg" alt="">
                        </button>
                    </div>
                </div>

                <section class="products">
                    <h3 class="products__caption">Все товары</h3>
                    <div class="products__content">
                        <div class="product">
                            <img class="product__img" src="img/products/image.png" alt="product">
                            <a class="product__title" href="#">Голень Говядины</a>
                            <p class="product__text">Описание мраморной говядины, состоящее из нескольких преложений.
                                Можно
                                наполнить.</p>
                            <div class="product__stars">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                            </div>
                            <div class="product__info">
                                <b class="product__price">1 050 ₽/кг</b>
                                <span class="product__weight">За 500гр.</span>
                            </div>
                            <a class="product__to-cart" href="#">В корзину</a>
                        </div>
                        <div class="product">
                            <img class="product__img" src="img/products/image.png" alt="product">
                            <a class="product__title" href="#">Голень Говядины</a>
                            <p class="product__text">Описание мраморной говядины, состоящее из нескольких преложений.
                                Можно
                                наполнить.</p>
                            <div class="product__stars">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                            </div>
                            <div class="product__info">
                                <b class="product__price">1 050 ₽/кг</b>
                                <span class="product__weight">За 500гр.</span>
                            </div>
                            <a class="product__to-cart" href="#">В корзину</a>
                        </div>
                        <div class="product">
                            <img class="product__img" src="img/products/image.png" alt="product">
                            <a class="product__title" href="#">Голень Говядины</a>
                            <p class="product__text">Описание мраморной говядины, состоящее из нескольких преложений.
                                Можно
                                наполнить.</p>
                            <div class="product__stars">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                            </div>
                            <div class="product__info">
                                <b class="product__price">1 050 ₽/кг</b>
                                <span class="product__weight">За 500гр.</span>
                            </div>
                            <a class="product__to-cart" href="#">В корзину</a>
                        </div>
                        <div class="product">
                            <img class="product__img" src="img/products/image.png" alt="product">
                            <a class="product__title" href="#">Голень Говядины</a>
                            <p class="product__text">Описание мраморной говядины, состоящее из нескольких преложений.
                                Можно
                                наполнить.</p>
                            <div class="product__stars">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                            </div>
                            <div class="product__info">
                                <b class="product__price">1 050 ₽/кг</b>
                                <span class="product__weight">За 500гр.</span>
                            </div>
                            <a class="product__to-cart" href="#">В корзину</a>
                        </div>
                        <div class="product">
                            <img class="product__img" src="img/products/image.png" alt="product">
                            <a class="product__title" href="#">Голень Говядины</a>
                            <p class="product__text">Описание мраморной говядины, состоящее из нескольких преложений.
                                Можно
                                наполнить.</p>
                            <div class="product__stars">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                            </div>
                            <div class="product__info">
                                <b class="product__price">1 050 ₽/кг</b>
                                <span class="product__weight">За 500гр.</span>
                            </div>
                            <a class="product__to-cart" href="#">В корзину</a>
                        </div>
                        <div class="product">
                            <img class="product__img" src="img/products/image.png" alt="product">
                            <a class="product__title" href="#">Голень Говядины</a>
                            <p class="product__text">Описание мраморной говядины, состоящее из нескольких преложений.
                                Можно
                                наполнить.</p>
                            <div class="product__stars">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                            </div>
                            <div class="product__info">
                                <b class="product__price">1 050 ₽/кг</b>
                                <span class="product__weight">За 500гр.</span>
                            </div>
                            <a class="product__to-cart" href="#">В корзину</a>
                        </div>
                        <div class="product">
                            <img class="product__img" src="img/products/image.png" alt="product">
                            <a class="product__title" href="#">Голень Говядины</a>
                            <p class="product__text">Описание мраморной говядины, состоящее из нескольких преложений.
                                Можно
                                наполнить.</p>
                            <div class="product__stars">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                            </div>
                            <div class="product__info">
                                <b class="product__price">1 050 ₽/кг</b>
                                <span class="product__weight">За 500гр.</span>
                            </div>
                            <a class="product__to-cart" href="#">В корзину</a>
                        </div>
                        <div class="product">
                            <img class="product__img" src="img/products/image.png" alt="product">
                            <a class="product__title" href="#">Голень Говядины</a>
                            <p class="product__text">Описание мраморной говядины, состоящее из нескольких преложений.
                                Можно
                                наполнить.</p>
                            <div class="product__stars">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                            </div>
                            <div class="product__info">
                                <b class="product__price">1 050 ₽/кг</b>
                                <span class="product__weight">За 500гр.</span>
                            </div>
                            <a class="product__to-cart" href="#">В корзину</a>
                        </div>
                        <div class="product">
                            <img class="product__img" src="img/products/image.png" alt="product">
                            <a class="product__title" href="#">Голень Говядины</a>
                            <p class="product__text">Описание мраморной говядины, состоящее из нескольких преложений.
                                Можно
                                наполнить.</p>
                            <div class="product__stars">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                            </div>
                            <div class="product__info">
                                <b class="product__price">1 050 ₽/кг</b>
                                <span class="product__weight">За 500гр.</span>
                            </div>
                            <a class="product__to-cart" href="#">В корзину</a>
                        </div>
                        <div class="product">
                            <img class="product__img" src="img/products/image.png" alt="product">
                            <a class="product__title" href="#">Голень Говядины</a>
                            <p class="product__text">Описание мраморной говядины, состоящее из нескольких преложений.
                                Можно
                                наполнить.</p>
                            <div class="product__stars">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                            </div>
                            <div class="product__info">
                                <b class="product__price">1 050 ₽/кг</b>
                                <span class="product__weight">За 500гр.</span>
                            </div>
                            <a class="product__to-cart" href="#">В корзину</a>
                        </div>
                        <div class="product">
                            <img class="product__img" src="img/products/image.png" alt="product">
                            <a class="product__title" href="#">Голень Говядины</a>
                            <p class="product__text">Описание мраморной говядины, состоящее из нескольких преложений.
                                Можно
                                наполнить.</p>
                            <div class="product__stars">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                            </div>
                            <div class="product__info">
                                <b class="product__price">1 050 ₽/кг</b>
                                <span class="product__weight">За 500гр.</span>
                            </div>
                            <a class="product__to-cart" href="#">В корзину</a>
                        </div>
                        <div class="product">
                            <img class="product__img" src="img/products/image.png" alt="product">
                            <a class="product__title" href="#">Голень Говядины</a>
                            <p class="product__text">Описание мраморной говядины, состоящее из нескольких преложений.
                                Можно
                                наполнить.</p>
                            <div class="product__stars">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                            </div>
                            <div class="product__info">
                                <b class="product__price">1 050 ₽/кг</b>
                                <span class="product__weight">За 500гр.</span>
                            </div>
                            <a class="product__to-cart" href="#">В корзину</a>
                        </div>
                        <div class="product">
                            <img class="product__img" src="img/products/image.png" alt="product">
                            <a class="product__title" href="#">Голень Говядины</a>
                            <p class="product__text">Описание мраморной говядины, состоящее из нескольких преложений.
                                Можно
                                наполнить.</p>
                            <div class="product__stars">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                            </div>
                            <div class="product__info">
                                <b class="product__price">1 050 ₽/кг</b>
                                <span class="product__weight">За 500гр.</span>
                            </div>
                            <a class="product__to-cart" href="#">В корзину</a>
                        </div>
                        <div class="product">
                            <img class="product__img" src="img/products/image.png" alt="product">
                            <a class="product__title" href="#">Голень Говядины</a>
                            <p class="product__text">Описание мраморной говядины, состоящее из нескольких преложений.
                                Можно
                                наполнить.</p>
                            <div class="product__stars">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                            </div>
                            <div class="product__info">
                                <b class="product__price">1 050 ₽/кг</b>
                                <span class="product__weight">За 500гр.</span>
                            </div>
                            <a class="product__to-cart" href="#">В корзину</a>
                        </div>
                        <div class="product">
                            <img class="product__img" src="img/products/image.png" alt="product">
                            <a class="product__title" href="#">Голень Говядины</a>
                            <p class="product__text">Описание мраморной говядины, состоящее из нескольких преложений.
                                Можно
                                наполнить.</p>
                            <div class="product__stars">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                                <img src="img/products/star.svg" alt="star">
                            </div>
                            <div class="product__info">
                                <b class="product__price">1 050 ₽/кг</b>
                                <span class="product__weight">За 500гр.</span>
                            </div>
                            <a class="product__to-cart" href="#">В корзину</a>
                        </div>
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
        <?php


        ?>
    </div>
    <script src="js/script.js"></script>
</body>

</html>