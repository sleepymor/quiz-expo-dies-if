<section
    class="content top-score z-500 flex flex-col justify-center items-center pt-12 pb-[400px] md:pt-10 md:pb-[550px] lg:pt-[200px] lg:pb-[280px] xl:pt-[100px] xl:pb-[350px] lg:mt-8 h-[300px] md:h-[200px] lg:h-[220px]"
    style="position: relative; z-index: 10">
    <div class="score w-full max-w-3xl md:max-w-4xl lg:max-w-3xl xl:max-w-4xl mx-auto px-4 font-sans antialiased">
        <h3
            class="animated-pop text-center text-6xl md:text-8xl lg:text-8xl xl:text-8xl font-bold mb-10 lg:mb-12 xl:mb-12">
            Top Three
        </h3>

        <div class="top-three flex justify-center items-end sm:mb-10 lg:mb-8 gap-4" style="z-index: 10">

            {{-- Podium 2 --}}
            <div class="podium flex flex-col items-center flex-1 max-w-[100px] sm:max-w-[120px] md:max-w-[120px]">
                <div class="w-full flex items-center justify-center h-[180px] font-bold text-5xl sm:text-6xl md:text-7xl"
                    style="background-color: #9EFF00; color: #160093; border-radius: 16px 16px 0 0;">
                    2
                </div>
                <p class="text-white text-sm sm:text-base md:text-lg mt-2 font-semibold text-center break-words w-full">
                    {{ $highscores[1]->player->username ?? 'No Data' }}
                </p>
            </div>

            {{-- Podium 1 --}}
            <div class="podium flex flex-col items-center flex-1 max-w-[100px] sm:max-w-[120px] md:max-w-[120px]">
                <div class="w-full flex items-center justify-center h-[180px] font-bold text-5xl sm:text-6xl md:text-7xl"
                    style="background-color: #009DFF; color: white; border-radius: 16px 16px 0 0;">
                    1
                </div>
                <p class="text-white text-sm sm:text-base md:text-lg mt-2 font-semibold text-center break-words w-full">
                    {{ $highscores[0]->player->username ?? 'No Data' }}
                </p>
            </div>

            {{-- Podium 3 --}}
            <div class="podium flex flex-col items-center flex-1 max-w-[100px] sm:max-w-[120px] md:max-w-[120px]">
                <div class="w-full flex items-center justify-center h-[180px] font-bold text-5xl sm:text-6xl md:text-7xl"
                    style="background-color: #160093; color:#9EFF00; border-radius: 16px 16px 0 0;">
                    3
                </div>
                <p class="text-white text-sm sm:text-base md:text-lg mt-2 font-semibold text-center break-words w-full">
                    {{ $highscores[2]->player->username ?? 'No Data' }}
                </p>
            </div>
        </div>

        <div class="top-three flex justify-center items-end mb-8 sm:mb-10 lg:mb-8 gap-4" style="z-index: 10">

            <img src="{{ asset('images/2025/Figur Cewek.png') }}" alt="figur cewek" class="h-auto max-h-[400px]"
                style="transform: translateY(-100px)">

            <button
                class="text-white text-3xl px-8 py-4 rounded-xl font-bold shadow-lg hover:scale-105 transition min-w-[350px] border-4 border-white"
                style="margin-top: 5%; background-color:#0325802B; ">
                Leaderboard
            </button>


            <img src="{{ asset('images/2025/Figur Cowok.png') }}" alt="figur cowok" class="h-auto max-h-[400px]"
                style="transform: translateY(-100px)">
        </div>


    </div>
</section>
