<?php

namespace App\View\Components\admin\users;

use Illuminate\View\Component;

class ComponentInputSelect extends Component
{
    public $name;

    public $options;

    public $label;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name, array $options, string $label)
    {
        //
        $this->name = $name;
        $this->options = $options;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.users.component-input-select');
    }
}