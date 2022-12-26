<div class="container mx-auto px-4 sm:px-8 max-w-[100%]">
    <div class="py-8">
        <div class="flex flex-row justify-between w-full mb-1 sm:mb-0">
            {{-- <h2 class="text-2xl leading-tight">Users</h2> --}}
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
                    {{-- <option value="todos">Todos</option> --}}
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
                    {{-- <select
                        class="px-6 py-1 text-base text-gray-700 placeholder-gray-400 bg-white border border-transparent border-gray-400 rounded-lg shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent "
                        wire:model="user_role">
                        <option value="" selected>Seleccione</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role }}">{{ $role }}</option>
                        @endforeach --}}
                    {{-- <option value="vendedor">Vendedor</option>
                        <option value="cliente">Cliente</option> --}}
                    {{-- </select> --}}
                    <x-admin.users.component-input-select placeholder="Seleccione" :options="$roles" name="user_role"
                        label="">

                    </x-admin.users.component-input-select>
                    @can('usuario create')
                        <button
                            class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-blue-200"
                            type="button" wire:click="showModal">
                            <i class=" fa fa-add"></i> Nuevo
                        </button>
                    @endcan
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
                                <span class="fa-solid fa{{ $camp === 'id' ? $icon : '-sort' }}"></span>
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
                                <span class="fa-solid fa{{ $camp === 'name' ? $icon : '-sort' }}"></span>
                            </button>
                        </th>
                        <th scope="col"
                            class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200 ">
                            Apellidos
                            <button wire:click="sortable('lastname')">
                                <span class="fa-solid fa{{ $camp === 'lastname' ? $icon : '-sort' }}"></span>
                            </button>
                        </th>
                        <th scope="col"
                            class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                            Correo electrónico
                            <button wire:click="sortable('email')">
                                <span class="fa-solid fa{{ $camp === 'email' ? $icon : '-sort' }}"></span>
                            </button>
                        </th>
                        <th scope="col"
                            class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                            Rol
                            <button wire:click="sortable('role')">
                                <span class="fa-solid fa{{ $camp === 'role' ? $icon : '-sort' }}"></span>
                            </button>

                        </th>
                        <th scope="col"
                            class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                            Creado
                            <button wire:click="sortable('created_at')">
                                <span class="fa-solid fa{{ $camp === 'created_at' ? $icon : '-sort' }}"></span>
                            </button>

                        </th>
                        @if (auth()->user()->can('usuario update') or
                            auth()->user()->can('usuario delete'))
                            <th scope="col"
                                class="px-5 py-3 text-sm font-normal text-center text-gray-800 uppercase bg-white border-b border-gray-200"
                                style="width: 22% !important;">Acciones
                            </th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $loop->iteration }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="ml-3">
                                        <p class="w-16 h-16 text-gray-900 whitespace-no-wrap ">
                                            @if ($user->profile_photo_path)
                                                <img src=" {{ asset('storage/' . $user->profile_photo_path) }}"
                                                    class="object-cover ">
                                            @else
                                                <img src=" https://images.pexels.com/photos/4498362/pexels-photo-4498362.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                    class="object-cover ">
                                            @endif

                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $user->name }}
                                </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $user->r_lastname->lastname }}
                                </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $user->email }}
                                </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $user->roles()->first()->name ?? 'Sin rol' }}
                                </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $user->created_at->format('d-m-Y') }}
                                </p>
                            </td>
                            <td class="px-2 py-2 text-sm bg-white border-b border-gray-200 ">
                                <div class="">
                                    @can('usuario update')
                                        <a href="javascript:void(0)" wire:click="showModal({{ $user->id }})"
                                            type="button"
                                            class="justify-center px-4 py-2 mx-0 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                                            <i class="fa-solid fa-pen-to-square"></i> Editar
                                        </a>
                                    @endcan
                                    @can('usuario update')
                                        <a href="javascript:void(0)"
                                            wire:click="$emit('addPermission',{{ $user->id }},'user')" type="button"
                                            class="justify-center px-4 py-2 mx-0 text-base font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                                            <i class="fa-solid fa-pen-to-square"></i> Permisos
                                        </a>
                                    @endcan
                                    @can('usuario delete')
                                        <a href="javascript:void(0)" type="button"
                                            class="justify-center px-4 py-2 mx-0 text-base font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm"
                                            onclick="confirmDeleteUser({{ $user->id }})">
                                            <i class="fa-solid fa-circle-xmark"></i> Eliminar
                                        </a>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    @empty
                        </tr>
                        <td colspan="5">No se encontró registros</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="flex-col items-center px-5 py-5 bg-white xs:flex-row xs:justify-between">
                <div class="items-center ">
                    {!! $users->links() !!}
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
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
    @endpush
</div>
