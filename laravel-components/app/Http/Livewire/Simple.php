<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Simple extends Component
{

    public $count = 0;
    public function onClick() {
        $this->count++;
    }

    public function render(){
        return view('livewire.simple');
    }
}
