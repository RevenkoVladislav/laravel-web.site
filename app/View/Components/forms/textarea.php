<?php

namespace App\View\Components\forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class textarea extends Component
{
    public string $id;
    public string $name;
    public ?string $value;
    public string $cols;
    public string $rows;
    public string $label;
    public string $classes;
    /**
     * Create a new component instance.
     */
    public function __construct(string $name, ?string $value = null, string $label = '', string $classes = 'mb-3', string $cols = '30', string $rows = '10')
    {
        $this->name = $name;
        $this->value = $value;
        $this->label = $label;
        $this->classes = $classes;
        $this->cols = $cols;
        $this->rows = $rows;
        $this->id = $name . uniqid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.textarea');
    }
}
