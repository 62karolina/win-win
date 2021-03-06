
<?php $__env->startSection('content'); ?>

    <div class="content">
        <div class="container">
            <div class="content-button-row">
                <a href="/" class="content-button-row__button button-rounding button-rounding_med button-rounding_dark">&lt; Вернуться к списку коробок</a>
            </div>
            <div class="top-block__header">
                <div class="top-block__header-line"></div>
                <div class="top-block__header-text">Коробка №<?php echo e($case->id); ?></div>
                <div class="top-block__header-line"></div>
            </div>
        </div>
        <div class="roulette-line">
            <div class="roulette-wrapper__mid">
                <div class="roulette-wrapper__mid-layer">
                    <div class="roulette-wrapper__mid-line roulette-wrapper__mid-line_top"></div>
                    <div class="roulette-wrapper__mid-line roulette-wrapper__mid-line_bottom"></div>
                </div>
            </div>
            <div class="roulette-wrapper">
                <div class="roulette-wrapper__shadow roulette-wrapper__shadow_left"></div>
                <div class="roulette-wrapper__shadow roulette-wrapper__shadow_right"></div>
                <div class="roulette">
                    <?php foreach($items as $item): ?>
                        <div class="item">
                            <img src="<?php echo e($item->image); ?>" alt="<?php echo e($item->name); ?>" title="<?php echo e($item->name); ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="button-line">
            <div class="button-line__button-wrapper">
                <button id="start-roulette" class="button-line__button button-line__start-button">Открыть коробку за <span class="price-box"><?php echo e($case->price); ?></span><span class="rouble">p</span></button>
                <input type="hidden" value="<?php echo e($case->id); ?>" id="box_id">
            </div>
        </div>
        <div class="container">
            <div class="text-block text-block_align_center text-block_fs_b text-block_tf_up text-block_fw_bold">Коробка содержит:</div>
            <div class="row cases-row box-cases-row">

                <?php if($case->id == 1): ?>
                    <?php foreach($items as $item): ?>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
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
                                    <div class="box__img-wrapper">
                                        <img src="<?php echo e($item->image); ?>" alt="<?php echo e($item->name); ?>" title="<?php echo e($item->name); ?> (<?php echo e($item->price); ?> руб. - цена продажи)" class="box__img">
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <?php if($case->id == 2): ?>
                        <?php foreach($items as $item): ?>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <a href="#">
                                <div class="box box_nobg box_green-box">
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
                                    <div class="box__img-wrapper">
                                        <img src="<?php echo e($item->image); ?>" alt="<?php echo e($item->name); ?>" title="<?php echo e($item->name); ?> (<?php echo e($item->price); ?> руб. - цена продажи)" class="box__img">
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <?php if($case->id == 3): ?>
                        <?php foreach($items as $item): ?>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <a href="#">
                                    <div class="box box_nobg box_red-box">
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
                                        <div class="box__img-wrapper">
                                            <img src="<?php echo e($item->image); ?>" alt="<?php echo e($item->name); ?>" title="<?php echo e($item->name); ?> (<?php echo e($item->price); ?> руб. - цена продажи)" class="box__img">
                                        </div>
                                    </div>
                                </a>
                            </div>

                        <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>