{{-- <div style="text-align: center; margin-top: 20px;">
    <h1>Count: {{ $count }}</h1>
    <button wire:click="increment" style="padding: 10px 20px; margin-right: 5px;">+</button>
    <button wire:click="decrement" style="padding: 10px 20px;">-</button>
</div> --}}

{{-- <div style="text-align: center; margin-top: 20px;">
    <h1>Message: {{ $message }}</h1>
    <button wire:click="updateMessage('Hello, World!')" style="padding: 10px 20px; margin-right: 5px;">Say Hello</button>
    <button wire:click="updateMessage('Goodbye, World!')" style="padding: 10px 20px;">Say Goodbye</button>
</div> --}}

<div style="text-align: center; margin-top: 20px;">
    <h1>{{ $active }}</h1>
    <button wire:click="$toggle('active')" style="padding: 10px 20px; margin-right: 5px;">+</button>
    <button wire:click="decrement" style="padding: 10px 20px;">-</button>
</div>
