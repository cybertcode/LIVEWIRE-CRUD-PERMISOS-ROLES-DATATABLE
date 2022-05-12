<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;

class LiveModal extends Component
{
    public $showModal = 'hidden'; //para abrir el modal
    protected $listeners = ['showModal' => 'abrirModal'];
    public function render()
    {
        return view('livewire.admin.users.live-modal');
    }
    // Mostrar modal
    public function abrirModal($user)
    {
        // dd($user);
        $this->showModal = '';
    }
    // Mostrar modal
    public function cerrarModal()
    {
        // dd($user);
        $this->showModal = 'hidden';
    }
}