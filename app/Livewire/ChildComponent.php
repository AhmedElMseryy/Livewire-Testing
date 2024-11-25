<?php

namespace App\Livewire;

use Livewire\Component;

class ChildComponent extends Component
{
    public $child = "I am child";
    public function render()
    {
        return view('livewire.child-component');
    }
}
