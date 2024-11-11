<section id="quizz" class="quizz duration-500 justify-center items-center px-12">
    {{-- @if ($name)
        @livewire("soal")
    @else
        @livewire("registration")
    @endif --}}
    @livewire("soal")
    
    <h1 class=" text-[10rem] text-white fixed top-0 pointer-events-none">
        {{$name ? $name : "nga ada nama"}}
    </h1>
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