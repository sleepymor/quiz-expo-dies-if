<section class="content top-score z-500 flex flex-col justify-center items-center py-12 h-[500px]">
    <div class="score w-full max-w-4xl mx-auto px-4">
        <!-- Top Three Title -->
        <h3 class="animated-pop text-center text-5xl md:text-6xl font-bold mb-16">Top Three</h3>

        <!-- Podium Section -->
        <div class="top-three flex justify-center items-end mb-12 gap-4">
            <!-- Second Place (Left) -->
            @if (isset($highscores[1]) && $highscores[1] && $highscores[1]->player)
                <div class="podium flex flex-col items-center">
                    <div class="bg-gray-600 text-black text-6xl font-bold flex items-center justify-center w-32 h-40 md:w-40 md:h-48">
                        2
                    </div>
                    <p class="text-lg mt-2 font-semibold">{{ $highscores[1]->player->username }}</p>
                </div>
            @else
                <div class="podium flex flex-col items-center">
                    <div class="bg-gray-600 text-black text-6xl font-bold flex items-center justify-center w-32 h-40 md:w-40 md:h-48">
                        2
                    </div>
                    <p class="text-white text-lg mt-2 font-semibold">No Data</p>
                </div>
            @endif

            <!-- First Place (Center - Highest) -->
            @if (isset($highscores[0]) && $highscores[0] && $highscores[0]->player)
                <div class="podium flex flex-col items-center">
                    <div class="bg-gray-300 text-black text-6xl font-bold flex items-center justify-center w-32 h-52 md:w-40 md:h-64">
                        1
                    </div>
                    <p class="text-lg mt-2 font-semibold">{{ $highscores[0]->player->username }}</p>
                </div>
            @else
                <div class="podium flex flex-col items-center">
                    <div class="bg-gray-300 text-black text-6xl font-bold flex items-center justify-center w-32 h-52 md:w-40 md:h-64">
                        1
                    </div>
                    <p class="text-white text-lg mt-2 font-semibold">No Data</p>
                </div>
            @endif

            <!-- Third Place (Right) -->
            @if (isset($highscores[2]) && $highscores[2] && $highscores[2]->player)
                <div class="podium flex flex-col items-center">
                    <div class="bg-gray-700 text-black text-6xl font-bold flex items-center justify-center w-32 h-32 md:w-40 md:h-40">
                        3
                    </div>
                    <p class="text-lg mt-2 font-semibold">{{ $highscores[2]->player->username }}</p>
                </div>
            @else
                <div class="podium flex flex-col items-center">
                    <div class="bg-gray-700 text-black text-6xl font-bold flex items-center justify-center w-32 h-32 md:w-40 md:h-40">
                        3
                    </div>
                    <p class="text-white text-lg mt-2 font-semibold">No Data</p>
                </div>
            @endif
        </div>

        <!-- Leaderboard Button -->
        <div class="flex justify-center">
            <button class="bg-gray-300 text-black text-2xl font-bold py-4 px-12 rounded-full hover:bg-gray-200 transition-colors duration-200">
                Leaderboard
            </button>
        </div>

        <!-- Top Ten Section (Hidden for now) -->
        <section class="top-ten mt-8 hidden">
            <!-- Additional leaderboard content can go here -->
        </section>
    </div>
</section>
