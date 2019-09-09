<?php
include('../php/db_connect.php');
include('../php/functions.php');

$addresses = [];

$query = 'SELECT `ifns`, `district`, `address`, `price`, `description`, `type`, `square`
            FROM `addresses` 
            JOIN `districts` ON `addresses`.`id_district` = `districts`.`id`
            JOIN `typies` ON `addresses`.`id_type` = `typies`.`id` 
            JOIN `ifnses` ON `addresses`.`id_ifns` = `ifnses`.`ifns`';

$result = mysqli_query($link, $query);
while ($item = mysqli_fetch_assoc($result)) {
    $addresses[] = $item;
}
// d($addresses);

?>
<section class="section section-adreses" id="adreses">
    <div class="title">
        <h2><?= $title; ?></h2>
    </div>
    <div class="content adreses">
        <div class="adreses__head row">
            <div class="ifns col-sm-1 col-1">
                <p>ИФНС</p>
            </div>
            <div class="okrug col-sm-2">
                <p>Округ</p>
            </div>
            <div class="adres col-sm-6 col-6">
                <p>Адрес</p>
            </div>
            <div class="month col-sm-3 col-6">
                <p>11 месяцев</p>
            </div>
        </div>
        <div class="adreses-body">
            <?php foreach ($addresses as $key => $value) : ?>
            <div class="adreses-body__item row">
                <div class="ifns col-sm-1 col-1">
                    <p><?= $value['ifns'] ?></p>
                </div>
                <div class="okrug col-sm-2">
                    <p><?= $value['district'] ?></p>
                </div>
                <div class="adres col-sm-6 col-6">
                    <!-- <img src="../adres_img/1.jpg" alt=""> -->
                    <p><?= explode(',', $value['address'])[2] . ' ' . explode(',', $value['address'])[3]; ?></p>
                </div>
                <div class="month col-sm-3 col-6">
                    <p><span>От</span><button class="button"><?= $value['price'] ?></button></p>
                </div>
            </div>
            <div class="adreses-body__info row">
                <div class="col-4 info-picture">
                    <img src="/app/adres_img/<?= $key + 1; ?>.jpg" alt=""
                        style="background: url(../adres_img/<?= $key; ?>.jpg )">
                </div>
                <!-- <div class="col-2 info-description">
                    <p class="pink"><?= $value['type']; ?></p>
                    <p class="pink"><?= $value['square']; ?></p>
                </div> -->
                <div class="col-8 info-description">
                    <span class="pink"><?= $value['type']; ?></span>
                    <span class="pink"><?= '(' . $value['square'] . ')'; ?></span>
                    <p><?= $value['description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>