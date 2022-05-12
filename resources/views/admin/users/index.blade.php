<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Listado de Usuarios") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-[90%] mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- /**********************************************
                * Aquí agregamos nuestro componente livewire *
                **********************************************/  --}}
                @livewire('admin.users.live-user-table')
            </div>
        </div>
    </div>
</x-app-layout>
