<div>
    <input wire:model="search" type="text" placeholder="Search users..."/>

    <ul>
        @foreach($users as $user)
            {{--<li>{{ $user->username }}</li>--}}
            <li>{{ $user }}</li>
        @endforeach
    </ul>
</div>
