<div class="">
    <h1 class="text-2xl font-bold text to-blue-500">
        COmplex Counter
    </h1>


    <p class="text-lg font-bold">{{ $count }}</p>
    <div class="grid grid-rows-2 w-1/3">
        {{-- <input type="number" wire:model.live='count' class="border border-neutral-500 rounded font-bold"> --}}
        <input type="number" wire:model.blur='count' class="border border-neutral-500 rounded font-bold">
    </div>
    <button wire:click='changeCount()' class="bg-gray-500 p-1 rounded">
        Change Count
    </button>
</div>
