<?php

namespace App\Livewire;

use Livewire\Component;

class TestPost extends Component
{
    // public $message = "Hello";
    public $name;


    public function render()
    {
        return view('livewire.test-post');
    }
}
