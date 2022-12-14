<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Listado de vendedores') }}
        </h2>
    </x-slot>
    <div class="py-2">
        <div class="max-w-[90%] mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="flex">
                    @can('vendedor create')
                        <button class="flex-1">Crear</button>
                    @endcan
                    @can('vendedor update')
                        <button class="flex-1">Actualizar</button>
                    @endcan
                    @can('vendedor delete')
                        <button class="flex-1">Eliminar</button>
                    @endcan
                </div>
            </div>
        </div>
    </div>
    {{-- /*************************************
 * Incluimos el componente del modal *
 *************************************/  --}}
    @push('modals')
        <livewire:admin.users.live-modal>
        @endpush
</x-app-layout>
