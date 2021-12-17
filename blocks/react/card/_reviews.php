<div class="card-content__wrapper">
    <div class="card-content__reviews">
        <h5 class="card-content__reviews-title">Отзывы</h5>
        <div class="reviews-content">
            <?php
            if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM reviews WHERE id = 1"))) {
                $query = mysqli_query($conn, "SELECT * FROM reviews WHERE {$_GET['id']} = product_id");
                while ($result = mysqli_fetch_assoc($query)) {
                    ?>
                    <div class="review-item">
                    <div class="review-item__top">
                        <img class="review-item__top-img" src="<?= $result['user_avatar']?>" alt="author">
                        <div class="review-item__top-info">
                            <span><?= $result['user_name']?></span>
                            <div class="review-item__top-stars">
                                <?php
                                for ($i = 0; $i < $result['review']; $i++) {
                                    echo "<img src=\"img/star-green.svg\" alt=\"star\">";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="review-item__bottom">
                        <p class="review-item__bottom-text"><?= $result['text']?></p>
                    </div>
                </div>
                <?php
                }
            } else {
                echo "У данного товара нету отзывов";
            }
            ?>

        </div>
    </div>
    <button class="reviews-add">Добавить отзыв</button>
</div>