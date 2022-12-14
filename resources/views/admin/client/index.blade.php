<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Listado de Usuarios') }}
        </h2>
    </x-slot>
    <div class="py-2">
        <div class="max-w-[90%] mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="flex">
                    @can('cliente create')
                        <button class="flex-1">Crear</button>
                    @endcan
                    @can('cliente update')
                        <button class="flex-1">Actualizar</button>
                    @endcan
                    @can('cliente delete')
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
