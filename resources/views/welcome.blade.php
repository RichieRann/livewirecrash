<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire crash course</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex flex-wrap w-full gap-5">
        {{-- <livewire:lazy lazy />
        <livewire:bird-form :birdCount='2' />
        <livewire:counter />
        <livewire:send-event />

        <livewire:rechieve-event /> --}}

        <div class="flex flex-wrap w-full gap-2 p-1 bg-gray-200">
            <a href="/counter" class="p-1 bg-blue-400 text-white hover:to-blue-500 active:to-blue-300 rounded"
                wire:navigate>
                Counter
            </a>
            <a href="/bird" class="p-1 bg-blue-400 text-white hover:to-blue-500 active:to-blue-300 rounded"
                wire:navigate>
                Bird Form
            </a>
            <a href="/lazy" class="p-1 bg-blue-400 text-white hover:to-blue-500 active:to-blue-300 rounded"
                wire:navigate>
                Lazy
            </a>
        </div>

    </div>

</body>

</html>
