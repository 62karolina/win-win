
<?php $__env->startSection('content'); ?>
<!-- /contest -->
<div class="cases-line">
    <div class="container">
        <div class="row cases-row box-cases-row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href="/box/1">
                    <div class="box box_gray-box">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                                <div class="box__bg-layout">
                                    <div class="box__bg-wrapper">
                                        <div class="box__bg box__bg_shadow"><img src="/build/img/box__shadow.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__bg_hov box__bg_red"><img src="/build/img/box__red-hov.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__box box__bg_red"><img src="/build/img/box__red-box.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__bg_hov box__bg_orange"><img src="/build/img/box__orange-hov.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__box box__bg_orange"><img src="/build/img/box__orange-box.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__bg_hov box__bg_blue"><img src="/build/img/box__blue-hov.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__box box__bg_blue"><img src="/build/img/box__blue-box.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__bg_hov box__bg_green"><img src="/build/img/box__green-hov.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__box box__bg_green"><img src="/build/img/box__green-box.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__bg_hov box__bg_gray"><img src="/build/img/box__gray-hov.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__box box__bg_gray"><img src="/build/img/box__gray-box.png" alt="" class="box__bg-img"/></div>
                                    </div>
                                </div>
                                <div class="box__header-wrapper">
                                    <div class="box__header-line">
                                        <div class="box__volume">
                                            <div class="box__volume-text">Коробка</div>
                                            <div class="box__volume-sum">№1</div>
                                        </div>
                                        <div class="box__cost"><?php echo e($case1->price); ?><span class="rouble">p</span></div>
                                    </div>
                                </div>
                                <div class="box__img-wrapper"><img src="http://214010.selcdn.ru/ranbox/box/box1.png" alt="Коробка №1" title="Коробка №1" class="box__img"/></div>
                                <div class="box__button-wrapper">
                                    <button class="box__button">Открыть коробку</button>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-8 hidden-xs hidden-sm">
                                <div class="box__item_header">Коробка содержит <?php echo e($c1); ?> товаров:</div>
                                <?php foreach($item1 as $item): ?>
                                    <div class="box__item box__item_gray" >
                                        <div class="box__item-glow"></div>
                                        <img src="<?php echo e($item->image); ?>" class="box__item-img" style=" width: 70px;height: 70px;"/>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                    </div>
                </a>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href="/box/2">
                    <div class="box box_green-box">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                                <div class="box__bg-layout">
                                    <div class="box__bg-wrapper">
                                        <div class="box__bg box__bg_shadow"><img src="/build/img/box__shadow.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__bg_hov box__bg_red"><img src="/build/img/box__red-hov.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__box box__bg_red"><img src="/build/img/box__red-box.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__bg_hov box__bg_orange"><img src="/build/img/box__orange-hov.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__box box__bg_orange"><img src="/build/img/box__orange-box.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__bg_hov box__bg_blue"><img src="/build/img/box__blue-hov.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__box box__bg_blue"><img src="/build/img/box__blue-box.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__bg_hov box__bg_green"><img src="/build/img/box__green-hov.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__box box__bg_green"><img src="/build/img/box__green-box.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__bg_hov box__bg_gray"><img src="/build/img/box__gray-hov.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__box box__bg_gray"><img src="/build/img/box__gray-box.png" alt="" class="box__bg-img"/></div>
                                    </div>
                                </div>
                                <div class="box__header-wrapper">
                                    <div class="box__header-line">
                                        <div class="box__volume">
                                            <div class="box__volume-text">Коробка</div>
                                            <div class="box__volume-sum">№2</div>
                                        </div>
                                        <div class="box__cost"><?php echo e($case2->price); ?><span class="rouble">p</span></div>
                                    </div>
                                </div>
                                <div class="box__img-wrapper"><img src="http://214010.selcdn.ru/ranbox/box/box2.png" alt="Коробка №2" title="Коробка №2" class="box__img"/></div>
                                <div class="box__button-wrapper">
                                    <button class="box__button">Открыть коробку</button>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-8 hidden-xs hidden-sm">
                                <div class="box__item_header">Коробка содержит <?php echo e($c2); ?> товаров:</div>
                                <?php foreach($item2 as $item): ?>
                                    <div class="box__item box__item_green">
                                        <div class="box__item-glow"></div>
                                        <img src="<?php echo e($item->image); ?>" class="box__item-img" style=" width: 70px;height: 70px;"/>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                    </div>
                </a>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href="/box/3">
                    <div class="box box_red-box">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                                <div class="box__bg-layout">
                                    <div class="box__bg-wrapper">
                                        <div class="box__bg box__bg_shadow"><img src="/build/img/box__shadow.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__bg_hov box__bg_red"><img src="/build/img/box__red-hov.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__box box__bg_red"><img src="/build/img/box__red-box.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__bg_hov box__bg_orange"><img src="/build/img/box__orange-hov.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__box box__bg_orange"><img src="/build/img/box__orange-box.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__bg_hov box__bg_blue"><img src="/build/img/box__blue-hov.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__box box__bg_blue"><img src="/build/img/box__blue-box.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__bg_hov box__bg_green"><img src="/build/img/box__green-hov.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__box box__bg_green"><img src="/build/img/box__green-box.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__bg_hov box__bg_gray"><img src="/build/img/box__gray-hov.png" alt="" class="box__bg-img"/></div>
                                        <div class="box__bg box__box box__bg_gray"><img src="/build/img/box__gray-box.png" alt="" class="box__bg-img"/></div>
                                    </div>
                                </div>
                                <div class="box__header-wrapper">
                                    <div class="box__header-line">
                                        <div class="box__volume">
                                            <div class="box__volume-text">Коробка</div>
                                            <div class="box__volume-sum">№3</div>
                                        </div>
                                        <div class="box__cost"><?php echo e($case3->price); ?><span class="rouble">p</span></div>
                                    </div>
                                </div>
                                <div class="box__img-wrapper"><img src="http://214010.selcdn.ru/ranbox/box/box3.png" alt="Коробка №3" title="Коробка №3" class="box__img"/></div>
                                <div class="box__button-wrapper">
                                    <button class="box__button">Открыть коробку</button>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-8 hidden-xs hidden-sm">
                                <div class="box__item_header">Коробка содержит <?php echo e($c3); ?> товаров:</div>
                                <?php foreach($item3 as $item): ?>
                                    <div class="box__item box__item_red">
                                        <div class="box__item-glow"></div>
                                        <img src="<?php echo e($item->image); ?>" class="box__item-img" style=" width: 70px;height: 70px;" />
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="advantages-block">
    <div class="container">
        <div class="advantages-block__header">
            <div class="advantages-block__header-line"></div>
            <div class="advantages-block__header-text">Наши<span>гарантии</span></div>
            <div class="advantages-block__header-line"></div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="advantages-block__advantages-wrapper">
                    <div class="advantages advantages_inline">
                        <div class="advantages__icon-wrapper">
                            <div class="advantages__icon-glow"></div>
                            <div class="advantages__icon-block"><img src="/build/img/advantages__icon_1.png" alt="" class="advantages__icon"/></div>
                        </div>
                        <div class="advantages__header">Полная прозрачность</div>
                        <div class="advantages__text">У нас вы можете посмотреть все. Кто получил, что получил и когда. Каждый профиль снабжен ссылкой на контакт человека в одной из трех социальных сетей.</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="advantages-block__advantages-wrapper">
                    <div class="advantages advantages_inline">
                        <div class="advantages__icon-wrapper">
                            <div class="advantages__icon-glow"></div>
                            <div class="advantages__icon-block"><img src="/build/img/advantages__icon_2.png" alt="" class="advantages__icon"/></div>
                        </div>
                        <div class="advantages__header">Гарантия низких цен</div>
                        <div class="advantages__text">
                            Благодаря крупным оптовым закупкам цены в нашем магазине на все товары одни из самых низких на рынке.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="advantages-block__advantages-wrapper">
                    <div class="advantages advantages_inline">
                        <div class="advantages__icon-wrapper">
                            <div class="advantages__icon-glow"></div>
                            <div class="advantages__icon-block"><img src="/build/img/advantages__icon_3.png" alt="" class="advantages__icon"/></div>
                        </div>
                        <div class="advantages__header">Проверенные товары</div>
                        <div class="advantages__text">Мы выкладываем только проверенные товары от надежных поставщиков. Каждый товар тестируется перед отправкой и снабжается всей сопровождающей документацией.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>