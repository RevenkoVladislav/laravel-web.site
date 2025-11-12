<?php

namespace App\View\Components\forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    public string $id;
    public string $name;
    public string $type;
    public ?string $value;
    public string $label;
    public string $classes;

    /**
     * Create a new component instance.
     */
    public function __construct(string $name, string $type = 'text', ?string $value = null, string $label = '', string $classes = 'mb-3')
    {
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
        $this->label = $label;
        $this->classes = $classes;
        $this->id = $name . uniqid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.input');
    }
}
