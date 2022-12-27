<?php

namespace App\Http\Livewire\Admin\Role;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class LiveRoleTable extends Component
{
    protected $listeners = ['updateListRole' => 'render'];
    public function render()
    {
        $roles = Role::all();
        $roles = $roles->each(function ($role) {
            $role->count_user = User::role($role->name)->count();
        });
        $permissions = Permission::all();
        $permissions = $permissions->each(function ($permission) {
            $permission->count_user = User::Permission($permission->name)->count();
        });
        return view('livewire.admin.role.live-role-table', compact('roles', 'permissions'));
    }
    public function deleteRole(Role $role)
    {
        // dd($role);
        $role->delete();
        $this->render();
    }
    public function deletePermission(Permission $permission)
    {
        // dd($role);
        $permission->delete();
        $this->render();
    }
}
