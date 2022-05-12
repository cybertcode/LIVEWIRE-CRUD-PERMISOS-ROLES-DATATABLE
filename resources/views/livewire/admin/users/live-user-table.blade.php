    <div class="container mx-auto px-4 sm:px-8 max-w-[100%]">
        <div class="py-8">
            <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
                {{-- <h2 class="text-2xl leading-tight">Users</h2>  --}}
                <div>
                    Mostrar
                    <select class="" wire:model="perPage">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        {{-- <option value="todos">Todos</option>  --}}
                    </select>
                    Registros
                </div>

                <div class="text-end">
                    <form class="flex flex-col md:flex-row w-3/4 md:w-full max-w-sm md:space-x-3 space-y-3 md:space-y-0 justify-center">
                        <div class="relative">
                            <input type="text" id='"form-subscribe-Filter' class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="buscar" wire:model="search" />
                        </div>
                        <button class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="button" wire:click="clear">
                            <i class="fa fa-eraser"></i> Limpiar
                        </button>
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
                                        <span class="fa-solid fa{{ $camp === 'id' ? $icon : '-sort' }}"></span>
                                    </button>

                                </th>
                                <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal ">
                                    Nombre
                                    <button wire:click="sortable('name')">
                                        <span class="fa-solid fa{{ $camp === 'name' ? $icon : '-sort' }}"></span>

                                    </button>
                                </th>
                                <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal ">
                                    Apellidos
                                    <button wire:click="sortable('lastname')">
                                        <span class="fa-solid fa{{ $camp === 'lastname' ? $icon : '-sort' }}"></span>

                                    </button>
                                </th>
                                <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">
                                    Correo electrónico
                                    <button wire:click="sortable('email')">
                                        <span class="fa-solid fa{{ $camp === 'email' ? $icon : '-sort' }}"></span>
                                    </button>
                                </th>
                                <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">
                                    Creado
                                    <button wire:click="sortable('created_at')">
                                        <span class="fa-solid fa{{ $camp === 'created_at' ? $icon : '-sort' }}"></span>
                                    </button>

                                </th>
                                <th scope="col" class="px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $loop->iteration }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $user->name }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $user->r_lastname->lastname }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $user->email }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $user->created_at }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                        Editar|Eliminar
                                    </a>
                                </td>
                            </tr>
                            @empty
                            </tr>
                            <td colspan="5">No se encontró registros</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="px-5 bg-white py-5  flex-col xs:flex-row items-center xs:justify-between">
                        <div class=" items-center">
                            {!! $users->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
