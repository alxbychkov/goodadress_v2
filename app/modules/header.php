<header class="header">
    <div class="container">
        <div class="header-top row">
            <div class="header-top-item col-6">
                <div class="geader-top-item__logo">
                    <a href="/app/index.php" class="logo"><?= $LOGO; ?></a>
                </div>
            </div>
            <div class="header-top-item col-6">
                <div class="header-top-item__contacts">
                    <a href="mailto:nasty@mail.ru" class="email"><?= $EMAIL; ?></a>
                    <a href="tel:+79261234567" class="phone"><?= $PHONE; ?></a>
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
                <a href="/app/index.php#" class="nav-item" data="#services">Услуги</a>
                <a href="/app/index.php#" class="nav-item" data="#tarifs">Тарифы</a>
                <a href="/app/pages/adreses.php" class="nav-item">Адреса</a>
                <a href="/app/index.php#" class="nav-item" data="#aboutus">О нас</a>
                <a href="/app/index.php#" class="nav-item" data="#contacts">Контакты</a>
            </div>
        </nav>
        <nav class="navigation-min">
            <div class="navigation-menu container">
                <a href="/app/index.php#" class="nav-item" data="#services">Услуги</a>
                <a href="/app/index.php#" class="nav-item" data="#tarifs">Тарифы</a>
                <a href="/app/pages/adreses.php" class="nav-item">Адреса</a>
                <a href="/app/index.php#" class="nav-item" data="#aboutus">О нас</a>
                <a href="/app/index.php#" class="nav-item" data="#contacts">Контакты</a>
                <!-- <a href="mailto:nasty@mail.ru" class="nav-item email">Nasty@mail.ru</a> -->
                <a href="tel:+79261234567" class="phone"><?= $PHONE; ?></a>
            </div>
        </nav>
    </div>
</header>