<div>
    <form wire:submit.prevent="{{ $method }}">
        <x-admin.users.component-modal :showModal="$showModal" :action="$action">
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                    Actualizar Usuario
                </h3>
                <hr />
                <div class="flex">
                    <x-admin.users.component-input placeholder="Ingrese Nombres" name="name" label="Nombre" type="text"></x-admin.users.component-input>
                    <x-admin.users.component-input placeholder="Ingrese Apellidos" name="lastname" label="Apellidos" type="text"></x-admin.users.component-input>
                </div>
                <div class="flex">
                    <x-admin.users.component-input placeholder="Ingrese Correo electrónico" name="email" label="Correo electrónico" type="email"></x-admin.users.component-input>
                    <x-admin.users.component-input-select name="role" label="Roles" :options="['admin' => 'Administrador','seller' => 'Vendedor','client' => 'Cliente']">
                    </x-admin.users.component-input-select>
                </div>
            </div>
        </x-admin.users.component-modal>
    </form>

</div>
