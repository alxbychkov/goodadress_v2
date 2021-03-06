<?php
include('../php/db_connect.php');
include('../php/functions.php');

$addresses = [];

$query = "SELECT  `addresses`.`id`, `ifns`, `district`, `address`, `price`, `description`, `type`, `square`
            FROM `addresses`
            JOIN `typies` ON `addresses`.`id_type` = `typies`.`id`
            JOIN `districts` ON `addresses`.`id_district` = `districts`.`id`
            JOIN `ifnses` ON `addresses`.`id_ifns` = `ifnses`.`id`
            ORDER BY `id_ifns`";
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
                        <p><?= explode(',', $value['address'])[2] . ' ' . explode(',', $value['address'])[3]; ?></p>
                    </div>
                    <div class="month col-sm-3 col-6">
                        <p><span>От</span><button class="button" data-open="adres_show" data-id="<?= $value['id'] ?>"><?= $value['price'] ?></button></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
include('../modules/modal_adres.php');
