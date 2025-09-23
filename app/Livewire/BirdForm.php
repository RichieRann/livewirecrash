<?php

namespace App\Livewire;

use App\Models\Entry;
use Livewire\Component;
use Livewire\Attributes\Validate;

class BirdForm extends Component
{
    #[Validate('required|integer')]
    public int $birdCount;

    #[Validate('required|string')] // min:3 means the minimum character is 3
    public string $notes;

    public string $msg;

    public function submit()
    {
        try {
            # VALIDATION | you can use the usual validation.
            # This app is using LIVEWIRE VALIDATION
            $this->validate();

            // Alter
            // Entry::create($this->pull())
            Entry::create([
                'bird_count' => $this->birdCount,
                'notes' => $this->notes,

            ]);
            $this->reset();
            $this->msg = 'Data Saved';
        } catch (\Throwable $err) {
            $this->msg = 'Error:' . $err->getMessage();
        }
    }

    // Mount method is purposedly for getting a default data. in this case the default data is placed on the welcome.blade.php where the component is called.
    // mount also can bed used to get data from database or from the url parameter
    public function mount($birdCount)
    {
        $this->birdCount = $birdCount;
    }


    public function render()
    {

        return view('livewire.bird-form', [
            'entries' => Entry::all(),
        ]);
    }
}
