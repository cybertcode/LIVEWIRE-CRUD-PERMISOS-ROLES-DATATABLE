<div class="container mx-auto px-4 sm:px-8 max-w-[100%]">
    <div class="py-8">
        <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
            
            <button
                class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200"
                type="button" wire:click="clear">
                <i class="fa fa-eraser"></i> Limpiar
            </button>
            <div>
                Mostrar
                <select
                    class="rounded-lg border-transparent appearance-none border border-gray-400 py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent "
                    wire:model="perPage">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    
                </select>
                Registros
            </div>

            <div class="text-end">
                <form class="flex flex-col md:flex-row w-3/4 md:w-full max-w-sm md:space-x-3 space-y-3 md:space-y-0 justify-center">
                    <div class="relative">
                        <input type="text" id='"form-subscribe-Filter'
                            class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            placeholder="buscar" wire:model="search" />
                    </div>
                    <select
                        class="rounded-lg border-transparent appearance-none border border-gray-400 py-1 px-6 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent "
                        wire:model="user_role">
                        <option value="" selected>Seleccione</option>
                        <option value="admin">Admin</option>
                        <option value="seller">Vendedor</option>
                        <option value="client">Cliente</option>
                    </select>
                    <button
                        class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-blue-200"
                        type="button" wire:click="showModal">
                        <i class=" fa fa-add"></i> Nuevo
                    </button>
            </div>
            </form>
        </div>
    </div>
    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">
                            ID
                            <button wire:click="sortable('id')">
                                <span class="fa-solid fa<?php echo e($camp === 'id' ? $icon : '-sort'); ?>"></span>
                            </button>
                        </th>
                        <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal ">
                            Nombre
                            <button wire:click="sortable('name')">
                                <span class="fa-solid fa<?php echo e($camp === 'name' ? $icon : '-sort'); ?>"></span>
                            </button>
                        </th>
                        <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal ">
                            Apellidos
                            <button wire:click="sortable('lastname')">
                                <span class="fa-solid fa<?php echo e($camp === 'lastname' ? $icon : '-sort'); ?>"></span>
                            </button>
                        </th>
                        <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">
                            Correo electrónico
                            <button wire:click="sortable('email')">
                                <span class="fa-solid fa<?php echo e($camp === 'email' ? $icon : '-sort'); ?>"></span>
                            </button>
                        </th>
                        <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">
                            Rol
                            <button wire:click="sortable('role')">
                                <span class="fa-solid fa<?php echo e($camp === 'role' ? $icon : '-sort'); ?>"></span>
                            </button>

                        </th>
                        <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">
                            Creado
                            <button wire:click="sortable('created_at')">
                                <span class="fa-solid fa<?php echo e($camp === 'created_at' ? $icon : '-sort'); ?>"></span>
                            </button>

                        </th>
                        <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-center text-sm uppercase font-normal" style="width: 22% !important;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <div class="flex items-center">
                                <div class="ml-3">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        <?php echo e($loop->iteration); ?>

                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                <?php echo e($user->name); ?>

                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                <?php echo e($user->r_lastname->lastname); ?>

                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                <?php echo e($user->email); ?>

                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                <?php echo e($user->rol); ?>

                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">
                                <?php echo e($user->created_at); ?>

                            </p>
                        </td>
                        <td class="px-2 py-2 border-b border-gray-200 bg-white text-sm ">
                            <div class="">
                                <a href="javascript:void(0)" wire:click="showModal(<?php echo e($user->id); ?>)" type="button" class=" justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700
                                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm mx-0">
                                    <i class="fa-solid fa-pen-to-square"></i> Editar
                                </a>
                                <button type="button" class=" justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700
                            focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm mx-0">
                                    <i class="fa-solid fa-circle-xmark"></i> Eliminar
                                </button>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    </tr>
                    <td colspan="5">No se encontró registros</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <div class="px-5 bg-white py-5  flex-col xs:flex-row items-center xs:justify-between">
                <div class=" items-center">
                    <?php echo $users->links(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\laravelv9\livewire\livewireDatatable\resources\views/livewire/admin/users/live-user-table.blade.php ENDPATH**/ ?>