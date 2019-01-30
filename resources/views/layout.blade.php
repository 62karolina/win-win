
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="csrf-token" content="gJIjuNEOWpq3ZRaykxB85DZ24mB3wQTYR3cgj5tl">

    <title>Win-Win Box - играй и выигрывай</title>

    <link rel="stylesheet" href="/build/css/all-20597ee14f.css">


    
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
<div class="main-wrapper">
    <div class="header">
        <div class="container">
            <div class="header-row">
                <div class="header-row__element_static">
                    <div class="logo-wrapper visible-xs visible-lg"><a href="/"><img src="/build/img/logo.png" alt="Ranbox" class="logo-wrapper__img"/></a></div>
                    <div class="logo-wrapper hidden-xs hidden-lg"><a href="/"><img src="/build/img/logo_min-2.png" alt="Ranbox" class="logo-wrapper__img"/></a></div>
                </div>
                <div class="header-row__element_static header-row__element_static_small">
                    <div class="stat-line hidden-line">

                        <div class="stat-line__element">
                            <div class="stat-line__value counter-user" > {{PagesController::getStats()[0]}}</div>
                            <div class="stat-line__key">Пользователей</div>
                        </div>
                        <div class="stat-line__element">
                            <div class="stat-line__value counter-case">{{PagesController::getStats()[1]}}</div>
                            <div class="stat-line__key">Открыто коробок</div>
                        </div>
                    </div>
                </div>
                <div class="header-row__element_rubber">
                    <nav class="nav-line hidden-sm hidden-xs">
                        <div class="nav-line__element">
                            <a href="/">
                                <div class="nav-line__link  nav-line__link " >
                                    Коробки
                                </div>
                            </a>
                        </div>
                        <div class="nav-line__element">
                             <a href="/contests">
                                 <div class="nav-line__link  nav-line__link " >
                                     Конкурсы
                                 </div>
                             </a>
                        </div>
                        <div class="nav-line__element">
                            <a href="/delivery">
                                <div class="nav-line__link " >
                                    Доставка
                                </div>
                            </a>
                        </div>
<!--                        <div class="nav-line__element">
                            <a href="/opinions">
                                <div class="nav-line__link " >
                                    Отзывы
                                </div>
                            </a>
                        </div>-->
                        <div class="nav-line__element">
                            <a href="/help">
                                <div class="nav-line__link " >
                                    Помощь
                                </div>
                            </a>
                        </div>
                    </nav>
                </div>
                <div class="header-row__element_static">
                    @if(Auth::guest())
                        <div style = "display:inline-block;" class="header-row__login-button">
                            <button class="button-rounding button-rounding_big button-rounding_light modal-toggle" data-toggle="register">Регистрация</button>
                        </div>
                        <div style = "display:inline-block;" class="header-row__login-button">
                            <button class="button-rounding button-rounding_big button-rounding_light modal-toggle" data-toggle="login">Вход</button>
                        </div>
                    @else
                        <div class="user-block">
                            <div class="user-block__ava-wrapper user-block__ava-wrapper_gray-border hidden-md">
                                <div class="circle-ava"><a href="/profile"><img src="{{Auth::user()->avatar}}" alt="ava" class="circle-ava__img"></a></div>
                            </div>
                            <div class="user-block__info-wrapper hidden-xs"><a href="/profile" class="user-block__name">Мой профиль</a>
                                <div class="user-block__balance"><img src="/build/img/money__icon_yellow.png" alt="money" class="user-block__icon"><span><span class="user-balance">{{Auth::user()->money}}</span><span class="rouble">BYN</span></span></div>
                                <div class="user-block__button-wrapper">
                                    <button data-toggle="add-cash" class="modal-toggle user-block__button user-block__button_yellow-shadow"><img src="/build/img/cash-in__icon.png" alt="cashin" class="user-block__button-img"></button>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="sss">
                <input type="checkbox" id="hmt" class="hidden-menu-ticker">
                <label class="btn-menu" for="hmt">
                  <span class="first"></span>
                  <span class="second"></span>
                  <span class="third"></span>
                </label>
                <ul class="hidden-menu">
                  <li class="hidden-menu_li"><a href="/">Главная</a></li>
                  <li class="hidden-menu_li"><a href="/contests">Конкурсы</a></li>
                  <li class="hidden-menu_li"><a href="/delivery">Доставка</a></li>
<!--                  <li class="hidden-menu_li"><a href="/opinions">Отзывы</a></li>-->
                  <li class="hidden-menu_li"><a href="/help">Помощь</a></li>
                </ul>
                </div>
            </div>
            <nav class="nav-line nav-line_pad visible-sm">
                <div class="nav-line__element">
                    <a href="/">
                        <div class="nav-line__link  nav-line__link_active " >
                            Коробки
                        </div>
                    </a>
                </div>
                 <div class="nav-line__element">
                    <a href="/contests">
                        <div class="nav-line__link  nav-line__link " >
                             Конкурсы
                        </div>
                    </a>
                 </div>
                <div class="nav-line__element">
                    <a href="/delivery">
                        <div class="nav-line__link " >
                            Доставка
                        </div>
                    </a>
                </div>
<!--                <div class="nav-line__element">
                    <a href="/opinions">
                        <div class="nav-line__link " >
                            Отзывы
                        </div>
                    </a>
                </div>-->
                <div class="nav-line__element">
                    <a href="/help">
                        <div class="nav-line__link " >
                            Помощь
                        </div>
                    </a>
                </div>
            </nav>
            <div class="header-drop-menu visible-xs">
                <nav class="header-drop-menu__wrapper">
                    <div class="header-drop-menu__element header-drop-menu__element_rubber">
                        @if(Auth::guest())
                            <div class="header-row__login-button hidden-xs">
                                <button class="button-rounding button-rounding_big button-rounding_light modal-toggle" data-toggle="login">Вход</button>
                            </div>
                        @else
                            <div class="user-block">
                                <div class="user-block__ava-wrapper user-block__ava-wrapper_gray-border hidden-md">
                                    <div class="circle-ava"><a href="/profile"><img src="{{Auth::user()->avatar}}" alt="ava" class="circle-ava__img"></a></div>
                                </div>
                                <div class="user-block__info-wrapper hidden-xs"><a href="/profile" class="user-block__name">Мой профиль</a>
                                    <div class="user-block__balance"><img src="/build/img/money__icon_yellow.png" alt="money" class="user-block__icon"><span><span class="user-balance">{{Auth::user()->money}}</span><span class="rouble">p</span></span></div>
                                    <div class="user-block__button-wrapper">
                                        <button data-toggle="add-cash" class="modal-toggle user-block__button user-block__button_yellow-shadow"><img src="/build/img/cash-in__icon.png" alt="cashin" class="user-block__button-img"></button>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="header-drop-menu__element">
                        <a href="/">
                            <div class="header-drop-menu__link  header-drop-menu__link_active " >
                                Коробки
                            </div>
                        </a>
                    </div>
                     <div class="nav-line__element">
                         <a href="/contests">
                             <div class="nav-line__link  nav-line__link " >
                                 Конкурсы
                             </div>
                         </a>
                     </div>
                    <div class="header-drop-menu__element">
                        <a href="/shop">
                            <div class="header-drop-menu__link "  style="color: #f4bc2a" >
                                Магазин
                            </div>
                        </a>
                    </div>
                    <div class="header-drop-menu__element">
                        <a href="/delivery">
                            <div class="header-drop-menu__link " >
                                Доставка
                            </div>
                        </a>
                    </div>
<!--                    <div class="header-drop-menu__element">
                        <a href="/opinions">
                            <div class="header-drop-menu__link " >
                                Отзывы
                            </div>
                        </a>
                    </div>-->
                    <div class="header-drop-menu__element">
                        <a href="/help">
                            <div class="header-drop-menu__link " >
                                Помощь
                            </div>
                        </a>
                    </div>
                </nav>
            </div>
                <div class="stat-line stat-line_mobile">

                    <div class="stat-line__element">
                        <div class="stat-line__value counter-user" data-value="364534">{{PagesController::getStats()[0]}}</div>
                        <div class="stat-line__key">Пользователей</div>
                    </div>
                    <div class="stat-line__element">
                        <div class="stat-line__value counter-case" data-value="969922">{{PagesController::getStats()[1]}}</div>
                        <div class="stat-line__key">Открыто коробок</div>
                    </div>
                </div>
        </div>
    </div>            <div class="live-win">
        <div class="container">
            <div class="live-win__wrapper">

                <div class="live-win__block-shadow_right"></div>    
                <div class="live-win__block-shadow_left"></div>
                <div class="live-win__coins-wrapper">
                    <div class="coin-block-min coin-block-min__new_min"></div>
                    <div class="coin-block-min coin-block-min__new"></div>
                </div>
            </div>
        </div>
    </div>            <div class="content">
    @yield('content')
    <!-- contest -->

    </div>
    <div class="footer-wrapper">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-md-6 col-lg-7 hidden-xs">
                        <div class="footer__pay-system-header text-block text-block_tf_up text-block_color_gray text-block_fs_m text-block_fw_bold">Мы принимаем</div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-6 col-lg-5">
                        <nav class="nav-line footer__nav">
                            <div class="nav-line__element footer__nav-element">
                                <a href="/">
                                    <div class="nav-line__link  nav-line__link_active " >
                                        Коробки
                                    </div>
                                </a>
                            </div>
                             <div class="nav-line__element">
                                <a href="/contests">
                                     <div class="nav-line__link  nav-line__link " >
                                         Конкурсы
                                     </div>
                                </a>
                             </div>
                            <div class="nav-line__element footer__nav-element">
                                <a href="/delivery">
                                    <div class="nav-line__link " >
                                        Доставка
                                    </div>
                                </a>
                            </div>
                        <!--   <div class="nav-line__element footer__nav-element">
                                <a href="/opinions">
                                    <div class="nav-line__link " >
                                        Отзывы
                                    </div>
                                </a>
                            </div> -->
                            <div class="nav-line__element footer__nav-element">
                                <a href="/help">
                                    <div class="nav-line__link " >
                                        Помощь
                                    </div>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="row visible-xs">
                    <div class="col-xs-12">
                        <div class="footer__pay-system-header text-block text-block_tf_up text-block_color_gray text-block_fs_m text-block_fw_bold text-block_align_center">Мы принимаем</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-5 col-md-6 col-lg-4">
                        <div class="pay-system">
                            <div class="pay-system__img-wrapper"><img src="/build/img/pay-icon_mc.png" alt="MasterCard" title="MasterCard" class="pay-system__img"/></div>
                            <div class="pay-system__img-wrapper"><img src="/build/img/pay-icon_visa.png" alt="Visa" title="Visa" class="pay-system__img"/></div>
                           {{-- <div class="pay-system__img-wrapper"><img src="/build/img/pay-icon_ym.png" alt="Яндекс.Деньги" title="Яндекс.Деньги" class="pay-system__img"/></div>
                            <div class="pay-system__img-wrapper"><img src="/build/img/pay-icon_qiwi.png" alt="Qiwi" title="Qiwi" class="pay-system__img"/></div>
                            <div class="pay-system__img-wrapper"><img src="/build/img/pay-icon_mts.png" alt="МТС" title="МТС" class="pay-system__img"/></div>
                            <div class="pay-system__img-wrapper"><img src="/build/img/pay-icon_tele2.png" alt="Tele2" title="Tele2" class="pay-system__img"/></div>
                            <div class="pay-system__img-wrapper"><img src="/build/img/pay-icon_bee.png" alt="Beeline" title="Beeline" class="pay-system__img"/></div> --}}
                        </div>
                        <div class="hidden"><a href="//www.free-kassa.com/"><img src="//www.free-kassa.ru/img/fk_btn/9.png"></a></div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-6 col-lg-5 col-lg-offset-3">
                        <div class="footer__vk-widgets">
                            <div class="footer__vk-wrapper">
                                <div id="vk_groups"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-9 col-sm-8 col-md-6 col-lg-6">
                        <div class="footer__terms text-block text-block_color_gray text-block_fs_s">
                            Авторизуясь на сайте вы принимаете&nbsp;
                            <a href="/license" class="text-block__link">пользовательское соглашение</a><br>
                            <a href="/confidence" class="text-block__link">Политика конфиденциальности</a>
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-4 col-md-6 col-lg-6">
                        <div class="footer__age-limit-wrapper">
                            <div class="info-ip">ИП Чурейно <br> УНП 590194207 <br> Регистрация №0413438, 09.07.2018</div>
                            <div class="footer__copy-text text-block text-block_color_gray hidden-xs">Copyright © 2019 </div>
                            <div class="age-limit">18+</div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="footer__copy-text text-block text-block_color_gray text-block_align_center visible-xs">Copyright © 2019</div>
                    </div>
                </div>
            </div>
        </div>
    </div>        </div>
<!-- modals -->
<div id="login" class="modal-window modal-window_size_s">
    <div class="modal-window__header-wrapper">
        <div class="modal-window__header">
            Войти
            <div class="modal-window__header-border"></div>
        </div>
        <button class="modal-window__close-button"><img src="/build/img/cross_gray.png" alt="close" class="modal-window__close-button-cross"/></button>
    </div>
    <div class="modal-window__element modal-window__social-button-block">
        <a href="/vklogin" class="modal-window__social-button"><img src="/build/img/social-button__vk.png" alt="ВКонтакте" title="ВКонтакте" class="modal-window__social-button-img"/></a>
        <a href="/fblogin" class="modal-window__social-button"><img src="/build/img/social-button__fb.png" alt="Facebook" title="Facebook" class="modal-window__social-button-img"/></a>
        <a href="/login" class="modal-window__social-button"><img src="/build/img/login.jpg" alt="Обычный" title="Обычный" class="modal-window__social-button-img"/></a>
    </div>
</div>
<div id="register" class="modal-window modal-window_size_s">
    <div class="modal-window__header-wrapper">
        <div class="modal-window__header">
            Зарегистрироваться            
            <div class="modal-window__header-border"></div>
        </div>
        <button class="modal-window__close-button"><img src="/build/img/cross_gray.png" alt="close" class="modal-window__close-button-cross"/></button>
    </div>
    <div class="modal-window__element modal-window__social-button-block">
        <a href="/vklogin" class="modal-window__social-button"><img src="/build/img/social-button__vk.png" alt="ВКонтакте" title="ВКонтакте" class="modal-window__social-button-img"/></a>
        <a href="/fblogin" class="modal-window__social-button"><img src="/build/img/social-button__fb.png" alt="Facebook" title="Facebook" class="modal-window__social-button-img"/></a>
        <a href="/register" class="modal-window__social-button"><img src="/build/img/login.jpg" alt="Обычный" title="Обычный" class="modal-window__social-button-img"/></a>
    </div>
</div>                <!-- additional modals -->



<div id="add-cash" class="modal-window modal-window_size_m">
    <div class="modal-window__header-wrapper">
        <div class="modal-window__header">
            Пополнить &nbsp;<span>баланс</span>
            <div class="modal-window__header-border"></div>
        </div>
        <button class="modal-window__close-button"><img src="/build/img/cross_gray.png" alt="close" class="modal-window__close-button-cross"></button>
    </div>
    <div class="modal-window__element-header text-block text-block_tf_up text-block_align_center">Введите сумму:</div>
    <div class="modal-window__element modal-window__input-block modal-window__element_with-header">
        <div class="input-block modal-window__input-wrapper">
            <input class="input-block__input" value="100" title="">
        </div>
    </div>
    <div class="modal-window__element-header text-block">Выберите платежную систему:</div>
    <div class="modal-window__element modal-window__pay-system-wrapper modal-window__element_with-header">
        <div class="modal-window__pay-system pay-system">
            <div class="modal-window__img-wrapper pay-system__img-wrapper">
                <img src="/build/img/pay-icon_mc-visa_l.png" alt="Банковская карта" title="Банковская карта" data-provider="card" data-currency="10" class="pay-system__img">
            </div>
            <div class="modal-window__img-wrapper pay-system__img-wrapper">
                <img src="/build/img/pay-icon_ym_l.png" alt="Яндекс.Деньги" title="Яндекс.Деньги" data-provider="yadi" data-currency="21" class="pay-system__img">
            </div>
            <div class="modal-window__img-wrapper pay-system__img-wrapper">
                <img src="/build/img/pay-icon_qiwi_l.png" alt="Qiwi" title="Qiwi" data-provider="qiwi" data-currency="20" class="pay-system__img">
            </div>
            <div class="modal-window__img-wrapper pay-system__img-wrapper">
                <img src="/build/img/pay-icon_mts_l.png" alt="МТС" title="МТС" data-provider="mts" data-currency="40" class="pay-system__img">
            </div>
            <div class="modal-window__img-wrapper pay-system__img-wrapper">
                <img src="/build/img/pay-icon_mf_l.png" alt="Мегафон" title="Мегафон" data-provider="mega" data-currency="43" class="pay-system__img">
            </div>
            <div class="modal-window__img-wrapper pay-system__img-wrapper">
                <img src="/build/img/pay-icon_tele2_l.png" alt="Tele2" title="Tele2" data-provider="tele2" data-currency="41" class="pay-system__img">
            </div>
            <div class="modal-window__img-wrapper pay-system__img-wrapper">
                <img src="/build/img/pay-icon_bee_l.png" alt="Beeline" title="Beeline" data-provider="beeline" data-currency="42" class="pay-system__img">
            </div>
        </div>
    </div>
    <div class="modal-window__element modal-window__button-block">
        <button id="btn-cash-in" class="modal-window__button button-rounding button-rounding_big button-rounding_long button-rounding_light">Пополнить</button>
    </div>
</div>
<div class="game-win">
    <div class="game-win__wrapper">
        <div class="game-win__block">
            <div class="game-win__header-line">
                <div class="game-win__name" id="win-name">%name%</div>
            </div>
            <div class="game-win__block-prize game-win__block-prize_green">
                <div class="game-win__block-prize-bg-rays"><img src="/build/img/win-bg-1.png" alt="" class="game-win__block-prize-bg-rays-img game-win__block-prize-bg-rays-img_one"/><img src="/build/img/win-bg-2.png" alt="" class="game-win__block-prize-bg-rays-img game-win__block-prize-bg-rays-img_two"/></div>
                <div class="game-win__block-prize-bg">
                    <div class="game-win__block-prize-bg-wrapper game-win__block-prize-bg-wrapper_hov game-win__block-prize-bg-wrapper_gray"><img src="/build/img/box__gray-hov_min.png" alt="" class="game-win__block-prize-bg-img"/></div>
                    <div class="game-win__block-prize-bg-wrapper game-win__block-prize-bg-wrapper_gray"><img src="/build/img/box__gray-box_no-badge.png" alt="" class="game-win__block-prize-bg-img"/></div>
                </div>
                <img src="/build/img/tovary.png" alt="" class="game-win__block-prize-img"/>
            </div>
            <!--<div class="game-win__block-button-line"><a href="#" class="game-win__block-button-line-share-link"><span>Расскажи друзьям</span><br/>и получи +100500 к удаче</a></div>-->
            <div class="game-win__block-button-line">
                <button class="game-win__block-button-line-button" id="win-sale-item">Продать за <span class="price">%price% </span><span class="rouble">BYN</span></button>
                <button class="game-win__block-button-line-button" id="win-order-item">Заказать доставку</button>
            </div>
            <div class="game-win__block-button-line">
                <button class="game-win__block-button-line-button game-win__block-button-line-button_dark" id="button-game-again">Открыть еще</button>
            </div>
            <input type="hidden" value="" id="user-item-id" />
        </div>
    </div>
</div>        <div id="need-money" class="modal-window modal-window_size_s">
    <div class="modal-window__header-wrapper">
        <div class="modal-window__header">
            Необходимо
            &nbsp;<span>пополнить баланс</span>
            <div class="modal-window__header-border"></div>
        </div>
    </div>
    <div class="modal-window__element text-block text-block_color_gray text-block_align_center">Недостаточно средств на балансе. Пополните баланс на <span class="amount"></span> BYN.</span></div>
    <div class="modal-window__element modal-window__button-block">
        <button class="modal-window__button button-rounding button-rounding_big button-rounding_vlong button-rounding_light modal-toggle" data-toggle="add-cash">Пополнить</button>
    </div>
</div>        <div class="modal-layout"></div>
 <div id="success-ticket" class="modal-window modal-window_size_s">
    <div class="modal-window__header-wrapper text-block_align_center">
        <div class="modal-window__header ">
            <span> Ваша ставка принята</span>
            <div class="modal-window__header-border"></div>
        </div>
    </div>
    <div class="text-block text-block_color_gray text-block_align_center">Номер вашей ставки:</br><span class="amount" style="color:#d80000; font-size:80px;"></span></span></div>
    <div class="modal-window__element modal-window__button-block">
        <button class="hide-modal modal-window__button button-rounding button-rounding_big button-rounding_vlong button-rounding_light modal-toggle" data-toggle="add-cash">Ок</button>
           <a href="/profile">
        Открыть профиль
        </a>
    </div>
</div>        <div class="modal-layout"></div>
<div id="need-ticket" class="modal-window modal-window_size_s">
    <div class="modal-window__header-wrapper text-block_align_center">
        <div class="modal-window__header ">
            <span> У вас нет билетов</span>
            <div class="modal-window__header-border"></div>
        </div>
    </div>
    <div style="font-size:19px;" class="text-block text-block_color_gray text-block_align_center">Для получения билета откройте <span class="amount" ></span></div>
    <div class="modal-window__element modal-window__button-block">
        <button class="hide-modal modal-window__button button-rounding button-rounding_big button-rounding_vlong button-rounding_light modal-toggle" data-toggle="add-cash">Ок</button>
           <a href="/profile">
        Открыть профиль
        </a>
    </div>
</div>        <div class="modal-layout"></div>
<!-- scripts -->

<script src="//vk.com/js/api/openapi.js?136"></script>

<script
  src="https://code.jquery.com/jquery-3.3.1.js"
></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>
<script src="/build/js/all-dbd3292ee5.js?v=22222"></script>
</body>
</html>
