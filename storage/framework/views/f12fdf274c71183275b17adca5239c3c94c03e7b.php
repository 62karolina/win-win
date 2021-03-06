

<?php $__env->startSection('content'); ?>



    <div class="top-bar">
        <h3>Новый предмет</h3>

    </div>



    <div class="well no-padding">

        <!-- Forms: Form -->
        <form method="post" action="/admin/addItem" class="form-horizontal">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <!-- Forms: Normal input field -->
            <div class="control-group">
                <label class="control-label" for="inputNormal">Name</label>
                <div class="controls">
                    <input type="text" name="name" value="" placeholder="..." class="input-block-level">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputNormal">Price</label>
                <div class="controls">
                    <input type="number" name="price" value="" placeholder="..." class="input-block-level">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="inputNormal">Image(URL)</label>
                <div class="controls">
                    <input type="text" name="image" value="" placeholder="..." class="input-block-level">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="inputNormal">Type</label>
                <select class="input-block-level" name="type" style="margin-left:30px;">
                    <option value="def">Default</option>
                </select>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputNormal">Case</label>
                <select class="input-block-level" name="case" style="margin-left:30px;">
                    <option value="1">Gray</option>
                    <option value="2">Green</option>
                    <option value="3">Red</option>
                </select>
            </div>
            <!-- / Forms: Form Textarea -->


            <!-- Forms: Form Actions -->
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Сохранить</button>

            </div>
            <!-- / Forms: Form Actions -->

        </form>
        <!-- / Forms: Form -->


        <!-- / Add News: WYSIWYG Edior -->

    </div>
    <!-- / Add News: Content -->




    </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>