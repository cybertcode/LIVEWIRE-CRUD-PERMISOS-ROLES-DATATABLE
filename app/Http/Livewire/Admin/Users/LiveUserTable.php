<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\admin\Apellido;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class LiveUserTable extends Component
{
    use WithPagination;
    public $search = "";
    public $perPage = 5; //Para filtrar cuando se ve
    public $camp = null; //Para fel campo a ordenar
    public $order = null; //Para fel campo a ordenar ascendente o descendente
    public $icon = '-sort'; //Para el ícono
    public $user_role = ''; //Para filtrado por ro
    /*******************************************************
     * Para mantener persistente los filtros y la búsqueda *
     *******************************************************/
    protected $queryString = [
        'search' => ['except' => ''],
        'camp' => ['except' => null],
        'order' => ['except' => null],
    ];
    /*********************************************
     * Método para resetear el url de paginación *
     *********************************************/
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function updatingPerPage()
    {
        $this->resetPage();
    }
    public function mount()
    {
        $this->icon = $this->iconDirection($this->order);
    }
    public function render()
    {
        $users = User::termino($this->search)
            ->role($this->user_role);
        //Verificamos si el campo no son nuloss
        if ($this->camp and $this->order) {
            // Para ordenar por apellido
            if ($this->camp === 'lastname') {
                $users = $users->orderBy(Apellido::select('lastname')->whereColumn('apellidos.user_id', 'users.id'), $this->order);
            } else {
                //Ejecuta la sentencia y lo agrega al usuario + el orderby
                $users = $users->orderBy($this->camp, $this->order);
            }
        } else {
            $this->camp = null;
            $this->order = null;
        }
        $users = $users->paginate($this->perPage);
        return view('livewire.admin.users.live-user-table', ['users' => $users]);
    }
    public function sortable($camp)
    {
        if ($camp !== $this->camp) {
            $this->order = null;
        }
        // dd($camp);
        switch ($this->order) {
            case null:
                $this->order = 'asc';
                // $this->icon = '-sort-up';
                break;
            case 'asc':
                $this->order = 'desc';
                // $this->icon = '-sort-down';
                break;
            case 'desc':
                $this->order = null;
                // $this->icon = '-sort';
                break;
            default:
                $this->order = 'asc';
                // $this->icon = '-sort-up';
                break;
        }
        // Actualizamos el campo a nivel global
        $this->icon = $this->iconDirection($this->order);
        $this->camp = $camp;
    }
    public function iconDirection($sort): string
    {
        if (!$sort) {
            return '-sort';
        }
        return $sort === 'asc' ? '-sort-up' : '-sort-down';
    }
    //Método para limpiar todo
    public function clear()
    {
        $this->reset(); //hace todo lo comentado
        // $this->page = 1;
        // $this->order = null;
        // $this->camp = null;
        // $this->icon = '-sort';
        // $this->search = '';
        // $this->perPage = 5;
        // $this->user_role = '';
    }
}