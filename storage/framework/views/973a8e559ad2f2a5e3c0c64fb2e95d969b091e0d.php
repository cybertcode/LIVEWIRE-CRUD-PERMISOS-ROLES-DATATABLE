<div>
    <?php if (isset($component)) { $__componentOriginal871898a9f1a4e306c9258395c1713eb900372a49 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Users\ComponentModal::class, ['showModal' => $showModal] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.users.component-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Admin\Users\ComponentModal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="w-full">
            <h3 class="text-center mt-3 text-gray-600 mb-3">Permisos registrados</h3>
            <hr>
            <div class=" w-full mt-3 ">
                <?php $__currentLoopData = $permission_check; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex flex-row">
                        <div class="mr-2 <?php echo e($p['check'] ? 'text-indigo-600' : 'text-gray-200'); ?> w-1/12">
                            <span class="fa fa-check "></span>
                        </div>
                        <div class="w-3/4 text-gray-600">
                            <?php echo e($key); ?>

                        </div>
                        <div class="flex-1">
                            <input type="checkbox" class="" wire:model="permission_check.<?php echo e($key); ?>.check"
                                wire:click="addPermissionKey('<?php echo e($key); ?>')">
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal871898a9f1a4e306c9258395c1713eb900372a49)): ?>
<?php $component = $__componentOriginal871898a9f1a4e306c9258395c1713eb900372a49; ?>
<?php unset($__componentOriginal871898a9f1a4e306c9258395c1713eb900372a49); ?>
<?php endif; ?>

</div>
<?php /**PATH C:\laragon\www\laravelv9\livewire\livewireDatatable\resources\views/livewire/admin/permission/live-add-permission.blade.php ENDPATH**/ ?>