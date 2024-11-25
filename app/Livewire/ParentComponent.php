<?php

namespace App\Livewire;

use Livewire\Component;

class ParentComponent extends Component
{
    public $parent = "I am Parent";
    public function render()
    {
        return view('livewire.parent-component');
    }
}
