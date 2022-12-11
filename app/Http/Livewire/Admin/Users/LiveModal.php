<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use App\Http\Requests\RequestUpdateUser;

class LiveModal extends Component
{
    public $showModal = 'hidden'; //para abrir el modal
    public $name = '';
    public $lastname = '';
    public $email = '';
    public $action = '';
    public $method = '';
    public $role = '';
    public $user = 'null';
    protected $listeners = ['showModal' => 'abrirModal', 'showModalNewUser' => 'abrirModalNuevoUsuario'];
    public function render()
    {
        return view('livewire.admin.users.live-modal');
    }
    // Mostrar modal
    public function abrirModal(User $user)
    {
        // dd($user);
        $this->user = $user;
        $this->name = $user->name;
        $this->lastname = $user->r_lastname->lastname;
        $this->email = $user->email;
        $this->role = $user->role;
        $this->action = 'Actualizar';
        $this->method = 'updateUser';
        $this->showModal = '';
    }
    // Mostrar modal
    public function cerrarModal()
    {
        // dd($user);
        // $this->showModal = 'hidden';
        $this->resetErrorBag(); //borrar los errores
        $this->resetValidation(); //borrar las validaciones
        $this->reset(); //Pone los valores por default
    }
    // Mostrar modal
    public function abrirModalNuevoUsuario()
    {
        $this->user = 'null';
        $this->action = 'Guardar';
        $this->method = 'storeUser';
        $this->showModal = '';
    }
    public function updateUser()
    {
        // Validamos los campos
        $requestUserUpdate = new RequestUpdateUser();
        //Values enviamos solo los input correctamente validados
        $values = $this->validate($requestUserUpdate->rules($this->user), $requestUserUpdate->messages());
        $this->user->update($values);
        $this->user->r_lastname()->update(['lastname' => $values['lastname']]);
        $this->emit('userListUpdate');
        $this->reset();
        // dump($values);
    }
    // Para validación asíncrona
    public function updated($label) //update escucha todos los campos públicos que estan iterando entre el controlador y la vista
    {
        $requestUserUpdate = new RequestUpdateUser();
        $this->validateOnly($label, $requestUserUpdate->rules($this->user), $requestUserUpdate->messages());
    }
    public function storeUser()
    {
    }
}
