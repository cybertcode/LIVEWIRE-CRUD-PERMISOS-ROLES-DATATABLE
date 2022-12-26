<div>
    <x-admin.users.component-modal :showModal="$showModal">
        <div class="w-full">
            <h3 class="text-center mt-3 text-gray-600 mb-3">Permisos registrados</h3>
            <hr>
            <div class=" w-full mt-3 ">
                @foreach ($permission_check as $key => $p)
                    <div class="flex flex-row">
                        <div class="mr-2 text-indigo-600">
                            <span class="fa fa-check "></span>
                        </div>
                        <div class="w-3/4 text-gray-600">
                            {{ $key }}
                        </div>
                        <div class="flex-1">
                            <input type="checkbox" class="">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </x-admin.users.component-modal>

</div>
