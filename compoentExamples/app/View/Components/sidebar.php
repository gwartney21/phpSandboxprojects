<?php

namespace App\View\Components;

use Illuminate\View\Component;

class sidebar extends Component
{
    
    public $info;

    public function __construct($info)
    {
        $this->info = $info;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar');
    }

    public function list($value){
        //display list from the compoent it self
        return [
            'hi',
            'Came from inside the compoent',
            $value
        ];
    }
}
