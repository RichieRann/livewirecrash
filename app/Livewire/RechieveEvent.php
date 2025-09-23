<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class RechieveEvent extends Component
{

    public string $message = 'No Message';

    #[On('messageSent')]
    public function displayMessage($newMessage)
    {
        $this->message = $newMessage;
    }

    #[On('resetComponent')]
    public function resetComponent()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.rechieve-event');
    }
}
