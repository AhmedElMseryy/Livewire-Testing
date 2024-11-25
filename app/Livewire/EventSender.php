<?php

namespace App\Livewire;

use Livewire\Component;

class EventSender extends Component
{
    public $message = '';

    public function sendEvent()
    {
        $this->dispatch('messageSent', $this->message);
    }
    public function render()
    {
        return view('livewire.event-sender');
    }
}
