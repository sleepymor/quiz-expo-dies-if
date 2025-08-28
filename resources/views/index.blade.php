<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/motion.js'])
</head>
<body class="font-sans antialiased">

<body class="font-sans antialiased flex justify-center items-center h-screen">
    <div id="intro-overlay" class="fixed inset-0 z-[999] bg-black flex justify-center items-center">
        <h2 id="intro-text" class="text-white text-5xl md:text-7xl lg:text-8xl xl:text-8xl">WELCOME</h2>
    </div>

    <div id="wrapper" class="parallax-wrapper">
        <header id="welcome-banner"
            class="welcome transition-all ease-in-out duration-500 flex justify-center items-center h-[200vh]">
            <div id="jumbo-content"
                class="jumbo-content transition-all ease-in-out duration-300 flex flex-col items-center pt-[280px] md:pt-[260px] lg:pt-[410px] xl:pt-[350px]">
                <h2 class="text-center text-7xl md:text-9xl lg:text-9xl xl:text-9xl mb-12 md:mb-15 lg:mb-6 xl:mb-20">
                    <span class="animated-word">W</span><span class="animated-word">E</span><span
                        class="animated-word">L</span><span class="animated-word">C</span><span
                        class="animated-word">O</span><span class="animated-word">M</span><span
                        class="animated-word">E</span>
                </h2>
                <button id="startButton" class="popping-btn z-20 mb:mt-20 xl: mt-5" onclick="window.startButton(this)">
                    <img id="playButton" src="{{ asset('images/icons/playButton.png') }}" alt="Gambar play button"
                        class="mt-20 w-[230px] h-[230px] md:w-[300px] md:h-[300px] lg:w-[200px] lg:h-[200px] xl:w-[250px] xl:h-[250px]">
                </button>
            </div>
        </header>
        @livewire('top-score')
        @livewire('quizz')
    </div>
</body>

</html>