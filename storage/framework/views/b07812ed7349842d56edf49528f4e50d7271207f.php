

<?php $__env->startSection('content'); ?>



<input id="dp5" type="text" data-slider-min="-5" data-slider-max="20" data-slider-step="1" data-slider-value="0"/>
    <div class="top-bar">
        <h3>Последние 20 выигрышей</h3>

    </div>

    <div class="well no-padding">


        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Пользователь</th>
                <th>Otkril</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach($drop as $i): ?>
                <tr>
                    <td><?php echo e($i->id); ?></td>
                    <td><?php echo e($i->username); ?></td>
                    <td><?php echo e($i->price); ?></td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
        <!-- / Add News: WYSIWYG Edior -->

    </div>
    <!-- / Add News: Content -->




    </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>