<div class="flex flex-wrap w-full gap-5">
    <small class="font-thin text-xs">Send-event Component</small>
    <input type="text" wire:model.blur='message' class="border border-neutral-500 rounded font-bold">
    <button wire:click='sendMessage()' class="bg-gray-500 p-1 rounded">
        Send Message
    </button>
    <button wire:click='resetComponent()' class="bg-gray-500 p-1 rounded">
        Reset Message
    </button>

</div>
