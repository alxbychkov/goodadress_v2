<?php
include('../php/db_connect.php');
include('../php/functions.php');

$addresses = [];

$query = 'SELECT `id_ifns`, `id_district`, `address` FROM `addresses`';
$result = mysqli_query($link, $query);
while ($item = mysqli_fetch_assoc($result)) {
    $addresses[] = $item;
}
d($addresses);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/style.min.css">
    <title>Goodadress.ru</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header-top row">
                <div class="header-top-item col-6">
                    <div class="geader-top-item__logo">
                        <a href="/" class="logo">GoodAdress</a>
                    </div>
                </div>
                <div class="header-top-item col-6">
                    <div class="header-top-item__contacts">
                        <a href="mailto:nasty@mail.ru" class="email">Nasty@mail.ru</a>
                        <a href="tel:+79261234567" class="phone">+79261234567</a>
                    </div>
                    <div class="header-top-item__burger burger">
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                    </div>
                </div>
            </div>
            <nav class="navigation row">
                <div class="navigation-menu col">
                    <a href="/" class="nav-item">Услуги</a>
                    <a href="/" class="nav-item">Тарифы</a>
                    <a href="" class="nav-item" data="#adreses">Адреса</a>
                    <a href="/" class="nav-item">О нас</a>
                    <a href="" class="nav-item">Контакты</a>
                </div>
            </nav>
            <nav class="navigation-min">
                <div class="navigation-menu container">
                    <a href="/" class="nav-item">Услуги</a>
                    <a href="/" class="nav-item">Тарифы</a>
                    <a href="#adreses" class="nav-item">Адреса</a>
                    <a href="/" class="nav-item">О нас</a>
                    <a href="/" class="nav-item">Контакты</a>
                    <!-- <a href="mailto:nasty@mail.ru" class="nav-item email">Nasty@mail.ru</a> -->
                    <a href="tel:+79261234567" class="phone">+79261234567</a>
                </div>
            </nav>
        </div>
    </header>
    <main class="main">
        <article class="container">
            <section class="section section-adreses" id="adreses">
                <div class="title">
                    <h2>Адреса</h2>
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
                                <p><?= $value['id_ifns'] ?></p>
                            </div>
                            <div class="okrug col-sm-2">
                                <p><?= $value['id_district'] ?></p>
                            </div>
                            <div class="adres col-sm-6 col-6">
                                <!-- <img src="../adres_img/1.jpg" alt=""> -->
                                <p><?= $value['address'] ?></p>
                            </div>
                            <div class="month col-sm-3 col-6">
                                <p><span>От</span><button class="button">12 000</button></p>
                            </div>
                        </div>
                        <?php endforeach; ?>

                        <div class="adreses-body__item row">
                            <div class="ifns col-sm-1 col-1">
                                <p>1</p>
                            </div>
                            <div class="okrug col-sm-2">
                                <p>ЗАО</p>
                            </div>
                            <div class="adres col-sm-6 col-6">
                                <!-- <img src="../adres_img/2.jpg" alt=""> -->
                                <p>Ул. Пятницкая д. 38</p>
                            </div>
                            <div class="month col-sm-3 col-6">
                                <p><span>От</span><button class="button">12 000</button></p>
                            </div>
                        </div>
                        <div class="adreses-body__item row">
                            <div class="ifns col-sm-1 col-1">
                                <p>1</p>
                            </div>
                            <div class="okrug col-sm-2">
                                <p>ЗАО</p>
                            </div>
                            <div class="adres col-sm-6 col-6">
                                <!-- <img src="../adres_img/3.jpg" alt=""> -->
                                <p>Ул. Пятницкая д. 38</p>
                            </div>
                            <div class="month col-sm-3 col-6">
                                <p><span>От</span><button class="button">12 000</button></p>
                            </div>
                        </div>
                        <div class="adreses-body__item row">
                            <div class="ifns col-sm-1">
                                <p>1</p>
                            </div>
                            <div class="okrug col-sm-2">
                                <p>ЗАО</p>
                            </div>
                            <div class="adres col-sm-6 col-6">
                                <!-- <img src="../adres_img/4.jpg" alt=""> -->
                                <p>Ул. Пятницкая д. 38</p>
                            </div>
                            <div class="month col-sm-3 col-6">
                                <p><span>От</span><button class="button">12 000</button></p>
                            </div>
                        </div>
                        <div class="adreses-body__item row">
                            <div class="ifns col-sm-1">
                                <p>1</p>
                            </div>
                            <div class="okrug col-sm-2">
                                <p>ЗАО</p>
                            </div>
                            <div class="adres col-sm-6 col-6">
                                <!-- <img src="../adres_img/5.jpg" alt=""> -->
                                <p>Ул. Пятницкая д. 38</p>
                            </div>
                            <div class="month col-sm-3 col-6">
                                <p><span>От</span><button class="button">12 000</button></p>
                            </div>
                        </div>
                        <div class="adreses-body__item row">
                            <div class="ifns col-sm-1">
                                <p>1</p>
                            </div>
                            <div class="okrug col-sm-2">
                                <p>ЗАО</p>
                            </div>
                            <div class="adres col-sm-6 col-6">
                                <!-- <img src="../adres_img/6.jpg" alt=""> -->
                                <p>Ул. Пятницкая д. 38</p>
                            </div>
                            <div class="month col-sm-3 col-6">
                                <p><span>От</span><button class="button">12 000</button></p>
                            </div>
                        </div>
                        <div class="adreses-body__item row">
                            <div class="ifns col-sm-1">
                                <p>1</p>
                            </div>
                            <div class="okrug col-sm-2">
                                <p>ЗАО</p>
                            </div>
                            <div class="adres col-sm-6 col-6">
                                <!-- <img src="../adres_img/1.jpg" alt=""> -->
                                <p>Ул. Пятницкая д. 38</p>
                            </div>
                            <div class="month col-sm-3 col-6">
                                <p><span>От</span><button class="button">12 000</button></p>
                            </div>
                        </div>




                    </div>
                </div>
            </section>
        </article>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="header-top row">
                <div class="header-top-item col-6">
                    <div class="geader-top-item__logo">
                        <a href="" class="logo">GoodAdress</a>
                    </div>
                </div>
                <div class="header-top-item col-6">
                    <div class="header-top-item__contacts">
                        <a href="mailto:nasty@mail.ru" class="email">Nasty@mail.ru</a>
                        <a href="tel:+79261234567" class="phone">+79261234567</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>