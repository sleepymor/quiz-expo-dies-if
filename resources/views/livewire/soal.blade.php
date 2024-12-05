<div id="soalContainer" class="transition-all duration-200 ease-in">
    @php
        $questionCollection = $question[$currentQuestion] ?? "result";
    @endphp
    @if ($questionCollection != "result")
        @foreach($questionCollection as $question)
            <div class="soal">
                <p class="text-justify">{{ $question->question }}</p>
            </div>
            <div class="pilihan-ganda">
                @foreach($question->answer as $answer)
                <label class="label" >
                        <input 
                            type="radio" 
                            wire:model="selectedAnswer" 
                            name="value-radio-{{ $question->id }}"
                            value="{{ $answer->id }}"
                            isCorrect="{{ $answer->id }}"
                        />
                        <!-- Make sure the radio buttons for each question have a unique value -->
                        <p class="text">{{ $answer->answer }}</p>
                    </label>
                @endforeach
                {{-- <label class="label"><input type="radio" wire:model="selectedAnswer"/><p class="text">testting</p></label> --}}
            </div>
            <button wire:click="checkAnswered('{{ $question->points }}')">Next {{ $selectedAnswer }}</button>
        @endforeach        
    @else
        <div class="soal flex flex-col justify-center items-center gap-12">
            <h1 class="text-5xl font-extrabold">TERIMKASIH TELAH MENGERJAKAN QUIZ!</h1>
            <div class="flex flex-col justify-center items-center gap-4">
                <h2 class="text-2xl">Selamat mendapatkan score:</h2>
                <p class="text-justify">{{ $playerScore }}</p>
            </div>
        </div>
    @endif
</div>
