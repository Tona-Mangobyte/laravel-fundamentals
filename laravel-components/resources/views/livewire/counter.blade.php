<div>
    <button wire:click.self="incrementCount">+</button>
    <button wire:click="decrementCount">-</button>
    <h1>{{ $count }}</h1>
</div>
