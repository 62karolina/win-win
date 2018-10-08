

<?php $__env->startSection('content'); ?>



    <div class="top-bar">
        <h3>Deliver #<?php echo e($deliver->id); ?></h3>
    </div>



    <div class="well no-padding">

        <!-- Forms: Form -->
        <form method="post" action="/admin/vivodsave" class="form-horizontal">
            <input  name="id" value="<?php echo e($deliver->id); ?>"  type="hidden">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">



            <!-- Forms: Normal input field -->
            <div class="control-group">
                <label class="control-label" for="inputNormal">Delivery adress: </label><br><br>
                <ul style="list-style-type: none; ">
                    <li><span style="font-weight: bold;">Фамилия Имя Отчество:</span> <?php echo e($deliver->name); ?></li>
                    <li><span style="font-weight: bold;">Страна:</span> <?php echo e($deliver->country); ?></li>
                    <li><span style="font-weight: bold;">Город:</span> <?php echo e($deliver->city); ?></li>
                    <li><span style="font-weight: bold;">Индекс:</span> <?php echo e($deliver->postalcode); ?></li>
                    <li><span style="font-weight: bold;">Дом, корпус, строение:</span> <?php echo e($deliver->dom); ?></li>
                    <li><span style="font-weight: bold;">Квартира / Офис:</span> <?php echo e($deliver->kvartira); ?></li>
                    <li><span style="font-weight: bold;">Улица:</span> <?php echo e($deliver->street); ?></li>
                </ul>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputNormal">Delivery items: </label><br><br>
                <ul style="list-style-type: none; ">
                    <li><?php echo e($deliver->item1); ?></li>
                    <li><?php echo e($deliver->item2); ?></li>
                    <li><?php echo e($deliver->item3); ?></li>
                    <li><?php echo e($deliver->item4); ?></li>
                    <li><?php echo e($deliver->item5); ?></li>
                </ul>
            </div>

            <div class="control-group">
                <label class="control-label" for="inputInline">Tracking number</label>
                <div class="controls">
                    <input type="text" name="tracking" value="" placeholder="..." class="input-block-level">
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Сохранить</button>

            </div>
        </form>
    </div>
    </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>