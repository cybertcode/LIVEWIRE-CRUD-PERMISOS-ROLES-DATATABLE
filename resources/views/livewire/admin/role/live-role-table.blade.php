<div>
    <x-admin.role.table caption="Roles">
        <div class="px-4 py-4 -mx-4 overflow-x-auto sm:-mx-8 sm:px-8">
            <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th scope="col"
                                class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                Item
                            </th>
                            <th scope="col"
                                class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                Rol
                            </th>
                            <th scope="col"
                                class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                Usos
                            </th>
                            <th scope="col"
                                class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                Creado
                            </th>
                            <th scope="col"
                                class="px-5 py-3 text-sm font-normal text-center text-gray-800 uppercase bg-white border-b border-gray-200">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($roles as $role)
                            <tr>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <div class="flex items-center">
                                        <div class="">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $loop->iteration }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $role->name }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $role->count_user }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $role->created_at->diffForHumans() }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200 text-center">
                                    <button href="javascript:void(0)" type="button"
                                        class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white  transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg">
                                        Permisos
                                    </button>
                                    <a href="javascript:void(0)" type="button"
                                        class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white  transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg"
                                        wire:click="$emit('toogleModal',{{ $role->id }},'Role')">
                                        Editar
                                    </a>
                                    @if (!$role->count_user)
                                        <a href="" type="button"
                                            class="py-2 px-4  bg-red-600 hover:bg-red-700 focus:ring-red-500 focus:ring-offset-red-200 text-white  transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg">
                                            Elimnar
                                        </a>
                                    @endif
                                </td>
                            </tr>

                        @empty
                            Sin roles
                        @endforelse

                    </tbody>
                </table>
                <div class="flex flex-col items-center px-5 py-5 bg-white xs:flex-row xs:justify-between">
                    <div class="flex items-center">
                        {{-- Para paginar si hay --}}
                    </div>
                </div>
            </div>
        </div>
    </x-admin.role.table>
    <x-admin.role.table caption="Permisos">
        <div class="px-4 py-4 -mx-4 overflow-x-auto sm:-mx-8 sm:px-8">
            <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th scope="col"
                                class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                Item
                            </th>
                            <th scope="col"
                                class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                Rol
                            </th>
                            <th scope="col"
                                class="px-5 py-3 text-sm font-normal text-left text-gray-800 uppercase bg-white border-b border-gray-200">
                                Creado
                            </th>
                            <th scope="col"
                                class="px-5 py-3 text-sm font-normal text-center text-gray-800 uppercase bg-white border-b border-gray-200">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            #1
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    Admin
                                </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    12/09/2020
                                </p>
                            </td>
                            <td class="px-5 py-5 text-sm bg-white border-b border-gray-200 text-center">
                                <a href="" type="button"
                                    class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white  transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg">
                                    Permisos
                                </a>
                                <a href="" type="button"
                                    class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white  transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg">
                                    Editar
                                </a>
                                <a href="" type="button"
                                    class="py-2 px-4  bg-red-600 hover:bg-red-700 focus:ring-red-500 focus:ring-offset-red-200 text-white  transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg">
                                    Elimnar
                                </a>

                            </td>
                        </tr>

                    </tbody>
                </table>
                <div class="flex flex-col items-center px-5 py-5 bg-white xs:flex-row xs:justify-between">
                    <div class="flex items-center">
                        <button type="button"
                            class="w-full p-4 text-base text-gray-600 bg-white border rounded-l-xl hover:bg-gray-100">
                            <svg width="9" fill="currentColor" height="8" class=""
                                viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1427 301l-531 531 531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19l-742-742q-19-19-19-45t19-45l742-742q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z">
                                </path>
                            </svg>
                        </button>
                        <button type="button"
                            class="w-full px-4 py-2 text-base text-indigo-500 bg-white border-t border-b hover:bg-gray-100 ">
                            1
                        </button>
                        <button type="button"
                            class="w-full px-4 py-2 text-base text-gray-600 bg-white border hover:bg-gray-100">
                            2
                        </button>
                        <button type="button"
                            class="w-full px-4 py-2 text-base text-gray-600 bg-white border-t border-b hover:bg-gray-100">
                            3
                        </button>
                        <button type="button"
                            class="w-full px-4 py-2 text-base text-gray-600 bg-white border hover:bg-gray-100">
                            4
                        </button>
                        <button type="button"
                            class="w-full p-4 text-base text-gray-600 bg-white border-t border-b border-r rounded-r-xl hover:bg-gray-100">
                            <svg width="9" fill="currentColor" height="8" class=""
                                viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </x-admin.role.table>
</div>