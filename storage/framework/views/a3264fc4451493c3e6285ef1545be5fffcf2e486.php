<div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" <?php echo e($showModal ? '' : 'hidden'); ?>>
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div
                class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <form wire:submit.prevent="<?php echo e($actionTarget); ?>">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">
                                    <?php echo e($button); ?>

                                </h3>
                                <div class="mt-2">
                                    <hr>
                                    <?php if (isset($component)) { $__componentOriginal9377d4ee2e3fdd095b485ef08957c302bc866a87 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Users\ComponentInput::class, ['label' => 'Rol','name' => 'role','placeholder' => 'Ingrese nombre del rol'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.users.component-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Admin\Users\ComponentInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9377d4ee2e3fdd095b485ef08957c302bc866a87)): ?>
<?php $component = $__componentOriginal9377d4ee2e3fdd095b485ef08957c302bc866a87; ?>
<?php unset($__componentOriginal9377d4ee2e3fdd095b485ef08957c302bc866a87); ?>
<?php endif; ?>
                                    <hr>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="submit"
                            class="inline-flex w-full justify-center rounded-md border border-transparent bg-blue-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm"><?php echo e($button); ?></button>
                        <button type="button"
                            class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                            wire:click="toogleModal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\laravelv9\livewire\livewireDatatable\resources\views/livewire/admin/role/live-modal-edit-role-permission.blade.php ENDPATH**/ ?>