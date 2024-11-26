<div class="w-50 m-auto mt-5">
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <button wire:click="flash">CLICK HERE</button>
</div>