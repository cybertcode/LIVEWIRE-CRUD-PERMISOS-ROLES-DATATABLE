<div>
    <form wire:submit.prevent="{{ $method }}">
        <x-admin.users.component-modal :showModal="$showModal" :action="$action">
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">
                    {{ $titleModal }}
                </h3>
                <hr />
                <div class="flex">
                    <x-admin.users.component-input placeholder="Ingrese Nombres" name="name" label="Nombre"
                        type="text"></x-admin.users.component-input>
                    <x-admin.users.component-input placeholder="Ingrese Apellidos" name="lastname" label="Apellidos"
                        type="text"></x-admin.users.component-input>
                </div>
                <div class="flex">
                    <x-admin.users.component-input placeholder="Ingrese Correo electrónico" name="email"
                        label="Correo electrónico" type="email"></x-admin.users.component-input>
                    <x-admin.users.component-input-select name="role" label="Roles" :options="$roles">
                    </x-admin.users.component-input-select>
                </div>
                <div class="flex">
                    <x-admin.users.component-input placeholder="Seleccione foto" name="profile_photo_path"
                        label="Imagen" type="file"></x-admin.users.component-input>
                </div>
                @if ($action == 'Guardar')
                    <div class="flex">
                        <x-admin.users.component-input placeholder="Contraseña" name="password" label="Contraseña"
                            type="password"></x-admin.users.component-input>
                        <x-admin.users.component-input placeholder="Confirmar contraseña" name="password_confirmation"
                            label="Confirmar contraseña" type="password"></x-admin.users.component-input>
                    </div>
                @endif
                <div class="mt-4 text-center" wire:loading>
                    <span
                        class="inline-flex items-center p-2 text-white transition-all duration-500 bg-indigo-500 rounded-full group focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-none"
                        role="alert" tabindex="0">
                        <span
                            class="inline-block overflow-hidden transition-all duration-500 whitespace-nowrap group-hover:max-w-screen-2xl group-focus:max-w-screen-2xl max-w-0 scale-80 group-hover:scale-100 group-hover:px-2 group-focus:px-2">Cargando
                            imagen...</span>
                    </span>
                </div>
                {{-- @if ($profile_photo_path)
                @endif --}}
                @isset($user->profile_photo_path)
                    <div class="flex justify-center">
                        <img src="{{ Storage::url($user->profile_photo_path) }}" alt="no hay"
                            class="object-cover mt-4 mb-4 rounded-full shadow-xl">
                    </div>
                @endisset

            </div>
        </x-admin.users.component-modal>
    </form>

</div>
