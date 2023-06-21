<div>
{{--    <input wire:model.debounce.1000ms="name" type="text" style="border: 1px solid black">--}}
    <input wire:model.lazy="name" type="text" style="border: 1px solid black">
    <input wire:model="check" type="checkbox">

    <select wire:model="greetings" style="border: 1px solid black">
        <option>Hello</option>
        <option>Hi</option>
        <option>GoodBye</option>
    </select>

    {{ $greetings }} {{ strtoupper($name) }} @if($check) checked @endif
</div>
