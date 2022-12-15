<?php

namespace App\Http\Livewire\Admin\Role;

use Livewire\Component;

class LiveModalEditRolePermission extends Component
{
    public $role;
    public $showModal = false;
    protected $listeners = [
        'toogleModal'
    ];

    public function render()
    {
        return view('livewire.admin.role.live-modal-edit-role-permission');
    }

    public function toogleModal()
    {
        // dd('evento');
        $this->showModal = $this->showModal ? false : true;
    }
}
