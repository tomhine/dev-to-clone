<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UnicornButton extends Component
{
    public int $count;

    public function mount(int $unicornCount)
    {
        $this->count = $unicornCount;
    }

    public function render()
    {
        return view('livewire.unicorn-button');
    }
}
