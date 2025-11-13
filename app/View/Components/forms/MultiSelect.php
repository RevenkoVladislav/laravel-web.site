<?php

namespace App\View\Components\forms;

use App\Models\Post;
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
    public ?Post $post;
    public array $selected;
    /**
     * Create a new component instance.
     */
    public function __construct(string $name, Collection $tags, string $label, ?string $classes = null, ?Post $post = null)
    {
        $this->classes = $classes;
        $this->name = $name;
        $this->label = $label;
        $this->tags = $tags;
        $this->id = $name . uniqid();
        $this->post = $post;

        $old = old($name); //если отправили форму, то сюда попадает массив

        if (is_array($old)){
            //если форма отправлена, то взять эти данные
            $this->selected = $old;
        } elseif ($post) {
            //форма не отправлено, НО редактируем пост, значит берем данные через отношение к тэгам у постов
            $this->selected = $post->tags->pluck('id')->toArray();
        } else {
            //если форма еще не отправлена и НЕ редактируем пост значит ничего не выбрано
            $this->selected = [];
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.multi-select');
    }
}
