<?php

namespace App\Livewire;


use Livewire\Component;

class SendEvent extends Component
{

    public string $message;

    public function sendMessage()
    {
        $this->dispatch('messageSent', $this->message)->to(RechieveEvent::class);
    }

    public function resetComponent()
    {
        $this->dispatch('resetComponent');
    }



    public function render()
    {
        return view('livewire.send-event');
    }
}
