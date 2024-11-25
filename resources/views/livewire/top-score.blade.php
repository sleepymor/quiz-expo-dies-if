<section class="content text-white z-50 h-[500px]">
    <div class="score">
        <h3 class="animated-pop">Top Scores</h1>
        <div>
            <section class="top-three">
                @foreach ($highscores as $highscore)
                <div class="podium">
                    <h1>{{ $loop->index + 1  }}</h1>
                    <p>{{ $highscore->player->username }}</p>
                </div>                    
                @endforeach

                {{-- <div class="podium">
                    <h1>1</h1>
                    <p>Rafael</p>
                </div>
                <div class="podium">
                    <h1>3</h1>
                    <p><i class="ri-safari-line"></i></p>
                </div> --}}
            </section>
            <section class="top-ten">
            </section>
        </div>
    </div>
</section>