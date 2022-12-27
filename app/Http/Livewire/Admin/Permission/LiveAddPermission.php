<?php

namespace App\Http\Livewire\Admin\Permission;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class LiveAddPermission extends Component
{
    public $permission_check = [];
    public $showModal = 'hidden';
    public $model;
    protected $listeners = ['addPermission'];

    public function render()
    {
        return view('livewire.admin.permission.live-add-permission');
    }
    public function addPermission($model_id, $model = null)
    {
        // dd($model);
        $permissions = Permission::all();
        if (!$model) {
            $role = Role::find($model_id);
            $this->model = $role;
            $havePermission = $role->permissions()->get();
            foreach ($permissions as $permission) {
                if ($havePermission->contains($permission)) {
                    $this->permission_check[$permission->name]['check'] = true;
                } else {
                    $this->permission_check[$permission->name]['check'] = false;
                }
                $this->permission_check[$permission->name]['id'] = $permission->id;
            }
        } else {
            // dd($this->permission_check);
            $user = User::find($model_id);
            $this->model = $user;
            $havePermission = $user->getPermissionsViaRoles();
            foreach ($permissions as $p) {
                if ($user->hasPermissionTo($p)) {
                    $this->permission_check[$p->name]['check'] = true;
                } else {
                    $this->permission_check[$p->name]['check'] = false;
                }
                $this->permission_check[$p->name]['id'] = $p->id;
            }
            // dd($this->permission_check);
        }
        $this->showModal = '';
    }
    public function cerrarModal()
    {
        $this->showModal = 'hidden';
        // $this->reset();
    }
    public function addPermissionKey($permission)
    {
        // dd($permission, $this->role);
        if (!$this->model->hasPermissionTo($permission)) {
            $this->model->givePermissionTo($permission);
        } else {
            $this->model->revokePermissionTo($permission);
        }
    }
}
