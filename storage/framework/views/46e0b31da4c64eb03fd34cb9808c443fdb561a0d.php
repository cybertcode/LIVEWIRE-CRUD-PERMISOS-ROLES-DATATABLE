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
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__("Listado de Usuarios")); ?>

        </h2>
     <?php $__env->endSlot(); ?>
    <div class="py-2">
        <div class="max-w-[90%] mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.users.live-user-table')->html();
} elseif ($_instance->childHasBeenRendered('qLznKYQ')) {
    $componentId = $_instance->getRenderedChildComponentId('qLznKYQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('qLznKYQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('qLznKYQ');
} else {
    $response = \Livewire\Livewire::mount('admin.users.live-user-table');
    $html = $response->html();
    $_instance->logRenderedChild('qLznKYQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
    </div>
    
    <?php $__env->startPush('modals'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.users.live-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('oUnUeYm')) {
    $componentId = $_instance->getRenderedChildComponentId('oUnUeYm');
    $componentTag = $_instance->getRenderedChildComponentTagName('oUnUeYm');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('oUnUeYm');
} else {
    $response = \Livewire\Livewire::mount('admin.users.live-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('oUnUeYm', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php /**PATH C:\laragon\www\laravelv9\livewire\livewireDatatable\resources\views/admin/users/index.blade.php ENDPATH**/ ?>