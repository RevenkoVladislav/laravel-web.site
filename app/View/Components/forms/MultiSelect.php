<?php

namespace App\View\Components\forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Collection;

class MultiSelect extends Component
{
    public ?string $classes;
    public string $name;
    public string $id;
    public string $label;
    public Collection $tags;
    /**
     * Create a new component instance.
     */
    public function __construct(string $name, Collection $tags, string $label, ?string $classes = null)
    {
        $this->classes = $classes;
        $this->name = $name;
        $this->label = $label;
        $this->tags = $tags;
        $this->id = $name . uniqid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.multi-select');
    }
}
