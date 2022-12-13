<div>
    <form wire:submit.prevent="<?php echo e($method); ?>">
        <?php if (isset($component)) { $__componentOriginal871898a9f1a4e306c9258395c1713eb900372a49 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Users\ComponentModal::class, ['showModal' => $showModal,'action' => $action] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.users.component-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Admin\Users\ComponentModal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                    <?php echo e($titleModal); ?>

                </h3>
                <hr />
                <div class="flex">
                    <?php if (isset($component)) { $__componentOriginal9377d4ee2e3fdd095b485ef08957c302bc866a87 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Users\ComponentInput::class, ['placeholder' => 'Ingrese Nombres','name' => 'name','label' => 'Nombre','type' => 'text'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                    <?php if (isset($component)) { $__componentOriginal9377d4ee2e3fdd095b485ef08957c302bc866a87 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Users\ComponentInput::class, ['placeholder' => 'Ingrese Apellidos','name' => 'lastname','label' => 'Apellidos','type' => 'text'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                </div>
                <div class="flex">
                    <?php if (isset($component)) { $__componentOriginal9377d4ee2e3fdd095b485ef08957c302bc866a87 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Users\ComponentInput::class, ['placeholder' => 'Ingrese Correo electrónico','name' => 'email','label' => 'Correo electrónico','type' => 'email'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                    <?php if (isset($component)) { $__componentOriginalb3957d781c7e5d02f764ff127b574e50ad164226 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Users\ComponentInputSelect::class, ['name' => 'role','label' => 'Roles','options' => ['admin' => 'Administrador', 'seller' => 'Vendedor', 'client' => 'Cliente']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin.users.component-input-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Admin\Users\ComponentInputSelect::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb3957d781c7e5d02f764ff127b574e50ad164226)): ?>
<?php $component = $__componentOriginalb3957d781c7e5d02f764ff127b574e50ad164226; ?>
<?php unset($__componentOriginalb3957d781c7e5d02f764ff127b574e50ad164226); ?>
<?php endif; ?>
                </div>
                <div class="flex">
                    <?php if (isset($component)) { $__componentOriginal9377d4ee2e3fdd095b485ef08957c302bc866a87 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Users\ComponentInput::class, ['placeholder' => 'Seleccione foto','name' => 'profile_photo_path','label' => 'Imagen','type' => 'file'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                </div>
                <?php if($action == 'Guardar'): ?>
                    <div class="flex">
                        <?php if (isset($component)) { $__componentOriginal9377d4ee2e3fdd095b485ef08957c302bc866a87 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Users\ComponentInput::class, ['placeholder' => 'Contraseña','name' => 'password','label' => 'Contraseña','type' => 'password'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                        <?php if (isset($component)) { $__componentOriginal9377d4ee2e3fdd095b485ef08957c302bc866a87 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Users\ComponentInput::class, ['placeholder' => 'Confirmar contraseña','name' => 'password_confirmation','label' => 'Confirmar contraseña','type' => 'password'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
                    </div>
                <?php endif; ?>
                <div class="text-center mt-4" wire:loading>
                    <span
                        class="inline-flex items-center rounded-full p-2 bg-indigo-500 text-white group transition-all duration-500 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-none"
                        role="alert" tabindex="0">
                        <span
                            class="whitespace-nowrap inline-block group-hover:max-w-screen-2xl group-focus:max-w-screen-2xl max-w-0 scale-80 group-hover:scale-100 overflow-hidden transition-all duration-500 group-hover:px-2 group-focus:px-2">Cargando
                            imagen...</span>
                    </span>
                </div>
                <?php if($profile_photo_path): ?>
                    <div class="flex justify-center">
                        <img src="<?php echo e($profile_photo_path->temporaryUrl()); ?>" alt="no hay"
                            class="shadow-xl rounded-full object-cover mt-4 mb-4">
                    </div>
                <?php endif; ?>
                <?php if(isset($user->profile_photo_path)): ?>
                    <div class="flex justify-center">
                        <img src="<?php echo e(Storage::url($user->profile_photo_path)); ?>" alt="no hay"
                            class="shadow-xl rounded-full object-cover mt-4 mb-4">
                    </div>
                <?php endif; ?>

            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal871898a9f1a4e306c9258395c1713eb900372a49)): ?>
<?php $component = $__componentOriginal871898a9f1a4e306c9258395c1713eb900372a49; ?>
<?php unset($__componentOriginal871898a9f1a4e306c9258395c1713eb900372a49); ?>
<?php endif; ?>
    </form>

</div>
<?php /**PATH C:\laragon\www\laravelv9\livewire\livewireDatatable\resources\views/livewire/admin/users/live-modal.blade.php ENDPATH**/ ?>