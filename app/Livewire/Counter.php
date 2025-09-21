<?php

namespace App\Livewire;

use Brick\Math\BigInteger;
use Livewire\Component;
use Ramsey\Uuid\Type\Decimal;

class Counter extends Component
{
    public int $count = 10;
    public Decimal $number;

    public function changeCount($number)
    {
        $this->count = $number;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
