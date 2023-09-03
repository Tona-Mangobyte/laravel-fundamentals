<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Livewire\Component;

class Counter extends Component
{

    public $count = 0;

    public function mount(string $msg)
    {
        $this->count = 1;
    }
    public function incrementCount(): void
    {
        $this->count++;
    }

    public function decrementCount(): void {
        $this->count--;
    }

    public function render(): View
    {
        return view('livewire.counter');
    }
}
