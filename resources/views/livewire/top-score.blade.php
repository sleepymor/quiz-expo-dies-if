<section class="content top-score z-500 flex flex-col justify-center items-center pt-12 pb-[400px] md:pt-10 md:pb-[550px] lg:pt-[200px] lg:pb-[280px] xl:pt-[100px] xl:pb-[350px] lg:mt-8 h-[300px] md:h-[200px] lg:h-[220px]">
    <div class="score w-full max-w-3xl md:max-w-4xl lg:max-w-3xl xl:max-w-4xl mx-auto px-4">
        <h3 class="animated-pop text-center text-6xl md:text-8xl lg:text-8xl xl:text-8xl font-bold mb-20 lg:mb-20 xl:mb-20">Top Three</h3>

        <div class="top-three flex justify-center items-end mb-8 sm:mb-10 lg:mb-8 gap-2 sm:gap-4 md:gap-6 lg:gap-3">
            @if (isset($highscores[1]) && $highscores[1] && $highscores[1]->player)
            <div class="podium flex flex-col items-center flex-1 max-w-[80px] sm:max-w-[150px] md:max-w-[180px] lg:max-w-[120px]">
                <div class="bg-gray-600 text-black text-2xl sm:text-5xl md:text-6xl lg:text-4xl font-bold flex items-center justify-center w-full aspect-[4/5] sm:aspect-[4/6]">
                    2
                </div>
                <p class="text-xs md:text-lg lg:text-base xl:text-base mt-1 sm:mt-2 font-semibold text-center truncate w-full">{{ $highscores[1]->player->username }}</p>
            </div>
            @else
            <div class="podium flex flex-col items-center flex-1 max-w-[80px] sm:max-w-[150px] md:max-w-[180px] lg:max-w-[120px]">
                <div class="bg-gray-600 text-black text-2xl sm:text-5xl md:text-6xl lg:text-4xl font-bold flex items-center justify-center w-full aspect-[4/5] sm:aspect-[4/6]">
                    2
                </div>
                <p class="text-white text-xs sm:text-base md:text-lg lg:text-base mt-1 sm:mt-2 font-semibold text-center">No Data</p>
            </div>
            @endif

            @if (isset($highscores[0]) && $highscores[0] && $highscores[0]->player)
            <div class="podium flex flex-col items-center flex-1 max-w-[90px] sm:max-w-[170px] md:max-w-[200px] lg:max-w-[140px]">
                <div class="bg-gray-300 text-black text-3xl sm:text-6xl md:text-7xl lg:text-5xl font-bold flex items-center justify-center w-full aspect-[4/7] sm:aspect-[4/8]">
                    1
                </div>
                <p class="text-xs sm:text-base md:text-lg lg:text-base mt-1 sm:mt-2 font-semibold text-center truncate w-full">{{ $highscores[0]->player->username }}</p>
            </div>
            @else
            <div class="podium flex flex-col items-center flex-1 max-w-[90px] sm:max-w-[170px] md:max-w-[200px] lg:max-w-[140px]">
                <div class="bg-gray-300 text-black text-3xl sm:text-6xl md:text-7xl lg:text-5xl font-bold flex items-center justify-center w-full aspect-[4/7] sm:aspect-[4/8]">
                    1
                </div>
                <p class="text-white text-xs sm:text-base md:text-lg lg:text-base mt-1 sm:mt-2 font-semibold text-center">No Data</p>
            </div>
            @endif

            @if (isset($highscores[2]) && $highscores[2] && $highscores[2]->player)
            <div class="podium flex flex-col items-center flex-1 max-w-[70px] sm:max-w-[130px] md:max-w-[160px] lg:max-w-[110px]">
                <div class="bg-gray-700 text-black text-xl sm:text-4xl md:text-5xl lg:text-3xl font-bold flex items-center justify-center w-full aspect-[4/4] sm:aspect-[4/5]">
                    3
                </div>
                <p class="text-xs sm:text-base md:text-lg lg:text-base mt-1 sm:mt-2 font-semibold text-center truncate w-full">{{ $highscores[2]->player->username }}</p>
            </div>
            @else
            <div class="podium flex flex-col items-center flex-1 max-w-[70px] sm:max-w-[130px] md:max-w-[160px] lg:max-w-[110px]">
                <div class="bg-gray-700 text-black text-xl sm:text-4xl md:text-5xl lg:text-3xl font-bold flex items-center justify-center w-full aspect-[4/4] sm:aspect-[4/5]">
                    3
                </div>
                <p class="text-white text-xs sm:text-base md:text-lg lg:text-base mt-1 sm:mt-2 font-semibold text-center">No Data</p>
            </div>
            @endif
        </div>

        <div class="flex justify-center mb-5">
            <button class="bg-gray-300 text-black text-sm sm:text-xl md:text-2xl lg:text-lg font-bold py-2 px-6 sm:py-4 sm:px-10 md:py-4 md:px-12 lg:py-2 lg:px-8 rounded-full hover:bg-gray-200 transition-colors duration-200">
                Leaderboard
            </button>
        </div>

        <section class="top-ten mt-8 hidden"></section>
    </div>
</section>
