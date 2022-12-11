<?php

namespace App\View\Components\admin\users;

use Illuminate\View\Component;

class ComponentInput extends Component
{
    public $label;

    public $name;

    public $type;

    public $placeholder;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $label, string $placeholder, string $name, string $type = 'text')
    {
        //
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.users.component-input');
    }
}