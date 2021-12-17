<div class="cabinet__inner">
    <?php
    $query = mysqli_query($conn, "SELECT * FROM orders WHERE {$_COOKIE['authorized']} = user_id");
    if (mysqli_num_rows($query) > 0) {
        while ($result = mysqli_fetch_assoc($query)) {
    ?>
            <div class="cabinet__history">
                <div class="cabinet__info">
                    <p class="cabinet__info-row"><b>Номер заказа:</b> <span id="order">Заказ №<?= $result['id']; ?></span></p>
                    <p class="cabinet__info-row"><b>Способ оплаты:</b> <span><?= $result['payment']; ?></span></p>
                    <p class="cabinet__info-row"><b>Дата заказа:</b> <span><?= $result['order_date']; ?></span></p>
                    <p class="cabinet__info-row"><b>Статус заказа:</b> <span id="status"><?= $result['order_status']; ?></span></p>
                </div>
                <div class="cabinet__products">
                    <ul class="cart__goods-list history--mb">
                        <?php
                        $products = explode('/', $result['user_products']);
                        array_pop($products);
                        $productsCount = explode('/', $result['products_count']);
                        array_pop($productsCount);
                        $i = 0;
                        foreach ($products as $product) {
                            $sql = mysqli_query($conn, "SELECT * FROM products WHERE id = $product");
                            $productResult = mysqli_fetch_assoc($sql);
                        ?>
                            <li class="cart__goods-item">
                                <a href="/card.php?id=<?= $productResult['id']; ?>"><img class="cart__goods-img" src="<?= $productResult['product_img']; ?>"></a>
                                <a href="/card.php?id=<?= $productResult['id']; ?>"><span class="cart__goods-name"><?= $productResult['product_name']; ?></span></a>
                                <div class="input-range ordering--bp">
                                    <input type="number" name="qty" class="qty" maxlength="2" disabled value="<?= $productsCount[$i]; ?>">
                                </div>
                                <span class="cart__goods-price"><?= $productResult['product_price'] * $productsCount[$i]; ?> &#8381;</span>
                            </li>
                        <?php
                        $i++;
                        }
                        ?>


                    </ul>
                    <button class="cabinet__products-repeat">
                        <span>Повторить заказ</span>
                        <img src="img/repeat.svg" alt="repeat">
                    </button>
                </div>
            </div>

        <?php
        }
        ?>
    <?php
    } else {
        echo "Заказов нет";
    }
    ?>
</div>