
<div id="soalContainer" class=" transition-all duration-200 ease-in">
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
                    <label class="label">
                        <input type="radio" checked="false" wire:model="selectedAnswer" name="value-radio" value="{{ $answer->status }}"/>
                        <p class="text">{{ $answer->answer }}</p>
                    </label>
                @endforeach
            </div>
            <button wire:click="checkAnswered('{{ $question->points }}')">Next</button>
        @endforeach        
    @else
        <div class="soal">
            <p class="text-justify">{{ $playerScore }}</p>
        </div>
    @endif
    
    {{-- @endforeach --}}
    {{-- @php
        $firstQuestion = $questions[$firstQuestionKey];

        $optionKeys = array_keys($firstQuestion);
    @endphp 
    <div class="soal">
        <p class="text-justify">{{ $firstQuestionKey }}</p>
    </div>
    <div class="pilihan-ganda">
        @for ($i = 0; $i < count($optionKeys); $i++)
            @php
                $options = $firstQuestion[$optionKeys[$i]][0];
            @endphp
            <label class="label">
                <input type="radio" id="value-1" checked="" name="value-radio" value="value-1"/>
                <p class="text">{{$options}} Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium labore sint iste sed voluptatum odio, qui illum ipsa cupiditate accusantium animi, amet et voluptates assumenda. Vitae nisi distinctio odio totam?</p>
            </label>
        @endfor
    </div>
    <button wire:click="checkAnswered">Next</button> --}}
</div>