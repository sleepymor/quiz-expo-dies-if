<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/scss/app.scss'])
</head>
<body class="font-sans antialiased">
    <div id="wrapper" class="parallax-wrapper">
        <header id="welcome-banner" class="welcome transition-all ease-in-out duration-500 ">
            <img src="{{ asset('images/background/mainBg.svg') }}" alt="Bottom Bush">
            <img src="{{ asset('images/background/leftTree.svg') }}" alt="Bottom Bush">
            <img src="{{ asset('images/background/rightTree.svg') }}" alt="Bottom Bush">
            <img src="{{ asset('images/background/bottomBush.svg') }}" alt="Bottom Bush">
            <div id="jumbo-content" class="jumbo-content transition-all ease-in-out duration-300">
                <h2>WELCOME</h2>
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