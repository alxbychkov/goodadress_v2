<?php
include('config.php');
include('db_connect.php');
include('functions.php');

$id = $_POST['id'];
// $id = 20;
$address = [];

$query = "SELECT  `addresses`.`id`, `ifns`, `district`, `address`, `price`, `description`, `type`, `square`, `folder`
            FROM `addresses`
            JOIN `typies` ON `addresses`.`id_type` = `typies`.`id`
            JOIN `districts` ON `addresses`.`id_district` = `districts`.`id`
            JOIN `ifnses` ON `addresses`.`id_folder` = `ifnses`.`id`
            WHERE `addresses`.`id`=${id}";

$result = mysqli_query($link, $query);
while ($res = mysqli_fetch_assoc($result)) {
    $address[] = $res;
}
$dir = $_SERVER['DOCUMENT_ROOT'] . '/app/adres_img/' . $address[0]['folder'];
if (is_dir($dir)) {
    $pictures = scandir($dir);
    $count = count($pictures);
    array_splice($pictures, 0, 1 + $count / 2);
} else {
    $error .= 'Папка не существует';
}
$address[0]['picture'] = $pictures;

// d($address);
// echo json_encode(mysqli_fetch_assoc($result));
echo json_encode($address);