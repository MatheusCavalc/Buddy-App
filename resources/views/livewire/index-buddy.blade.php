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
                <a href="/edit-buddy/{{ $userId }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Edit Buddy
                </a>
            </div>

            <div class="text-center">
                <a href="/create-buddy"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Delete Buddy
                </a>
            </div>
        </div>
    @else
        <div class="w-80 mx-auto mt-5 mb-4">
            <div class="text-center">
                <a href="/create-buddy"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Add Buddy
                </a>
            </div>
        </div>
    @endif
</div>
