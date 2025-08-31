<div id="registration" class="relative min-h-screen w-full transition-all duration-200 ease-in">
    <!-- bg images -->
    <div class="fixed inset-0 w-full h-full z-0">
        <!-- bg 2 (base) -->
        <img src="{{ asset('images/background/registration/background-2.png') }}" alt="Background 2"
            class="absolute inset-0 w-full h-full object-cover">

        <!-- bg 1 (overlay 10% opacity) -->
        <img src="{{ asset('images/background/registration/background-1.png') }}" alt="Background 1"
            class="absolute inset-0 w-full h-full object-cover opacity-10">
    </div>

    <!-- decorations -->
    <div class="fixed inset-0 pointer-events-none z-10">
        <!-- top left decoration - dibuat lebih besar dan terpotong natural -->
        <img src="{{ asset('images/2025/decorations/top-left.svg') }}" alt="Top Left Decoration"
            class="absolute -top-32 -left-32 w-96 h-96 md:w-[500px] md:h-[500px] lg:w-[600px] lg:h-[600px] opacity-70 scale-110">

        <!-- bottom right decoration - dibuat lebih besar dan terpotong natural -->
        <img src="{{ asset('images/2025/decorations/bottom-right-blur.svg') }}" alt="Bottom Right Decoration"
            class="absolute -bottom-40 -right-40 w-[500px] h-[500px] md:w-[600px] md:h-[600px] lg:w-[700px] lg:h-[700px] opacity-50 scale-125">
    </div>

    <!-- back button -->
    <button type="button"
        class="absolute top-8 left-8 text-white hover:text-gray-300 transition-colors duration-200 z-30"
        wire:click="goBack">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="currentColor">
            <path
                d="m9.55 12l7.35 7.35q.375.375.363.875t-.388.875t-.875.375t-.875-.375l-7.7-7.675q-.3-.3-.45-.675t-.15-.75t.15-.75t.45-.675l7.7-7.7q.375-.375.888-.363t.887.388t.375.875t-.375.875z" />
        </svg>
    </button>

    <!-- main content -->
    <div class="relative z-20 flex items-center justify-center min-h-screen px-8">
        <div class="w-full max-w-2xl">
            <form wire:submit.prevent="submit" class="space-y-12">
                <!-- name input -->
                <div class="w-full max-w-xl mx-auto mb-6">
                    <label for="name"
                        class="block text-white text-5xl font-extrabold mb-1 uppercase text-center tracking-wider">
                        Masukkan Nama
                    </label>
                    <input type="text" id="name" wire:model="name" required autocomplete="off"
                        class="focus:ring-0 focus:outline-none border-0 border-b-4 h-28 border-white bg-transparent text-white text-4xl py-2 px-2 w-full text-center font-semibold placeholder-gray-300 focus:border-blue-300 transition-colors duration-200"
                        placeholder="">
                </div>

                <!-- institution input -->
                <div class="w-full max-w-xl mx-auto">
                    <label for="ints"
                        class="block text-white text-5xl font-extrabold mb-1 uppercase text-center tracking-wider">
                        Institusi
                    </label>
                    <input type="text" id="ints" wire:model="ints" required autocomplete="off"
                        class="focus:ring-0 focus:outline-none border-0 border-b-4 h-28 border-white bg-transparent text-white text-4xl py-2 px-2 w-full text-center font-semibold placeholder-gray-300 focus:border-blue-300 transition-colors duration-200"
                        placeholder="">
                </div>

                <!-- error message -->
                @error('name')
                    <div class="text-red-400 text-center text-lg">{{ $message }}</div>
                @enderror

                <!-- stsrt button -->
                <div class="pt-8">
                    <button type="submit"
                        class="w-full max-w-xl mx-auto block bg-white text-blue-900 font-extrabold text-5xl uppercase py-4 px-8 rounded-lg border-4 border-white hover:bg-blue-50 hover:border-blue-200 transition-all duration-200 tracking-wider shadow-lg">
                        Start
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
