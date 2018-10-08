<?php $__env->startSection('content'); ?>
    <div class="top-bar">
        <h3>Пользователь <?php echo e($user->username); ?></h3>

    </div>
    <div class="well no-padding">
        <!-- Forms: Form -->
        <form method="post" action="/admin/givemoney/<?php echo e($user->id); ?>" class="form-horizontal">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <!-- Forms: Normal input field -->
            <div class="control-group">
                <label class="control-label" for="inputNormal">Сумма перевода</label>
                <div class="controls">
                    <input type="text" name="money" placeholder="..." class="input-block-level">
                </div>
            </div>
            <!-- Forms: Form Actions -->
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>