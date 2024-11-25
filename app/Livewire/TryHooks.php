<?php

namespace App\Livewire;

use Livewire\Component;

class TryHooks extends Component
{
    public $count = 0;

    public function mount()
    {
        dump('mount');
    }

    public function boot()
    {
        dump('boot');
    }
    public function increment()
    {
        $this->count++;
    }
    public function render()
    {
        dump('render');
        return view('livewire.try-hooks');
    }
}
