<?php $__env->startSection('content'); ?>


<style>td {
        white-space: nowrap;
        word-wrap: normal;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 100px;
    }</style>


<div class="top-bar">
    <h3>Cases</h3>

</div>


<div class="well no-padding">


    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
            <th>Type</th>
        </tr>
        </thead>
        <tbody>


        <?php foreach($cases as $i): ?>


        <tr>
            <td><?php echo e($i->id); ?> <img src="<?php echo e($i->image); ?>" alt="<?php echo e($i->id); ?>" style="width: 50px;heigth:50px;" class="userpic"></img></td>
            <td><?php echo e($i->name); ?></td>
            <td><?php echo e($i->price); ?></td>
            <td><?php echo e($i->type); ?></td>
            <td><a href="/admin/cases/<?php echo e($i->id); ?>">Редактировать</a></td>
        </tr>
        <?php endforeach; ?>


        </tbody>
    </table>


    <?php echo e($cases->render()); ?>

    <!-- / Add News: WYSIWYG Edior -->

</div>
<!-- / Add News: Content -->


</div>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>