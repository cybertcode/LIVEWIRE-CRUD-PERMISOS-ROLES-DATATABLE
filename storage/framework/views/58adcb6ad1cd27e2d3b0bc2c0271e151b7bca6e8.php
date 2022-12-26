<?php $__env->startSection('title', __('Forbidden')); ?>
<?php $__env->startSection('code', '403'); ?>
<?php $__env->startSection('message'); ?>
    <?php echo e(__($exception->getMessage() ?: 'Forbidden')); ?>

    <br>
    <a href="<?php echo e(route('dashboard')); ?>">Volver a dashboard</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('errors::minimal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravelv9\livewire\livewireDatatable\resources\views/errors/403.blade.php ENDPATH**/ ?>