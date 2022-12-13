<div>
    <form wire:submit.prevent="{{ $method }}">
        <x-admin.users.component-modal :showModal="$showModal" :action="$action">
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
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
                    <x-admin.users.component-input-select name="role" label="Roles" :options="['admin' => 'Administrador', 'seller' => 'Vendedor', 'client' => 'Cliente']">
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
                <div class="text-center mt-4" wire:loading>
                    <span
                        class="inline-flex items-center rounded-full p-2 bg-indigo-500 text-white group transition-all duration-500 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-none"
                        role="alert" tabindex="0">
                        <span
                            class="whitespace-nowrap inline-block group-hover:max-w-screen-2xl group-focus:max-w-screen-2xl max-w-0 scale-80 group-hover:scale-100 overflow-hidden transition-all duration-500 group-hover:px-2 group-focus:px-2">Cargando
                            imagen...</span>
                    </span>
                </div>
                @if ($profile_photo_path)
                    <div class="flex justify-center">
                        <img src="{{ $profile_photo_path->temporaryUrl() }}" alt="no hay"
                            class="shadow-xl rounded-full object-cover mt-4 mb-4">
                    </div>
                @endif
                @isset($user->profile_photo_path)
                    <div class="flex justify-center">
                        <img src="{{ Storage::url($user->profile_photo_path) }}" alt="no hay"
                            class="shadow-xl rounded-full object-cover mt-4 mb-4">
                    </div>
                @endisset

            </div>
        </x-admin.users.component-modal>
    </form>

</div>
