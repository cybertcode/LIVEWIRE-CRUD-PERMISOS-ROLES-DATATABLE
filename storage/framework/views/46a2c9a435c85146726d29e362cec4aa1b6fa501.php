<div class=" mr-2 mt-2 ">
    <div class="rounded-md shadow-sm ">
        <label class="block text-sm font-medium text-gray-700" for="<?php echo e($name); ?>">
            <?php echo e($label); ?>

            <select id="<?php echo e($name); ?>"
                class="rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent "
                name="<?php echo e($name); ?>" wire:model="<?php echo e($name); ?>">
                <option value="">Seleccione</option>
                <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($key); ?>"><?php echo e($option); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </label>
    </div>
    <?php if($errors->has($name)): ?>
    <small class="text-red-600"><?php echo e($errors->first($name)); ?></small>
    <?php endif; ?>
</div>
<?php /**PATH C:\laragon\www\laravelv9\livewire\livewireDatatable\resources\views/components/admin/users/component-input-select.blade.php ENDPATH**/ ?>