<div id="registration" class=" transition-all duration-200 ease-in">
    <form wire:submit.prevent="submit" class="flex flex-col">
        <div>
            <label for="name">Masukkan Nama</label>
            <input type="text" id="name" wire:model="name" required class="focus:ring-0 focus:outline-none">
        </div>
        <div>
            <label for="ints">Institusi</label>
            <input type="text" id="ints" wire:model="ints" required class="focus:ring-0 focus:outline-none">
        </div>
        @error('name') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Start</button>
    </form>
</div>