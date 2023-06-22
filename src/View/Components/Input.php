<?php
namespace Alsace\FormGenerator\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type,
        public string $name,
        public string $value,
        public string $id,
        public string $placeholder,
        public string $class)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('FormGenerator::components.input');
    }
}