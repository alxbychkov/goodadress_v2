<?php include_once('php/config.php'); ?>
<?php include('modules/head.php'); ?>
<?php include('modules/header.php'); ?>
<main class="main">
    <article class="container">
        <?php include('modules/main_section.php'); ?>
        <?php $title = 'Услуги';
        include('modules/service_section.php'); ?>
        <?php $title = 'Тарифы';
        include('modules/tarif_section.php'); ?>
        <?php $title = 'Адреса';
        include('modules/slider_section.php'); ?>
        <?php $title = 'О нас';
        include('modules/aboutus_section.php'); ?>
        <?php $title = 'Контакты';
        include('modules/contacts_section.php'); ?>
    </article>
</main>
<?php include('modules/footer.php'); ?>
<?php include('modules/scripts.php'); ?>
</body>

</html>