<?php

namespace App\Livewire;

use Livewire\Component;

class FlashComponent extends Component
{
    public function flash()
    {
        session()->flash('success', 'Clicked successfully.');
    }
    public function render()
    {
        return view('livewire.flash-component');
    }
}
