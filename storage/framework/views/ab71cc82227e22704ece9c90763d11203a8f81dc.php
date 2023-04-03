<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <?php echo e(__('Roles y permisos')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
    <div class="py-2">
        <div class="max-w-[90%] mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-gray-200 shadow-xl sm:rounded-lg">
                
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.role.live-role-table')->html();
} elseif ($_instance->childHasBeenRendered('kPKN19R')) {
    $componentId = $_instance->getRenderedChildComponentId('kPKN19R');
    $componentTag = $_instance->getRenderedChildComponentTagName('kPKN19R');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('kPKN19R');
} else {
    $response = \Livewire\Livewire::mount('admin.role.live-role-table');
    $html = $response->html();
    $_instance->logRenderedChild('kPKN19R', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
    </div>
    
    <?php $__env->startPush('modals'); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.role.live-modal-edit-role-permission', [])->html();
} elseif ($_instance->childHasBeenRendered('SCuz2vD')) {
    $componentId = $_instance->getRenderedChildComponentId('SCuz2vD');
    $componentTag = $_instance->getRenderedChildComponentTagName('SCuz2vD');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('SCuz2vD');
} else {
    $response = \Livewire\Livewire::mount('admin.role.live-modal-edit-role-permission', []);
    $html = $response->html();
    $_instance->logRenderedChild('SCuz2vD', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.permission.live-add-permission', [])->html();
} elseif ($_instance->childHasBeenRendered('JySK18p')) {
    $componentId = $_instance->getRenderedChildComponentId('JySK18p');
    $componentTag = $_instance->getRenderedChildComponentTagName('JySK18p');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('JySK18p');
} else {
    $response = \Livewire\Livewire::mount('admin.permission.live-add-permission', []);
    $html = $response->html();
    $_instance->logRenderedChild('JySK18p', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\laravelv9\livewire\livewireDatatable\resources\views/admin/role/index.blade.php ENDPATH**/ ?>