<?php

namespace App\Livewire;

use Livewire\Component;

class EventListener extends Component
{
    public $receivedMessage = '';

    protected $listeners = ['messageSent' => 'updateMessage'];

    public function updateMessage($message)
    {
        $this->receivedMessage = $message;
    }
    public function render()
    {
        return view('livewire.event-listener');
    }
}
