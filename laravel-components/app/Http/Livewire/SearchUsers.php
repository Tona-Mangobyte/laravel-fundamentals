<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchUsers extends Component
{
    public $search = '';

    public function render()
    {

        return view('livewire.search-users', [
            // 'users' => User::where('username', $this->search)->get(),
            'users' => ['Tona', $this->search],
        ]);
    }
}
