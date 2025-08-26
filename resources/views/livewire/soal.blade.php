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
                    class="bg-white text-black py-4 px-4 w-full rounded font-bold uppercase text-4xl">
                    Next {{ $selectedAnswer }}
                </button>
            </div>
    @endforeach
@else
    <div class="soal flex flex-col justify-center items-center gap-12">
        <h1 class="text-5xl font-extrabold">TERIMKASIH TELAH MENGERJAKAN QUIZ!</h1>
        <div class="flex flex-col justify-center items-center gap-4">
            <h2 class="!text-3xl">Selamat anda mendapatkan score</h2>
            <p class="text-justify font-extrabold !text-9xl score-text">{{ $playerScore }}</p>
        </div>
    </div>
    @endif
</div>
