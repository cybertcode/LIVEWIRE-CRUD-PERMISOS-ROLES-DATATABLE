<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Listado de Usuarios') }}
        </h2>
    </x-slot>
    <div class="py-2">
        <div class="max-w-[90%] mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                {{-- /**********************************************
                * Aquí agregamos nuestro componente livewire *
                **********************************************/  --}}
                @livewire('admin.users.live-user-table')
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
