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
    public Collection $arrayOptions;

    /**
     * Create a new component instance.
     */
    public function __construct(string $name, Collection $arrayOptions, string $label = '')
    {
        $this->name = $name;
        $this->arrayOptions = $arrayOptions;
        $this->label = $label;
        $this->id = $name . '_' . microtime(true) . '_' . mt_rand(0, 10000);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.select');
    }
}
