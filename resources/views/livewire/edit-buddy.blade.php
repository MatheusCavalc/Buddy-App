<div>
    <div class="mx-5">
        <div class="text-center my-3 flex">
            <a href="/" class="text-white mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                </svg>
            </a>

            <p class="ml-20 text-xl font-bold text-white">
                Edit Buddy
            </p>
        </div>

        <form wire:submit="save">
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-white">Buddy Name</label>
                <input type="text" wire:model="name" id="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <div>
                    @error('name')
                        <span class="text-red-300">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-6">
                <label for="image" class="block mb-2 text-sm font-medium text-white">Buddy Image
                    (link)</label>
                <input type="text" wire:model="image" id="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <div>
                    @error('image')
                        <span class="text-red-300">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
        </form>
    </div>
</div>
