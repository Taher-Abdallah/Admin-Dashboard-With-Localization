<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public string $colour ;
    public string $text ;


    public function __construct(  public string $href , public string $type)
    {
        if($type == 'edit') {
            $this->colour = 'success' ;
            $this->text = "<i class='fe fe-edit fa-2x'></i>";
        } elseif($type == 'show') {
            $this->colour = 'primary' ;
            $this->text = "<i class='fe fe-eye fa-2x'></i>" ;
        }elseif($type=='create') {
                    $this->colour = 'primary' ;
            $this->text =  __('keywords.add_new')  ;
    }
}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-component');
    }
}
