<?php

namespace App\Livewire;

use Livewire\Component;

class TestAction extends Component
{
    public $message = '';

    public function updateMessage($newMessage)
    {
        $this->message = $newMessage;
    }


    public $active = 0;

    public $count = 0;

    // public function increment()
    // {
    //     $this->count++;
    // }

    // public function decrement()
    // {
    //     $this->count--;
    // }

    public function render()
    {
        return view('livewire.test-action');
    }
}
