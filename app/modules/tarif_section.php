<section class="section tarif-section" id="tarifs">
    <div class="title">
        <h2><?= $title; ?></h2>
    </div>
    <div class="content row">
        <div class="tarif-item col-lg-3 col-md-5 col-10">
            <h3 class="tariff__title">Мини</h3>
            <ul class="tarif-info">
                <li class="tarif-info__item">
                    Подготовка документации для подачи в ФНС
                </li>
                <li class="tarif-info__item">
                    Консультация юриста
                </li>
                <li class="tarif-info__item attention">
                    Подача документов самостоятельно
                </li>
            </ul>
            <div class="">
                <p class="tarif__price">3 000 rub</p>
                <button class="tarif__btn button" data-tarif="МИНИ">Заказать</button>
            </div>
        </div>
        <div class="tarif-item col-lg-3 col-md-5 col-10">
            <h3 class="tariff__title">Оптимал</h3>
            <ul class="tarif-info">
                <li class="tarif-info__item">
                    Подготовка документации для подачи в ФНС
                </li>
                <li class="tarif-info__item">
                    Консультация юриста
                </li>
                <li class="tarif-info__item">
                    Подача документов в сопровождении специалиста
                </li>
            </ul>
            <div>
                <p class="tarif__price">6 000 rub</p>
                <button class="tarif__btn button" data-tarif="ОПТИМАЛ">Заказать</button>
            </div>
        </div>
        <div class="tarif-item col-lg-3 col-md-5 col-10">
            <h3 class="tariff__title">Макси</h3>
            <ul class="tarif-info">
                <li class="tarif-info__item">
                    Подготовка документации для подачи в ФНС
                </li>
                <li class="tarif-info__item">
                    Консультация юриста
                </li>
                <li class="tarif-info__item">
                    Подача документов по доверенности
                </li>
            </ul>
            <div>
                <p class="tarif__price">9 000 rub</p>
                <button class="tarif__btn button" data-tarif="МАКСИ">Заказать</button>
            </div>
        </div>
    </div>
</section>
<?php
include('modules/callback_section.php');