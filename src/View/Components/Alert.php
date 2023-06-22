<?php
namespace Alsace\FormGenerator\View\Components;
//namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $message;
    /**
     * Create a new component instance.
     */
    public function __construct(string $type,string $message)
    {
        //
        $this->type = $type;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('FormGenerator::components.alert');
    }
}