@extends('layout')
@section('content')

<div class="content">
    <div class="content-button-row">
        <div class="container">
            <a href="/" class="content-button-row__button button-rounding button-rounding_med button-rounding_dark">&lt; Вернуться к списку коробок</a>
        </div>
    </div>
    <div class="help-padge">
        <div class="container">
            <div class="row dark-card">
                <div class="head-xs-12">
                    <div class="help-padge__header text-block text-block_align_center text-block_fs_b text-block_tf_up text-block_fw_bold">Доставка и оплата</div>
                </div>
                <div class="license_block-xs-12 license_block-sm-12 license_block-md-6 license_block-lg-7 ">
                    <div class="faq-block">
                        <div class="help-padge__faq-block-header faq-block__header text-block-black text-block_fs_m text-block_tf_up text-block_color_black">Доставка</div>
                        <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Как заказать товар, полученный из коробок?</div>
                        <div class="faq-block__answer text-block">
                            Чтобы заказать товары, которые вам выпали из коробок:
                            <ol>
                                <li>Перейдите на страницу вашего профиля и заполните анкету для доставки товаров.</li>
                                <li>Перейдите в раздел «Мои товары».</li>
                                <li>У каждого предмета есть 2 кнопки - «Продать» и «Добавить в корзину».</li>
                                <li>Нажмите на кнопку «Добавить» у всех товаров, которые вы хотите заказать с доставкой. После этого они переместятся в коробки «Корзины доставки»</li>
                                <li>После наполнения корзины нажмите кнопку «Заказать доставку».</li>
                            </ol>
                        </div>
                        <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Как отслеживать статус моей посылки?</div>
                        <div class="faq-block__answer text-block">Перейдите в раздел “Мои заказы” на странице вашего профиля и отслеживайте изменение статуса заказа в удобной таблице.</div>
                        <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Сколько стоит доставка?</div>
                        <div class="faq-block__answer text-block">Стоимость доставки для всех стран и регионов составляет 5 рублей. Оплата доставки списывается с баланса на сайте.</div>
                        <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Сколько товаров можно заказать одновременно?</div>
                        <div class="faq-block__answer text-block">В одной посылке мы можем доставить от 1 до 5 товаров включительно. Если вы хотите заказать больше 5 товаров необходимо оформить несколько доставок.</div>
                        <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Куда вы сможете доставить товары?</div>
                        <div class="faq-block__answer text-block">Доставка производится во все населенные пункты Республики Беларусь. Стоимость доставки не зависит от региона и составляет 5 рублей.</div>
                        <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Есть ли самовывоз?</div>
                        <div class="faq-block__answer text-block">Самовывоза нет, все товары доставляются только через Белпочту и транспортные компании.</div>
                        <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Как быстро производится доставка?</div>
                        <div class="faq-block__answer text-block">Доставка товаров в пределах России производится в течение 30 дней с момента оформления заказа через Белпочту.</div>
                        <div class="help-padge__faq-block-header faq-block__header text-block-black text-block_fs_m text-block_tf_up text-block_color_black">Оплата</div>
                        <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Как пополнить баланс?</div>
                        <div class="faq-block__answer text-block">Нажмите на кнопку “+” или “пополнить баланс” в верхней части сайта.<br>
                            Откроется список возможных способов оплаты.<br>
                            После завершения оплаты вы будете перенаправлены обратно на сайт и сможете открывать коробки и заказывать доставку.</div>
                        <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Минимальная и максимальная сумма пополнения баланса?</div>
                        <div class="faq-block__answer text-block">Баланс можно пополнить на сумму от 2 рублей. За один раз можно пополнять баланс не более, чем на 300 рублей.</div>
                        <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Как быстро зачисляются средства?</div>
                        <div class="faq-block__answer text-block">Все платежи зачисляются в течение 1 минуты после оплаты. Если деньги не зачислились на баланс - обратитесь к нашим консультантам в форме справа.</div>
                        <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Можно выводить деньги?</div>
                        <div class="faq-block__answer text-block">Нет. Баланс можно только тратить на открытие коробок и заказ доставки товаров.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @stop