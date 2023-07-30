<div>
    <div class="bg-gray-800">
        <div class="text-center my-3">
            <p class="text-xl font-bold text-white">
                Your Buddies
            </p>
        </div>

        <div class="w-80 mx-auto">
            @foreach ($buddies as $buddy)
                <div wire:click='toEditOrDelete({{ $buddy->id }})' class="flex items-center gap-4 p-4 border-b">
                    <div>
                        <img class="w-12 h-12 rounded-full" src="{{ $buddy->image }}">
                    </div>
                    <div class="text-gray-400">
                        <p class="text-white text-sm font-medium dark:text-slate-200">{{ $buddy->name }}</p>
                        <div>
                            <p>{{ $buddy->updated_at->format('H:i') }} - Europe/Berlin</p>
                        </div>
                    </div>
                    <div class="ml-6 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                        </svg>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @if ($editOrDelete)
        <div class="w-80 mx-auto mt-5 mb-4 flex gap-4 justify-center">
            <div class="text-center">
                <a href="/edit-buddy/{{ $userId }}">
                    <button
                        class="flex gap-2 bg-blue-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>
                        <p class="text-sm">
                            Edit Buddy
                        </p>
                    </button>
                </a>
            </div>

            <div class="text-center">
                <a href="#" wire:click='deleteBuddy({{ $userId }})'>
                    <button class="flex gap-2 bg-red-800 hover:bg-red-900 text-white font-bold py-2 px-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                        <p class="text-sm">
                            Delete Buddy
                        </p>
                    </button>
                </a>
            </div>
        </div>
    @else
        <div class="w-80 mx-auto mt-5 mb-4">
            <div class="flex justify-center">
                <a href="/create-buddy">
                    <button
                        class="flex gap-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        <p class="text-sm">
                            Add Buddy
                        </p>
                    </button>
                </a>
            </div>
        </div>
    @endif
</div>
