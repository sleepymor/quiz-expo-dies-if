<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased flex justify-center items-center h-screen">
    <div id="wrapper" class="parallax-wrapper">
        <header id="welcome-banner" class="welcome transition-all ease-in-out duration-500 flex justify-center items-center h-screen">
            <div id="jumbo-content" class="pt-80 jumbo-content transition-all ease-in-out duration-300 flex flex-col items-center">
                <h2 class="text-center text-7xl mb-40">WELCOME</h2>
                <button id="startButton" class="popping-btn z-20" onclick="window.startButton(this)">
                    <img id="playButton" src="{{ asset('images/icons/playButton.png') }}" alt="Gambar play button">
                </button>
            </div>
        </header>
        @livewire('top-score')
        @livewire('quizz')
    </div>
</body>
</html>
