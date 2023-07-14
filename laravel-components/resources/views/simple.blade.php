<script src="/livewire/livewire.js"></script>
<div>
    <?php foreach ($users as $user): ?>
    Hello, <?php echo $user; ?> <br />
    <?php endforeach; ?>

    <br/>
    {{--@livewire('search-users')--}}
    @livewire('counter')
</div>
