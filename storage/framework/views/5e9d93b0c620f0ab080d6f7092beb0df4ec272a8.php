<div class="relative mr-2 mt-2">
    <label for="<?php echo e($name); ?>" class="block text-sm font-medium text-gray-700"><?php echo e($label); ?></label>
    <input type="<?php echo e($type); ?>" wire:model="<?php echo e($name); ?>" id="<?php echo e($name); ?>" name="name"
        class="rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent "
        placeholder="<?php echo e($placeholder); ?>" />
    <?php if($errors->has($name)): ?>
    <small class="text-red-600"><?php echo e($errors->first($name)); ?></small>
    <?php endif; ?>
</div>

<?php /**PATH C:\laragon\www\laravelv9\livewire\livewireDatatable\resources\views/components/admin/users/component-input.blade.php ENDPATH**/ ?>