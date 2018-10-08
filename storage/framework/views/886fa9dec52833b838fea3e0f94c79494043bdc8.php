
<?php $__env->startSection('content'); ?>
    <script>
        <?php if(Auth::guest()): ?>
            var login = 0;
        <?php else: ?>
            var login = <?php echo e(Auth::user()->id); ?>;
        <?php endif; ?>
    </script>
    <div class="content">
        <div class="container">
            <div class="content-button-row visible-xs visible-sm">
                <button data-toggle="add-cash" class="lk-tabs__lk-cashin content-button-row__button button-rounding button-rounding_med button-rounding_light modal-toggle">Пополнить</button>
                <div class="balance-block">
                    Баланс:
                    &nbsp;<span><?php echo e(Auth::user()->money); ?><span class="rouble">p</span></span>
                </div>
            </div>
            <div class="content-button-row lk-tabs">
                <button data-toggleup="#game-history, #finance, #affiliate" data-toggledown="#profile-row" class="lk-tabs__lk-tab content-button-row__button button-rounding button-rounding_med button-rounding_dark button-rounding_disabled">Профиль</button>
                <button data-toggleup="#profile-row, #finance, #affiliate" data-toggledown="#game-history" class="lk-tabs__lk-tab content-button-row__button button-rounding button-rounding_med button-rounding_trans-dark">Мои товары</button>
                <button data-toggleup="#profile-row, #game-history, #affiliate" data-toggledown="#finance" class="lk-tabs__lk-tab content-button-row__button button-rounding button-rounding_med button-rounding_trans-dark">Мои доставки</button>
                <button data-toggleup="#profile-row, #game-history, #finance" data-toggledown="#affiliate" id="affiliate-tab" class="lk-tabs__lk-tab content-button-row__button button-rounding button-rounding_med button-rounding_trans-dark">Партнёрская программа</button>
                <button data-toggle="add-cash" class="modal-toggle lk-tabs__lk-cashin content-button-row__button content-button-row__button_right button-rounding button-rounding_med button-rounding_light hidden-xs hidden-sm">Пополнить</button>
                <div class="balance-block content-button-row__button_right hidden-xs hidden-sm">
                    Баланс:
                    &nbsp;<span><?php echo e(Auth::user()->money); ?><span class="rouble">p</span></span>
                </div>
            </div>
        </div>
        <div id="profile-row" class="lk-block profile-row">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 visible-xs">
                        <div class="profile-row__user-avatar">
                            <div class="profile-row__user-avatar-wrapper">
                                <img src="<?php echo e(Auth::user()->avatar); ?>" alt="<?php echo e(Auth::user()->username); ?>" class="profile-row__user-avatar-img"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="profile-row__user">
                            <div class="profile-row__user-avatar hidden-xs">
                                <div class="profile-row__user-avatar-wrapper"><img src="<?php echo e(Auth::user()->avatar); ?>" alt="<?php echo e(Auth::user()->username); ?>" class="profile-row__user-avatar-img"></div>
                            </div>
                            <div class="profile-row__user-info">
                                <div class="profile-row__user-name"><?php echo e(Auth::user()->username); ?></div><br>


                                <div class="profile-row__logout"><a href="/logout" class="profile-row__logout-button">Выйти</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
                        <div class="profile-row__user-stat-row">
                            <div class="profile-row__user-stat-element"><img src="/build/img/stat-icon__group-cases.png" alt="normal cases" class="profile-row__user-stat-icon">
                                <div class="profile-row__user-stat-text">
                                    Открыто коробок:
                                    &nbsp;<span><?php echo e(Auth::user()->open_box); ?></span>
                                </div>
                            </div>
                            <div class="profile-row__user-stat-element"><img src="/build/img/stat-icon__normal-cases.png" alt="normal cases" class="profile-row__user-stat-icon">
                                <div class="profile-row__user-stat-text">Пригласил друзей:</div>
                                <div class="profile-row__user-stat-text"><span><?php echo e($c); ?></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="dark-card">
                            <div class="dark-card__header text-block text-block_fs_m text-block_tf_up text-block_fw_bold">
                                У вас есть
                                &nbsp;<span class="yellow">партнёрский код?</span>
                            </div>
                            <div class="text-block">Введите код и получите 50<span class="rouble">p</span>&nbsp;
                                на счет прямо сейчас!
                            </div>
                            <div class="text-block visible-lg">&nbsp;</div>
                            <div class="text-block visible-lg">&nbsp;</div>
                            <div class="row">
                                <div class="dark-card__input-block-col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="dark-card__input-block input-block">
                                        <input class="dark-card__input input-block__input input-block__input_right-button" value="" id="promocode_value">
                                        <button class="input-block__button input-block__button_float-xs input-block__button_right" id="promocode_btn">OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="dark-card">
                            <div class="dark-card__header text-block text-block_fs_m text-block_tf_up text-block_fw_bold">
                                Приглашайте друзей и
                                &nbsp;<span class="yellow">зарабатывайте 5% от всех пополнений!</span>
                            </div>
                            <div class="text-block">Отправьте свой уникальный код друзьям, и получайте по 5% от каждого пополнения баланса другом!</div>
                            <div class="row">
                                <div class="dark-card__input-block-col col-xs-12 col-sm-5 col-md-12 col-lg-5">
                                    <div class="input-block">
                                        <input value="<?php echo e(Auth::user()->ref_code); ?>" class="dark-card__input input-block__input">
                                    </div>
                                </div>
                                <div class="dark-card__input-block-col col-xs-4 col-sm-2 col-md-4 col-lg-2">
                                    <div class="dark-card__stat-block">
                                        <div class="text-block text-block_color_gray text-block_align_center">Пригласил:</div>
                                        <div class="text-block text-block_align_center text-block_fw_bold"><?php echo e($c); ?></div>
                                    </div>
                                </div>
                                <div class="dark-card__input-block-col col-xs-4 col-sm-3 col-md-4 col-lg-3">
                                    <div class="dark-card__link text-block text-block_align_center"><a href="#" onclick="$('#affiliate-tab').click();" class="text-block__link">Подробнее</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dark-card address">
                    <div class="address__header text-block text-block_align_center text-block_fs_b text-block_tf_up">Анкета для доставки товаров: [Не менять до получение заказа] </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="text-block text-block_tf_up address__input-header">Фамилия Имя Отчество</div>
                            <div class="input-block">
                                <input class="input-block__input address__input" name="profile_name" value="<?php echo e($name); ?>" data-error="Необходимо заполнить фамилию имя и отчество" title="">
                            </div>
                            <div class="text-block text-block_tf_up address__input-header">Страна</div>
                            <div class="input-block">
                                <input class="input-block__input address__input" name="profile_country" value="<?php echo e($country); ?>" data-error="Необходимо заполнить страну" title="">
                            </div>
                            <div class="text-block text-block_tf_up address__input-header">Город</div>
                            <div class="input-block">
                                <input class="input-block__input address__input" name="profile_city" value="<?php echo e($city); ?>" data-error="Необходимо заполнить город" title="">
                            </div>
                            <div class="text-block text-block_tf_up address__input-header">Индекс</div>
                            <div class="input-block">
                                <input class="input-block__input address__input" name="profile_zip" value="<?php echo e($postalcode); ?>" data-error="Необходимо заполнить индекс" title="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="text-block text-block_tf_up address__input-header">Улица</div>
                            <div class="input-block">
                                <input class="input-block__input address__input" name="profile_street" value="<?php echo e($street); ?>" data-error="Необходимо заполнить улицу" title="">
                            </div>
                            <div class="text-block text-block_tf_up address__input-header">Дом, корпус, строение</div>
                            <div class="input-block">
                                <input class="input-block__input address__input" name="profile_house" value="<?php echo e($dom); ?>" data-error="Необходимо заполнить дом, корпус и строение" title="">
                            </div>
                            <div class="text-block text-block_tf_up address__input-header">Квартира / Офис</div>
                            <div class="input-block">
                                <input class="input-block__input address__input" name="profile_flat" value="<?php echo e($kvartira); ?>" data-error="Необходимо заполнить квартиру или офис" title="">
                            </div>
                            <div class="address__button-line">
                                <button class="address__button button-rounding button-rounding_big button-rounding_long button-rounding_light" id="btn-profile-delivery-save">Сохранить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="game-history" class="lk-block game-history">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lk-block_header text-block text-block_align_center text-block_fs_b text-block_tf_up text-block_fw_bold">Корзина доставки</div>
                    </div>
                </div>
                <div class="row">
                    <div class="box__cart-line col-xs-12">
                        <div class="box box_nobg box_gray-box box_cart" data-free="1">
                            <div class="box__bg-layout">
                                <div class="box__bg-wrapper">
                                    <div class="box__bg box__bg_hov box__bg_red"><img src="/build/img/box__red-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_red box__bg-box"><img src="/build/img/box__red-box_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__bg_hov box__bg_orange"><img src="/build/img/box__orange-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_orange box__bg-box"><img src="/build/img/box__orange-box_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__bg_hov box__bg_blue"><img src="/build/img/box__blue-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_blue box__bg-box"><img src="/build/img/box__blue-box_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__bg_hov box__bg_green"><img src="/build/img/box__green-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_green box__bg-box"><img src="/build/img/box__green-box_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__bg_hov box__bg_gray"><img src="/build/img/box__gray-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_gray box__bg-box"><img src="/build/img/box__gray-box_min.png" alt="" class="box__bg-img"></div>
                                </div>
                            </div>
                            <div class="box__header-wrapper">
                                <div class="box__header-line">
                                    <div class="box__name"></div>
                                </div>
                            </div>
                            <div class="box__img-wrapper"></div>
                            <div class="box__float-button-wrapper box__float-button-wrapper_top">
                                <button class="box__float-button box__float-button_red box__float-button_right"><img src="/build/img/cancel-icon.png" alt="" title="Удалить из списка" class="box__float-button-img"></button>
                            </div>
                        </div>
                        <div class="box box_nobg box_gray-box box_cart" data-free="1">
                            <div class="box__bg-layout">
                                <div class="box__bg-wrapper">
                                    <div class="box__bg box__bg_hov box__bg_red"><img src="/build/img/box__red-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_red box__bg-box"><img src="/build/img/box__red-box_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__bg_hov box__bg_orange"><img src="/build/img/box__orange-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_orange box__bg-box"><img src="/build/img/box__orange-box_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__bg_hov box__bg_blue"><img src="/build/img/box__blue-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_blue box__bg-box"><img src="/build/img/box__blue-box_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__bg_hov box__bg_green"><img src="/build/img/box__green-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_green box__bg-box"><img src="/build/img/box__green-box_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__bg_hov box__bg_gray"><img src="/build/img/box__gray-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_gray box__bg-box"><img src="/build/img/box__gray-box_min.png" alt="" class="box__bg-img"></div>
                                </div>
                            </div>
                            <div class="box__header-wrapper">
                                <div class="box__header-line">
                                    <div class="box__name"></div>
                                </div>
                            </div>
                            <div class="box__img-wrapper"></div>
                            <div class="box__float-button-wrapper box__float-button-wrapper_top">
                                <button class="box__float-button box__float-button_red box__float-button_right"><img src="/build/img/cancel-icon.png" alt="" title="Удалить из списка" class="box__float-button-img"></button>
                            </div>
                        </div>
                        <div class="box box_nobg box_gray-box box_cart" data-free="1">
                            <div class="box__bg-layout">
                                <div class="box__bg-wrapper">
                                    <div class="box__bg box__bg_hov box__bg_red"><img src="/build/img/box__red-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_red box__bg-box"><img src="/build/img/box__red-box_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__bg_hov box__bg_orange"><img src="/build/img/box__orange-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_orange box__bg-box"><img src="/build/img/box__orange-box_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__bg_hov box__bg_blue"><img src="/build/img/box__blue-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_blue box__bg-box"><img src="/build/img/box__blue-box_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__bg_hov box__bg_green"><img src="/build/img/box__green-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_green box__bg-box"><img src="/build/img/box__green-box_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__bg_hov box__bg_gray"><img src="/build/img/box__gray-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_gray box__bg-box"><img src="/build/img/box__gray-box_min.png" alt="" class="box__bg-img"></div>
                                </div>
                            </div>
                            <div class="box__header-wrapper">
                                <div class="box__header-line">
                                    <div class="box__name"></div>
                                </div>
                            </div>
                            <div class="box__img-wrapper"></div>
                            <div class="box__float-button-wrapper box__float-button-wrapper_top">
                                <button class="box__float-button box__float-button_red box__float-button_right"><img src="/build/img/cancel-icon.png" alt="" title="Удалить из списка" class="box__float-button-img"></button>
                            </div>
                        </div>
                        <div class="box box_nobg box_gray-box box_cart" data-free="1">
                            <div class="box__bg-layout">
                                <div class="box__bg-wrapper">
                                    <div class="box__bg box__bg_hov box__bg_red"><img src="/build/img/box__red-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_red box__bg-box"><img src="/build/img/box__red-box_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__bg_hov box__bg_orange"><img src="/build/img/box__orange-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_orange box__bg-box"><img src="/build/img/box__orange-box_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__bg_hov box__bg_blue"><img src="/build/img/box__blue-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_blue box__bg-box"><img src="/build/img/box__blue-box_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__bg_hov box__bg_green"><img src="/build/img/box__green-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_green box__bg-box"><img src="/build/img/box__green-box_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__bg_hov box__bg_gray"><img src="/build/img/box__gray-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_gray box__bg-box"><img src="/build/img/box__gray-box_min.png" alt="" class="box__bg-img"></div>
                                </div>
                            </div>
                            <div class="box__header-wrapper">
                                <div class="box__header-line">
                                    <div class="box__name"></div>
                                </div>
                            </div>
                            <div class="box__img-wrapper"></div>
                            <div class="box__float-button-wrapper box__float-button-wrapper_top">
                                <button class="box__float-button box__float-button_red box__float-button_right"><img src="/build/img/cancel-icon.png" alt="" title="Удалить из списка" class="box__float-button-img"></button>
                            </div>
                        </div>
                        <div class="box box_nobg box_gray-box box_cart" data-free="1">
                            <div class="box__bg-layout">
                                <div class="box__bg-wrapper">
                                    <div class="box__bg box__bg_hov box__bg_red"><img src="/build/img/box__red-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_red box__bg-box"><img src="/build/img/box__red-box_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__bg_hov box__bg_orange"><img src="/build/img/box__orange-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_orange box__bg-box"><img src="/build/img/box__orange-box_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__bg_hov box__bg_blue"><img src="/build/img/box__blue-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_blue box__bg-box"><img src="/build/img/box__blue-box_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__bg_hov box__bg_green"><img src="/build/img/box__green-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_green box__bg-box"><img src="/build/img/box__green-box_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__bg_hov box__bg_gray"><img src="/build/img/box__gray-hov_min.png" alt="" class="box__bg-img"></div>
                                    <div class="box__bg box__box box__bg_gray box__bg-box"><img src="/build/img/box__gray-box_min.png" alt="" class="box__bg-img"></div>
                                </div>
                            </div>
                            <div class="box__header-wrapper">
                                <div class="box__header-line">
                                    <div class="box__name"></div>
                                </div>
                            </div>
                            <div class="box__img-wrapper"></div>
                            <div class="box__float-button-wrapper box__float-button-wrapper_top">
                                <button class="box__float-button box__float-button_red box__float-button_right"><img src="/build/img/cancel-icon.png" alt="" title="Удалить из списка" class="box__float-button-img"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box__button-delivery-line">
                            <button class="box__button-delivery button-rounding button-rounding_big button-rounding_long button-rounding_light">Заказать доставку за 300 <span class="rouble">p</span></button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="lk-block_header text-block text-block_align_center text-block_fs_b text-block_tf_up text-block_fw_bold">Мои товары</div>
                    </div>
                </div>
                <div class="row cases-history">
                    <?php foreach($items as $item): ?>
                        <div class="box-select col-xs-12 col-sm-6 col-md-4 col-lg-3" id="box-<?php echo e($item->id); ?>">
                            <a href="#">
                                <div class="box box_nobg box_gray-box">
                                    <div class="box__bg-layout">
                                        <div class="box__bg-wrapper">
                                            <div class="box__bg box__bg_hov box__bg_red"><img src="/build/img/box__red-hov_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__box box__bg_red box__bg-box"><img src="/build/img/box__red-box_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__bg_hov box__bg_orange"><img src="/build/img/box__orange-hov_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__box box__bg_orange box__bg-box"><img src="/build/img/box__orange-box_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__bg_hov box__bg_blue"><img src="/build/img/box__blue-hov_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__box box__bg_blue box__bg-box"><img src="/build/img/box__blue-box_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__bg_hov box__bg_green"><img src="/build/img/box__green-hov_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__box box__bg_green box__bg-box"><img src="/build/img/box__green-box_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__bg_hov box__bg_gray"><img src="/build/img/box__gray-hov_min.png" alt="" class="box__bg-img"></div>
                                            <div class="box__bg box__box box__bg_gray box__bg-box"><img src="/build/img/box__gray-box_min.png" alt="" class="box__bg-img"></div>
                                        </div>
                                    </div>
                                    <div class="box__header-wrapper">
                                        <div class="box__header-line">
                                            <div class="box__name"><?php echo e($item->name); ?></div>
                                        </div>
                                    </div>
                                    <div class="box__img-wrapper"><img src="<?php echo e($item->image); ?>" alt="<?php echo e($item->name); ?>" title="<?php echo e($item->name); ?>" class="box__img"></div>
                                    <div class="box__float-button-wrapper box__float-button-wrapper_bottom">
                                        <button class="sale-box box__float-button" data-id="<?php echo e($item->id); ?>" data-title="<?php echo e($item->name); ?>" data-price="<?php echo e($item->price); ?>">
                                            <img src="/build/img/rub-icon.png" alt="" title="Продать" class="box__float-button-img">
                                        </button>
                                        <button class="add-cart box__float-button box__float-button_right" data-id="<?php echo e($item->id); ?>" data-image="<?php echo e($item->image); ?>" data-title="<?php echo e($item->name); ?>">
                                            <img src="/build/img/cart-icon.png" alt="" title="Доставить" class="box__float-button-img">
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
        <div id="finance" class="lk-block finance">
            <div class="container">

                <div class="row">
                    <div class="table-col col-xs-12">
                        <table class="finance__table main-table">
                            <thead>
                            <tr>

                                <th class="main-table__th main-table__th_left" style="    width: 30%;">Товары</th>
                                <th class="main-table__th main-table__th_left" style="    width: 40%;">Адрес</th>
                                <th class="main-table__th main-table__th_center"style="    width: 20%;">Трекинг-код</th>
                                <th class="main-table__th main-table__th_center"style="    width: 10%;">Дата оформления</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>

                    <?php if($deliver == 'null'): ?>

                    <?php else: ?>
                        <?php foreach($deliver as $deliver1): ?>
                            <div class="table-col col-xs-12">
                                <table class="finance__table main-table">
                                    <thead>
                                    <tr>

                                        <th class="main-table__th main-table__th_left" style="    width: 30%;">
                                            <?php if($deliver1->item1 != 'null'): ?>
                                                <?php echo e($deliver1->item1); ?><br>
                                            <?php endif; ?>
                                            <?php if($deliver1->item2 != 'null'): ?>
                                                    <?php echo e($deliver1->item2); ?><br>
                                            <?php endif; ?>
                                            <?php if($deliver1->item3 != 'null'): ?>
                                                    <?php echo e($deliver1->item3); ?><br>
                                            <?php endif; ?>
                                            <?php if($deliver1->item4 != 'null'): ?>
                                                    <?php echo e($deliver1->item4); ?><br>
                                            <?php endif; ?>
                                            <?php if($deliver1->item5 != 'null'): ?>
                                                    <?php echo e($deliver1->item5); ?><br>
                                             <?php endif; ?>
                                        </th>
                                        <th class="main-table__th main-table__th_left" style="    width: 40%;">
                                            Имя: <?php echo e($deliver1->name); ?><br>
                                            Страна: <?php echo e($deliver1->country); ?><br>
                                            Город: <?php echo e($deliver1->city); ?><br>
                                            Индекс: <?php echo e($deliver1->postalcode); ?><br>
                                            Дом: <?php echo e($deliver1->dom); ?><br>
                                            Квартира: <?php echo e($deliver1->kvartira); ?><br>
                                            Улица: <?php echo e($deliver1->street); ?><br>
                                        </th>
                                        <th class="main-table__th main-table__th_center" style="    width: 20%;">
                                            <?php if($deliver1->tracking != 'null'): ?>
                                                <?php echo e($deliver1->tracking); ?>

                                            <?php else: ?>
                                                Ожидание
                                            <?php endif; ?>
                                        </th>
                                        <th class="main-table__th main-table__th_center"style="    width: 10%;"><?php echo e($deliver1->created_at); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div id="affiliate" class="lk-block affiliate">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="lk-block__header text-block text-block_align_center text-block_fs_b text-block_tf_up text-block_fw_bold">Партнёрская программа</div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="profile-affiliate dark-card">
                            <div class="dark-card__header text-block text-block_fs_m text-block_tf_up text-block_fw_bold">
                                Приглашай друзей и
                                &nbsp;<span class="yellow">получай 5% от всех пополнений!</span>
                            </div>
                            <div class="text-block">Моментально, деньги сразу доступны для выплаты.</div>
                            <div class="row">
                                <div class="dark-card__input-block-col col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="dark-card__input-block input-block">
                                        <div class="input-block__header text-block">Твой промо-код:</div>
                                        <input id="change-kod__input" value="<?php echo e(Auth::user()->ref_code); ?>" class="dark-card__input input-block__input input-block__input_left-align input-block__input_right-button-b">

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="instruction-affiliate light-border-card">
                            <div class="light-border-card__header text-block text-block_fs_m text-block_tf_up text-block_fw_bold">Инструкция:</div>
                            <div class="light-border-card__element"><img src="/build/img/affiliate-instruction__icon_1.png" alt="" class="light-border-card__element-icon">
                                <div class="light-border-card__element-text text-block">Распространяй свой промо-код и получай 5% от всех пополнений игроков, которые введут его при регистрации. За ввод твоего промо-кода игрок получит 50 рублей!</div>
                            </div>

                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="partner-list">
                            <div class="partner-list__header text-block text-block_fs_m text-block_tf_up text-block_fw_bold">Привлечённые игроки:
                                <div class="hidden-xs partner-list__counter text-block text-block_color_gray">
                                    Пригласил:
                                    &nbsp;<span class="white"><?php echo e($c); ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="table-col col-xs-12">
                                    <table class="partner-list__table main-table">
                                        <thead>
                                        <tr>
                                            <th class="main-table__th main-table__th_left">Игрок</th>
                                            <th class="main-table__th main-table__th_center">Пополнения</th>
                                            <th class="main-table__th main-table__th_center">Сумма</th>
                                            <th class="main-table__th main-table__th_center">Дата</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>