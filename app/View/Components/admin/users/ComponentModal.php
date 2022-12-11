<?php

namespace App\View\Components\admin\users;

use Illuminate\View\Component;

class ComponentModal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    // Inicializamos el parámetro
    public $showModal;
    // Le pasamos el parámetro showModal
    public function __construct(string $showModal)
    {
        $this->showModal = $showModal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.users.component-modal');
    }
}