<section class="content text-white z-50 h-[500px]">
    <div class="score">
        <h3 class="animated-pop">Top Scores</h1>
            <div>

                <section class="top-three">
                    @foreach ($highscores as $highscore)
                        @if ($highscore && $highscore->player)
                            <div class="podium">
                                <h1>{{ $loop->index + 1 }}</h1>
                                <p>{{ $highscore->player->username }}</p>
                            </div>
                        @else
                            <p>Belum ada data</p>
                        @endif
                    @endforeach
                </section>
                <section class="top-ten">
                </section>
            </div>
    </div>
</section>
