<?php
include('config.php');
include('db_connect.php');
include('functions.php');

$id = $_POST['id'];
$address = [];

$query = 'SELECT  `addresses`.`id`, `ifns`, `district`, `address`, `price`, `description`, `type`, `square`
            FROM `addresses`
            JOIN `typies` ON `addresses`.`id_type` = `typies`.`id`
            JOIN `districts` ON `addresses`.`id_district` = `districts`.`id`
            JOIN `ifnses` ON `addresses`.`id_ifns` = `ifnses`.`id`
            ORDER BY `id_ifns`
            WHERE `addresses`.`id`=${id}';

$result = mysqli_query($link, $query);
while ($item = mysqli_fetch_assoc($result)) {
    $addresses[] = $item;
}