<div class="grid grid-cols-2 border">
    <form wire:submit='submit' class="w-1/3 flex flex-wrap gap-2 m-3">
        <div>
            <label for="">Bird Count</label>
            <input type="number" wire:model='birdCount' class="border">
        </div>
        <div>
            <label for="">Notes</label>
            <textarea wire:model='notes' class="border w-full"></textarea>
        </div>
        <small class="text-sm text-blue-500 ">
            {{ $msg }}
        </small>
        <button class="bg-neutral-400">Add a New Bird Count Entry</button>
    </form>
    <div class="mt-5">
        <table class="table-auto border-collapse border border-gray-400">
            <thead>
                <tr>
                    <th class="border border-gray-300">No</th>
                    <th class="border border-gray-300">Bird Count</th>
                    <th class="border border-gray-300">Notes</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($entries as $entry)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td class="border border-gray-300">
                            {{ $entry->bird_count }}
                        </td>
                        <td class="border border-gray-300">
                            {{ $entry->notes }}
                        </td>
                    </tr>
                @empty
                    <td>There is no data</td>
                @endforelse

            </tbody>
        </table>
    </div>
</div>
