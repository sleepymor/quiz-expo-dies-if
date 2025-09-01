<div id="soalContainer" class="transition-all duration-200 ease-in">
    @php
        $questionCollection = $question[$currentQuestion] ?? 'result';
    @endphp
    @if ($questionCollection != 'result')
        @foreach ($questionCollection as $question)
            <div class="soal flex justify-center items-center">
                <p class="text-2xl text-center">{{ $question->question }}</p>
            </div>
            <div class="pilihan-ganda flex flex-col gap-4 mt-6">
                @foreach ($question->answer as $answer)
                    <label class="label flex items-center gap-4 cursor-pointer py-3 px-4 rounded-lg transition text-2xl">
                        <input type="radio" wire:model="selectedAnswer" name="value-radio-{{ $question->id }}"
                            value="{{ $answer->id }}"
                            class="appearance-none border-2 border-blue-400 bg-white h-6 w-6 rounded-md checked:bg-blue-600 checked:border-blue-600 transition duration-150 flex-shrink-0 shadow" />
                        <span class="text-lg font-medium">{{ $answer->answer }}</span>
                    </label>
                @endforeach
            </div>
            <div class="flex justify-center mt-6">
                <button wire:click="checkAnswered('{{ $question->points }}')"
                    class="w-full max-w-xl mx-auto block bg-white text-blue-900 font-extrabold text-5xl uppercase py-4 px-8 rounded-lg border-4 border-white hover:bg-blue-50 hover:border-blue-200 transition-all duration-200 tracking-wider shadow-lg">
                    Next {{ $selectedAnswer }}
                </button>
            </div>
        @endforeach
    @else
        <div class="soal flex flex-col justify-center items-center text-center gap-12 min-h-screen px-4 relative">
            <div class="max-w-full w-full">
                <h1 class="uppercase text-3xl sm:text-4xl md:text-5xl font-bold mb-3 sm:mb-5 text-white">QUIZ SELESAI
                </h1>
                <h3 class="capitalize text-lg sm:text-xl md:text-2xl mt-3 sm:mt-5 font-bold tracking-wide text-white">
                    Terima Kasih Telah Mengerjakan Quiz
                </h3>

                <img src="{{ asset('images/2025/figur cowok.png') }}" alt="Cowok"
                    class="absolute top-1/4 left-0 sm:left-1/4 md:left-1/4 lg:left-1/4 xl:top-[133px] xl:left-[135px]"
                    style="width: 18%; max-width: 250px; transform: translate(-50%, -50%);">
                <img src="{{ asset('images/2025/figur cewek.png') }}" alt="Cewek"
                    class="absolute top-1/4 right-0 sm:right-1/4 md:right-1/4 lg:right-1/4 xl:top-[133px] xl:right-[135px]"
                    style="width: 18%; max-width: 250px; transform: translate(50%, -50%);">

                <div class="flex justify-center items-center mt-10 scoring-container">
                    <div
                        class="grid grid-cols-2 gap-4 sm:gap-6 md:gap-12 p-4 sm:p-8 md:px-[170px] border py-8 rounded-xl shadow-lg w-full max-w-5xl md:max-w-7xl lg:max-w-full">
                        <div class="p-2 sm:p-4">
                            <h1 class="text-xl sm:text-2xl md:text-3xl text-white font-bold">Score</h1>
                            <div
                                class="flex justify-center items-center border px-4 sm:px-8 md:px-22 py-[71px] mt-5 backdrop-blur rounded-xl">
                                <h1 class="text-5xl sm:text-6xl md:text-7xl font-bold">1000</h1>
                            </div>
                        </div>
                        <div class="p-2 sm:p-4">
                            <h1 class="text-xl sm:text-2xl md:text-3xl text-white font-bold">Peringkat</h1>
                            <div
                                class="flex justify-center items-center border px-4 sm:px-8 md:px-8 py-11 mt-5 backdrop-blur rounded-xl">
                                <h1 class="text-7xl sm:text-8xl md:text-9xl font-bold">00</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 flex justify-center items-center flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <button
                        class="relative backdrop-blur text-white font-bold text-xl sm:text-2xl md:text-4xl py-3 px-6 sm:py-4 sm:px-8 md:px-12 rounded-2xl transition-all duration-300 shadow-lg border-2 border-blue-300 hover:shadow-2xl hover:scale-105 hover:border-blue-200 hover:bg-white/10 group">
                        <span class="relative z-10 transition-all duration-300">Coba Lagi</span>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-white/20 to-transparent rounded-2xl transition-all duration-300 group-hover:from-white/30 group-hover:to-white/5">
                        </div>
                        <div
                            class="absolute inset-0 opacity-0 group-hover:opacity-100 bg-gradient-to-r from-blue-400/20 via-purple-400/20 to-pink-400/20 rounded-2xl transition-all duration-300">
                        </div>
                    </button>
                    <button
                        class="relative backdrop-blur text-white font-bold text-xl sm:text-2xl md:text-4xl py-3 px-6 sm:py-4 sm:px-8 md:px-12 rounded-2xl transition-all duration-300 shadow-lg border-2 border-blue-300 hover:shadow-2xl hover:scale-105 hover:border-blue-200 hover:bg-white/10 group">
                        <span class="relative z-10 transition-all duration-300">Kembali</span>
                        <div
                            class="absolute inset-0 bg-gradient-to-b from-white/20 to-transparent rounded-2xl transition-all duration-300 group-hover:from-white/30 group-hover:to-white/5">
                        </div>
                        <div
                            class="absolute inset-0 opacity-0 group-hover:opacity-100 bg-gradient-to-r from-blue-400/20 via-purple-400/20 to-pink-400/20 rounded-2xl transition-all duration-300">
                        </div>
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>
