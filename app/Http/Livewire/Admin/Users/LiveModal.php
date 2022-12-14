<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use App\Models\admin\Apellido;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Livewire\TemporaryUploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\RequestUpdateUser;

class LiveModal extends Component
{
    use WithFileUploads;
    public $showModal = 'hidden'; //para abrir el modal
    public $name = '';
    public $lastname = '';
    public $email = '';
    public $action = '';
    public $method = '';
    public $roles = []; //para roles dinámicos
    public $role = '';
    public $user = null;
    public $password = '';
    public $titleModal = '';
    public $password_confirmation = '';
    public $profile_photo_path = null;
    protected $listeners = ['showModal' => 'abrirModal', 'showModalNewUser' => 'abrirModalNuevoUsuario'];
    public function mount()
    {
        $this->roles = Role::pluck('name', 'name')->toArray();
    }
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
        $this->titleModal = 'Actualizando Usuario';
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
        $this->titleModal = 'Registrando Usuario';
        $this->action = 'Guardar';
        $this->method = 'storeUser';
        $this->showModal = '';
    }
    public function updateUser()
    {
        // dd($request->all());
        // Validamos los campos
        $requestUserUpdate = new RequestUpdateUser();
        //Values enviamos solo los input correctamente validados
        $values = $this->validate($requestUserUpdate->rules($this->user), $requestUserUpdate->messages());
        if ($values['profile_photo_path']) {
            //Guardamos en servidor y almacenar la ruta en $url
            $url = Storage::put('img', $values['profile_photo_path']);
            // dd($values);
            if ($this->user->profile_photo_path) {
                //elimnamos la imagen
                Storage::delete($this->user->profile_photo_path);
                //Actualizamos cn la nueva ruta
                $this->user->profile_photo_path = $url;
            } else {
                $this->user->profile_photo_path = $url;
            }
        }
        $this->user->update($values);
        // $this->user->update($values);
        // $this->user->name = $values['name'];
        // $this->user->email = $values['email'];
        // $this->user->role = $values['role'];
        // $this->user->profile_photo_path = $values['profile_photo_path'];
        // $this->user->save();
        $this->user->assignRole($values['role']);
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
        // dd($this->user);
        $requestUserUpdate = new RequestUpdateUser();
        $values = $this->validate($requestUserUpdate->rules($this->user), $requestUserUpdate->messages());
        // dd($values);
        $user = new User();
        $apellido = new Apellido();
        $apellido->lastname = $values['lastname'];
        $user->fill($values);
        if ($values['profile_photo_path']) {
            $image = $this->profile_photo_path->store('img');
            // $url = Storage::put('img', $values['profile_photo_path']);
            // $user->profile_photo_path = $url;
            $user->profile_photo_path = $image;
        } else {
            $user->profile_photo_path = null;
        }
        // $user->profile_photo_path = $this->loadImage($values['profile_photo_path']);
        $user->assignRole($values['role']);
        $user->password = bcrypt($values['password']);
        DB::transaction(function () use ($user, $apellido) {
            $user->save();
            $apellido->r_user()->associate($user)->save();
        });
        $this->cerrarModal();
    }
    // Ya no usamos éste método
    private function loadImage(TemporaryUploadedFile $image)
    {
        $extension = $image->getClientOriginalExtension();
        // $new_name = time() . '.' . $extension;
        $location = Storage::disk('public')->put('img', $image);
        return $location;
    }
}
