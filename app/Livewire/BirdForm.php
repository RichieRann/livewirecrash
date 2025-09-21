<?php

namespace App\Livewire;

use App\Models\Entry;
use Livewire\Component;

class BirdForm extends Component
{

    public int $count;
    public string $notes;
    public string $msg;

    public function submit()
    {
        try {
            // Alter
            // Entry::create($this->pull())
            Entry::create([
                'bird_count' => $this->count,
                'notes' => $this->notes,

            ]);
            $this->reset();
            $this->msg = 'Data Saved';
        } catch (\Throwable $err) {
            $this->msg = 'Error:' . $err->getMessage();
        }
    }



    public function render()
    {

        return view('livewire.bird-form', [
            'entries' => Entry::all(),
        ]);
    }
}
