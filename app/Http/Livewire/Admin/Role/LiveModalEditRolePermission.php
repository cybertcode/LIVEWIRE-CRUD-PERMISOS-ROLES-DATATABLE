<?php

namespace App\Http\Livewire\Admin\Role;

use App\Http\Requests\RequestCreateRole;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use App\Http\Requests\RequestUpdateRole;

class LiveModalEditRolePermission extends Component
{
    public $role;
    public $target;
    public $actionTarget;
    public $button;
    public $showModal = false;
    protected $listeners = [
        'toogleModal'
    ];

    public function render()
    {
        return view('livewire.admin.role.live-modal-edit-role-permission');
    }

    public function toogleModal($model_id = null, $model = null)
    {
        // dd($model_id, $model);
        $this->resetErrorBag();
        $this->resetValidation();
        $this->role = '';
        if ($model_id && $model) {
            $this->target = $model == 'Role' ? Role::find($model_id) : '';
            $this->role = $this->target->name;
            $this->button = 'Actualizar';
            $this->actionTarget = 'updateTarget';
        } else {
            $this->button = 'Registrar';
            $this->actionTarget = 'createTarget';
        }
        $this->showModal = $this->showModal ? false : true;
    }
    public function updateTarget()
    {
        $request = new RequestUpdateRole;
        $values = $this->validate($request->rules(), $request->messages());
        $this->target->update(['name' => $values['role']]);
        $this->reset();
        // dd($values);
        // Para refrescar la tabla
        $this->emit('updateListRole');
    }
    public function createTarget()
    {
        $request = new RequestCreateRole();
        $values = $this->validate($request->rules(), $request->messages());
        // dd($values);
        Role::create(['name' => $values['role']]);
        $this->reset(); //Pone los valores por default
        $this->emit('updateListRole');
    }
}
