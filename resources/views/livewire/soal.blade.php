<div id="soalContainer" class=" transition-all duration-200 ease-in">
    @php
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
        {{-- <button>{{ $optionKeys[$i] }}. {{ $options }}</button> --}}
        {{-- <button>b. Institusi Teknologi Kalimantan</button>
        <button>c. Institut Tambang Kalimantan</button> --}}
    </div>
    <button wire:click="checkAnswered">Next</button>
</div>