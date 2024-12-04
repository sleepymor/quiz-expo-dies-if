@foreach ($Question as $Questions)
    @foreach ($Questions as $CQuestion)
        <p>{{ $CQuestion->question }}</p>
    @endforeach
@endforeach