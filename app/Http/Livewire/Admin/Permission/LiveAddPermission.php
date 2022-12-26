<?php

namespace App\Http\Livewire\Admin\Permission;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class LiveAddPermission extends Component
{
    public $permission_check = [];
    public $showModal = 'hidden';
    protected $listeners = ['addPermission'];

    public function render()
    {
        return view('livewire.admin.permission.live-add-permission');
    }
    public function addPermission(Role $role)
    {
        $permissions = Permission::all();
        $havePermission = $role->permissions()->get();
        foreach ($permissions as $permission) {
            if ($havePermission->contains($permission)) {
                $this->permission_check[$permission->name]['check'] = true;
            } else {
                $this->permission_check[$permission->name]['check'] = false;
            }
            $this->permission_check[$permission->name]['id'] = $permission->id;
        }
        // dd($this->permission_check);
        $this->showModal = '';
    }
    public function cerrarModal()
    {
        $this->showModal = 'hidden';
        // $this->reset();
    }
    public function addPermissionKey($permission)
    {
        dd($permission);
    }
}
