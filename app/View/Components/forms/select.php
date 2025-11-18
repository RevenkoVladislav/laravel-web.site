<?php

namespace App\View\Components\forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class select extends Component
{
    public string $id;
    public string $name;
    public string $label;
    public ?string $value;
    public Collection $arrayOptions;
    public ?string $default;
    public string $displayField;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $name,
        Collection $arrayOptions,
        string $label = '',
        ?string $value = null,
        ?string $default = null,
        string $displayField = 'name',
    )
    {
        $this->name = $name;
        $this->arrayOptions = $arrayOptions;
        $this->label = $label;
        $this->value = $value;
        $this->id = $name . uniqid();
        $this->default = $default;
        $this->displayField = $displayField;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.select');
    }
}
