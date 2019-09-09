<?php
include('php/db_connect.php');
include('php/functions.php');

$slide_item = [];
$error = '';
$query = 'SELECT `id_folder`, `address`, `price` FROM `addresses` ORDER BY RAND() LIMIT 10';
$result = mysqli_query($link, $query);
if ($result) {
    while ($item = mysqli_fetch_assoc($result)) {
        $slide_item[] = $item;
    }
} else {
    $error .= 'Неверный запрос';
}


?>
<section class="section adreses-section" id="adreses">
    <div class="title">
        <h2><?= $title; ?></h2>
    </div>
    <div class="content">
        <div class="owl-carousel slider">
            <?php foreach ($slide_item as $value) : ?>
            <div class="slider-item">
                <a href=""
                    style="background: url(adres_img/<?= $value['id_folder'] . '.jpg'; ?>); background-size: cover; background-repeat: no-repeat">
                    <p><?= explode(',', $value['address'])[2] . ' ' . explode(',', $value['address'])[3]; ?></p>
                    <button class="button"><?= $value['price']; ?></button>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="section-footer">
        <a href="/app/pages/adreses.php" class="slider__btn button col-sm-6 col-12">Показать еще</a>
    </div>
</section>