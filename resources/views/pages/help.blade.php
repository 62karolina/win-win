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
                        <div class="help-padge__header text-block-black text-block_align_center text-block_fs_b text-block_tf_up text-block_fw_bold">Вопросы и ответы</div>
                    </div>
                    <div class="license_block-xs-12 license_block-sm-12 license_block-md-6 license_block-lg-7">
                        <div class="faq-block">
                            <div class="help-padge__faq-block-header faq-block__header text-block-black text-block_fs_m text-block_tf_up text-block_color_black">Часто задаваемые вопросы</div>
                            <div class="faq-block__question text-block-blacktext-block_fs_m text-block_fw_bold text-block_color_black">Куда нужно ввести промокод?</div>
                            <div class="faq-block__answer text-block">Промокод вводится на <a href="/profile">странице вашего профиля</a> в форму партнерского кода.</div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Можно ввести несколько промокодов?</div>
                            <div class="faq-block__answer text-block">Нет. Можно ввести и активировать только 1 промокод.</div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Что дает промокод?</div>
                            <div class="faq-block__answer text-block">Все промокоды зачисляют на баланс 5 BYN, которые вы можете использовать для открытия коробок.</div>
                            <div class="help-padge__faq-block-header faq-block__header text-block-black text-block_fs_m text-block_tf_up text-block_color_black">Открытие коробок</div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Как это работает?</div>
                            <div class="faq-block__answer text-block">На сайте расположено 3 коробки-сюрпризов. Открывая коробку вы получаете один из двенадцати реальных предметов,
                                который можете заказать с доставкой на дом или продать. Стоимость открытия коробки всегда одинаковая, независимо от того, какой вам выпал предмет.
                                Таким образом, вы можете получить дорогие и интересные товары по очень низким ценам.</div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Мне точно выпадет какой-то товар?</div>
                            <div class="faq-block__answer text-block">Открывая коробку мы гарантируем, что вы точно получите один из двенадцати товаров. Открытие коробки в Win-Win Box аналогично киндер-сюрпризу, вы всегда получаете свой сюрприз.</div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Для чего нужны жетоны?</div>
                            <div class="faq-block__answer text-block">Жетоны нужны, чтобы участвовать в розыгрыше призов. </div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Как получить жетон?</div>
                            <div class="faq-block__answer text-block">Открыв 5 коробок вы автоматически получаете 1 жетон.</div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Как принять участие в розыгрыше?</div>
                            <div class="faq-block__answer text-block">Чтобы принять участие в розыгреше перейдите в <a href="https://bww.by/contests">"Розыгрыши"</a>. Чем больше жетонов внесено, тем больше шанс на выигрыш.</div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Как открыть коробку и получить товар?</div>
                            <div class="faq-block__answer text-block">
                                <ol>
                                    <li>Пройдите простую регистрацию на сайте.</li>
                                    <li>Пополните баланс на сумму, необходимую для открытия коробки.</li>
                                    <li>Перейдите на страницу открытия коробки и нажмите кнопку «Открыть коробку».</li>
                                    <li>С вашего баланса на сайте будет автоматически списана стоимость открытия коробки.</li>
                                    <li>Подождите пока лента с товарами остановится и определится товар, который выпал именно вам!</li>
                                    <li>Решите, что хотите сделать с товаром - продать или заказать доставку.</li>
                                </ol>
                            </div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Каким образом выпадает товар?</div>
                            <div class="faq-block__answer text-block">Определение товара происходит при помощи генерации случайного числа. Однако шанс зависит от
                                ценности товара. Например, в первой коробке вероятность получения фонарика, спортивных часов или наушников равна 10%, а шанс получить
                                чайник Redmond или спортивную камеру около 3%. Никто заранее не знает когда выпадет тот или иной товар.
                            </div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Можно вернуть ненужный товар и еще раз открыть коробку?</div>
                            <div class="faq-block__answer text-block">Да! После открытия коробки, если вам выпал товар, который у вас уже есть или просто вам не нужен - вы можете его
                                вернуть нажав кнопку “Продать” на странице коробки или в разделе “Мои товары” на странице вашего профиля. Стоимость продажи зависит от ценности товара
                                и может быть как больше, так и меньше стоимости открытия коробки.</div>
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Как заказать доставку товаров?</div>
                            <div class="faq-block__answer text-block">Подробную информацию об условиях и порядке получения товаров вы можете прочитать в на странице «<a href="https://Win-Win Box.ru.net/delivery">Доставка и оплата</a>».
                            <div class="faq-block__question text-block-black text-block_fs_m text-block_fw_bold text-block_color_black">Если передумал открывать коробку?</div>
                            <div class="faq-block__answer text-block">Вы можете оформить возврат внесенных средств при условии, что внесенная сумма не была использована частично или полность, написав в поддержку support-bww@tut.by.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop