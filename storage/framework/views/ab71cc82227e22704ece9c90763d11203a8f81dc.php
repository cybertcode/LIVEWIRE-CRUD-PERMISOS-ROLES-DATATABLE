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
} elseif ($_instance->childHasBeenRendered('EbVzg0P')) {
    $componentId = $_instance->getRenderedChildComponentId('EbVzg0P');
    $componentTag = $_instance->getRenderedChildComponentTagName('EbVzg0P');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('EbVzg0P');
} else {
    $response = \Livewire\Livewire::mount('admin.role.live-role-table');
    $html = $response->html();
    $_instance->logRenderedChild('EbVzg0P', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
} elseif ($_instance->childHasBeenRendered('tIGDRZt')) {
    $componentId = $_instance->getRenderedChildComponentId('tIGDRZt');
    $componentTag = $_instance->getRenderedChildComponentTagName('tIGDRZt');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('tIGDRZt');
} else {
    $response = \Livewire\Livewire::mount('admin.role.live-modal-edit-role-permission', []);
    $html = $response->html();
    $_instance->logRenderedChild('tIGDRZt', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.permission.live-add-permission', [])->html();
} elseif ($_instance->childHasBeenRendered('26DLFi3')) {
    $componentId = $_instance->getRenderedChildComponentId('26DLFi3');
    $componentTag = $_instance->getRenderedChildComponentTagName('26DLFi3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('26DLFi3');
} else {
    $response = \Livewire\Livewire::mount('admin.permission.live-add-permission', []);
    $html = $response->html();
    $_instance->logRenderedChild('26DLFi3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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