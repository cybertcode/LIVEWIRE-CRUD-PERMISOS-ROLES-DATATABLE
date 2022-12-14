<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Roles y permisos') }}
        </h2>
    </x-slot>
    <div class="py-2">
        <div class="max-w-[90%] mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-gray-200 shadow-xl sm:rounded-lg">
                {{-- /**********************************************
                * Aquí agregamos nuestro componente livewire *
                **********************************************/  --}}
                @livewire('admin.role.live-role-table')
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
