<?php $__env->startSection('content'); ?>



    <div class="top-bar">
        <h3>Кейс <?php echo e($case->id); ?>-го уровня</h3>

    </div>



    <div class="well no-padding">

        <!-- Forms: Form -->
        <form method="post" action="/admin/casedit" class="form-horizontal">
            <input  name="id" value="<?php echo e($case->id); ?>"  type="hidden">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">



            <!-- Forms: Normal input field -->
            <div class="control-group">
                <label class="control-label" for="inputNormal">Name</label>
                <div class="controls">
                    <input type="text" name="name" value="<?php echo e($case->name); ?>" placeholder="..." class="input-block-level">
                </div>
            </div>


            <div class="control-group">
                <label class="control-label" for="inputInline">Price</label>
                <div class="controls">
                    <input type="number" name="price" value="<?php echo e($case->price); ?>" placeholder="..." class="input-block-level">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputInline">Image</label>
                <div class="controls">
                    <input type="text" name="image" value="<?php echo e($case->image); ?>" placeholder="..." class="input-block-level">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputNormal">Type</label>

                <select class="input-block-level" name="type" style="margin-left:30px;">
                      <option value="money" <?php if($case->type == 'def'): ?> selected <?php endif; ?>>Default</option>
                </select>
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