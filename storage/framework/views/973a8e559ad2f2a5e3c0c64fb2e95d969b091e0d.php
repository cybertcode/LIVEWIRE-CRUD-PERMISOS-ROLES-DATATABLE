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
            <div class="flex flex-row w-full mt-3 text-gray-600">
                <div class="w-3/4">
                    Nombre del Permiso
                </div>
                <div class="flex-1">
                    check
                </div>
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