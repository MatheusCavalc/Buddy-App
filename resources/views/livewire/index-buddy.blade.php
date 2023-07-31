<div class="relative">
    <div class="bg-gray-800">
        <div class="text-center my-3">
            <p class="text-xl font-bold text-white">
                Your Buddies
            </p>
        </div>

        <div class="w-80 mx-auto pb-20">
            @foreach ($buddies as $buddy)
                <div wire:click='toEditOrDelete({{ $buddy->id }})' class="flex items-center gap-4 p-4 cursor-pointer {{ $buddy->id === $userId ? 'border rounded-md' : '' }}">
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

    <div class="fixed inset-x-0 bottom-0 bg-black bg-opacity-50">
        <div>
            @if ($editOrDelete)
                <div class="w-80 mx-auto mt-5 mb-4 flex gap-4 justify-center">
                    <div class="flex justify-center">
                        <a href="/edit-buddy/{{ $userId }}">
                            <button
                                class="flex gap-2 bg-blue-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                </svg>
                                <p class="text-sm">
                                    Edit Buddy
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
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
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
    </div>
</div>
