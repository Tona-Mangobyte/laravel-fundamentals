<div>
    <h2>User List:</h2>
    @foreach($users as $user)
        @livewire('user', ['user' => $user, key($user['id'])])
    @endforeach
</div>
