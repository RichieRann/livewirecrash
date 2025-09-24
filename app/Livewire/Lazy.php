<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Volt\Compilers\Mount;

class Lazy extends Component
{

    public function mount()
    {
        sleep(3);
    }

    #this method is for the placeholder or loading state, this will be shown while the component is loading
    public function placeholder()
    {
        return <<<HTML
            <div class="bg-neutral-500/30 fixed top-0 left-0 w-full h-full flex justify-center items-center text-black">
                <div class="p-5 bg-blue-400 text-white font-bold rounded animate-bounce">
                    Loading critical information...
                </div>
            </div>
        HTML;
    }


    public function render()
    {
        return view('livewire.lazy');
    }
}
