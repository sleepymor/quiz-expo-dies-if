<section id="quizz" class="quizz duration-500 justify-center items-center px-12">
    <!-- Background images -->
    <div class="fixed inset-0 w-full h-full z-0">
        <!-- Background 3 (base) -->
        <img src="{{ asset('images/background/registration/background-3.png') }}" alt="Background 3"
            class="absolute inset-0 w-full h-full object-cover">

        <!-- Background 1 (overlay) -->
        <img src="{{ asset('images/background/registration/background-1.png') }}" alt="Background 1"
            class="absolute inset-0 w-full h-full object-cover opacity-10">
    </div>

    <!-- Content overlay -->
    <div class="relative z-10">
        @if ($name)
            @livewire("soal")
        @else
            @livewire("registration")
        @endif
    </div>
    {{-- @livewire("soal") --}}
    
    {{-- <h1 class=" text-[10rem] text-white fixed top-0 pointer-events-none">
        {{$name ? $name : "nga ada nama"}}
    </h1> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Listen for the 'nameUpdated' event triggered from Livewire
            window.addEventListener('nameSubmitted', event => {
                setTimeout(() => {
                    const quizz = document.getElementById('quizz')
                    quizz.classList.remove("!hidden")    
                    quizz.classList.remove("opacity-0")
                }, 350);
            });
        });
    </script>
</section>