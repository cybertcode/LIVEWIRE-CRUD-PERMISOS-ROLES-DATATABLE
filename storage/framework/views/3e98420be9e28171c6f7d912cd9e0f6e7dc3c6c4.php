<div class="container mx-auto px-4 sm:px-8 max-w-[100%]">
    <div class="py-8">
        <div class="flex flex-row justify-between w-full mb-1 sm:mb-0">
            
            <button
                class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200"
                type="button" wire:click="clear">
                <i class="fa fa-eraser"></i> Limpiar
            </button>
            <div>
                Mostrar
                <select
                    class="px-4 py-1 text-base text-gray-700 placeholder-gray-400 bg-white border border-transparent border-gray-400 rounded-lg shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent "
                    wire:model="perPage">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    
                </select>
                Registros
            </div>

            <div class="text-end">
                <form
                    class="flex flex-col justify-center w-3/4 max-w-sm space-y-3 md:flex-row md:w-full md:space-x-3 md:space-y-0">
                    <div class="relative">
                        <input type="text" id='"form-subscribe-Filter'
                            class="flex-1 w-full px-4 py-2 text-base text-gray-700 placeholder-gray-400 bg-white border border-transparent border-gray-300 rounded-lg shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            placeholder="buscar" wire:model="search" />
                    </div>
                    <select
                        class="px-6 py-1 text-base text-gray-700 placeholder-gray-400 bg-white border border-transparent border-gray-400 rounded-lg shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent "
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
    <div class="px-4 py-4 -mx-4 overflow-x-auto sm:-mx-8 sm:px-8">
        <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr>
                        <th scope="col"
                            class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                            ID
                            <button wire:click="sortable('id')">
                                <span class="fa-solid fa<?php echo e($camp === 'id' ? $icon : '-sort'); ?>"></span>
                            </button>
                        </th>
                        <th scope="col"
                            class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200 ">
                            Foto
                        </th>
                        <th scope="col"
                            class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200 ">
                            Nombre
                            <button wire:click="sortable('name')">
                                <span class="fa-solid fa<?php echo e($camp === 'name' ? $icon : '-sort'); ?>"></span>
                            </button>
                        </th>
                        <th scope="col"
                            class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200 ">
                            Apellidos
                            <button wire:click="sortable('lastname')">
                                <span class="fa-solid fa<?php echo e($camp === 'lastname' ? $icon : '-sort'); ?>"></span>
                            </button>
                        </th>
                        <th scope="col"
                            class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                            Correo electrónico
                            <button wire:click="sortable('email')">
                                <span class="fa-solid fa<?php echo e($camp === 'email' ? $icon : '-sort'); ?>"></span>
                            </button>
                        </th>
                        <th scope="col"
                            class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                            Rol
                            <button wire:click="sortable('role')">
                                <span class="fa-solid fa<?php echo e($camp === 'role' ? $icon : '-sort'); ?>"></span>
                            </button>

                        </th>
                        <th scope="col"
                            class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                            Creado
                            <button wire:click="sortable('created_at')">
                                <span class="fa-solid fa<?php echo e($camp === 'created_at' ? $icon : '-sort'); ?>"></span>
                            </button>

                        </th>
                        <?php if(auth()->user()->can('usuario update') or
                            auth()->user()->can('usuario delete')): ?>
                            <th scope="col"
                                class="px-5 py-3 text-sm font-normal text-center text-gray-800 uppercase bg-white border-b border-gray-200"
                                style="width: 22% !important;">Acciones
                            </th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            <?php echo e($loop->iteration); ?>

                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="ml-3">
                                        <p class="w-16 h-16 text-gray-900 whitespace-no-wrap ">
                                            <?php if($user->profile_photo_path): ?>
                                                <img src=" <?php echo e(asset('storage/' . $user->profile_photo_path)); ?>"
                                                    class="object-cover ">
                                            <?php else: ?>
                                                <img src=" https://images.pexels.com/photos/4498362/pexels-photo-4498362.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                    class="object-cover ">
                                            <?php endif; ?>

                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    <?php echo e($user->name); ?>

                                </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    <?php echo e($user->r_lastname->lastname); ?>

                                </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    <?php echo e($user->email); ?>

                                </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    <?php echo e($user->rol); ?>

                                </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    <?php echo e($user->created_at); ?>

                                </p>
                            </td>
                            <td class="px-2 py-2 text-sm bg-white border-b border-gray-200 ">
                                <div class="">
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('usuario update')): ?>
                                        <a href="javascript:void(0)" wire:click="showModal(<?php echo e($user->id); ?>)"
                                            type="button"
                                            class="justify-center px-4 py-2 mx-0 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                                            <i class="fa-solid fa-pen-to-square"></i> Editar
                                        </a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('usuario delete')): ?>
                                        <a href="javascript:void(0)" type="button"
                                            class="justify-center px-4 py-2 mx-0 text-base font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm"
                                            onclick="confirmDeleteUser(<?php echo e($user->id); ?>)">
                                            <i class="fa-solid fa-circle-xmark"></i> Eliminar
                                        </a>
                                    <?php endif; ?>
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
            <div class="flex-col items-center px-5 py-5 bg-white xs:flex-row xs:justify-between">
                <div class="items-center ">
                    <?php echo $users->links(); ?>

                </div>
            </div>
        </div>
    </div>
    <?php $__env->startPush('scripts'); ?>
        <script>
            function confirmDeleteUser(user) {
                if (confirm('Seguro que quieres eliminar?')) {
                    Livewire.emit(`deleteUserok`, user);
                } else {
                    alert('No se borró ningún registro')
                }
            }
            Livewire.on('deleteUser', (user) => {
                alert(`Usuario ${user.name} eliminado correctamente`);
            });
        </script>
    <?php $__env->stopPush(); ?>
</div>
<?php /**PATH C:\laragon\www\laravelv9\livewire\livewireDatatable\resources\views/livewire/admin/users/live-user-table.blade.php ENDPATH**/ ?>