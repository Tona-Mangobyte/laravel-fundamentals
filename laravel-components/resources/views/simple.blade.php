<html>
<head>
    @livewireStyles
</head>
<body>
<div>
    @foreach($users as $user)
        Hello, {{ $user  }} <br/>
    @endforeach

    <br/>
    {{--@livewire('search-users')--}}
    {{--@livewire('counter')--}}
    <livewire:counter msg="Hello Components"/>

    <livewire:simple />
</div>

@livewireScripts
</body>
</html>
