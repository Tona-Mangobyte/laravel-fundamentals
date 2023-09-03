<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Livewire\Component;

class User extends Component
{
    public $user;

    public function mount($user)
    {
        Log::info($user);
        $this->user = $user;
    }

    public function render(): View
    {
        return view('livewire.user', ['user' => $this->user]);
    }
}
