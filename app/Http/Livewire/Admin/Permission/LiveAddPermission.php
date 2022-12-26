<?php

namespace App\Http\Livewire\Admin\Permission;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class LiveAddPermission extends Component
{
    public $showModal = 'hidden';
    protected $listeners = ['addPermission'];

    public function render()
    {
        return view('livewire.admin.permission.live-add-permission');
    }
    public function addPermission(Role $role)
    {

        $this->showModal = '';
    }
    public function cerrarModal()
    {
        $this->showModal = 'hidden';
        // $this->reset();
    }
}
