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
            <?php echo e(__('Listado de Usuarios')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
    <div class="py-2">
        <div class="max-w-[90%] mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="flex">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cliente create')): ?>
                        <button class="flex-1">Crear</button>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cliente update')): ?>
                        <button class="flex-1">Actualizar</button>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cliente delete')): ?>
                        <button class="flex-1">Eliminar</button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    
    <?php $__env->startPush('modals'); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.users.live-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('jUDQOQS')) {
    $componentId = $_instance->getRenderedChildComponentId('jUDQOQS');
    $componentTag = $_instance->getRenderedChildComponentTagName('jUDQOQS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jUDQOQS');
} else {
    $response = \Livewire\Livewire::mount('admin.users.live-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('jUDQOQS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php /**PATH C:\laragon\www\laravelv9\livewire\livewireDatatable\resources\views/admin/client/index.blade.php ENDPATH**/ ?>