<?php
include('config.php');
include('db_connect.php');
include('functions.php');

if ($_POST) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $name = htmlspecialchars($name);
    $phone = htmlspecialchars($phone);
    $name = urldecode($name);
    $phone = urldecode($phone);
    $name = trim($name);
    $phone = trim($phone);
    echo $name . ' ' . $phone;
    if (mail("beselbub88@gmail.com", "Заявка с сайта", "Имя:" . $name . ". Телефон: " . $phone, "From: example2@mail.ru \r\n")) {
        echo "Cообщение успешно отправлено";
    } else {
        echo "При отправке сообщения возникли ошибки";
    }
} else {
    echo 'Данные отсутствуют';
}
