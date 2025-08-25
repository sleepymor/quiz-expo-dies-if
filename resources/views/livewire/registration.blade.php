<div id="registration" class=" transition-all duration-200 ease-in">
    {{-- back button regis --}}
    <button type="button" class="absolute top-6 left-6 text-4xl font-bold bg-transparent border-none cursor-pointer"
        wire:click="goBack">
        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="m9.55 12l7.35 7.35q.375.375.363.875t-.388.875t-.875.375t-.875-.375l-7.7-7.675q-.3-.3-.45-.675t-.15-.75t.15-.75t.45-.675l7.7-7.7q.375-.375.888-.363t.887.388t.375.875t-.375.875z" />
        </svg>
    </button>
    <form wire:submit.prevent="submit" class="flex flex-col">
        <div class="flex flex-col items-center justify-center space-y-6 mb-28">
            <div class="w-full max-w-xl mb-6">
                <label for="name" class="block text-4xl font-semibold mb-1 uppercase text-center">Masukkan
                    Nama</label>
                <input type="text" id="name" wire:model="name" required
                    class="focus:ring-0 focus:outline-none border-0 border-b-4 h-28 border-white bg-transparent text-4xl py-2 px-2 w-full text-center">
            </div>
            <div class="w-full max-w-xl">
                <label for="ints" class="block text-4xl font-semibold mb-1 uppercase text-center">Institusi</label>
                <input type="text" id="ints" wire:model="ints" required
                    class="focus:ring-0 focus:outline-none border-0 border-b-4 h-28 border-white bg-transparent text-4xl py-2 px-2 w-full text-center">
            </div>
        </div>
        @error('name')
            <span class="error">{{ $message }}</span>
        @enderror

        <button type="submit" class="bg-white text-black py-4 px-4 rounded font-bold uppercase text-4xl">Start</button>
    </form>
</div>
