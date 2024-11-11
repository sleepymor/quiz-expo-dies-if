<div id="soalContainer" class=" transition-all duration-200 ease-in">
    @php
        $firstQuestion = $questions[$firstQuestionKey];

        $optionKeys = array_keys($firstQuestion);
    @endphp 
    @foreach ($unAnswered as $item)
        <p>{{ $item }}</p>
    @endforeach
    <div class="soal">
        <p class="text-justify">{{ $firstQuestionKey }}</p>
    </div>
    <div class="pilihan-ganda">
        @for ($i = 0; $i < count($optionKeys); $i++)
            @php
                $options = $firstQuestion[$optionKeys[$i]][0];
            @endphp
            <button>{{ $optionKeys[$i] }}. {{ $options }}</button>
        @endfor
        {{-- <button>b. Institusi Teknologi Kalimantan</button>
        <button>c. Institut Tambang Kalimantan</button> --}}
    </div>
    <button wire:click="checkAnswered">Next</button>
</div>