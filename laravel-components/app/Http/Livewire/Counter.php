<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Livewire\Component;

class Counter extends Component
{
    public function __construct()
    {
        parent::__construct(null);
        // Log::info("execute Counter Component");
    }

    /*protected function getListeners()
    {
        return ['increment' => 'incrementCount'];
    }*/


    protected $listeners = ['incrementCount'];

    protected $count = 0;

    public function mount()
    {
        $this->count = 1;
    }

    public function updated() {
        Log::info("execute updated");
    }

    public function incrementCount(): void
    {
        $this->count++;
        Log::info($this->count);
    }

    public function render(): View
    {
        return view('livewire.counter');
    }


    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(int $count): void
    {
        $this->count = $count;
    }
}
