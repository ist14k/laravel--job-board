<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextInput extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public ?string $value = null,
        public ?string $type = 'text',
        public ?string $placeholder = null,
        // public ?string $label = null,
        // public ?bool $required = false,
        // public ?bool $autofocus = false,
        // public ?bool $autocomplete = false,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.text-input');
    }
}
