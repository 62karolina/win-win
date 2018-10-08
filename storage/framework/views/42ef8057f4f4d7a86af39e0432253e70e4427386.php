

<?php $__env->startSection('content'); ?>



        <div class="top-bar">
            <h3>Последние запросы на вывод</h3>

        </div>



        <div class="well no-padding">


            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Пользователь</th>
                    <th>Item1</th>
                    <th>Item2</th>
                    <th>Item3</th>
                    <th>Item4</th>
                    <th>Item5</th>
                    <th>Tracking</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($delivers as $b): ?>
                    <tr>
                        <td><?php echo e($b->id); ?></td>
                        <td><a href="/account/<?php echo e($b->user_id); ?>"><?php echo e($b->name); ?></a></td>
                        <td><img src="<?php echo e($b->item1); ?>" style="width:30px;height:30px;"></img></td>
                        <td><img src="<?php echo e($b->item2); ?>" style="width:30px;height:30px;"></img></td>
                        <td><img src="<?php echo e($b->item3); ?>" style="width:30px;height:30px;"></img></td>
                        <td><img src="<?php echo e($b->item4); ?>" style="width:30px;height:30px;"></img></td>
                        <td><img src="<?php echo e($b->item5); ?>" style="width:30px;height:30px;"></img></td>
                        <td><a href="/admin/vivod/<?php echo e($b->id); ?>">Deliver</a></td>
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