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
            <img src="{{ asset('images/2025/background main.png') }}" alt="Background" height="auto" >
                
            <div style="position: relative; width: 100%; ">

                <!-- Cyber city kiri -->
                <img src="{{ asset('images/2025/cyber city kiri.png') }}" 
                    alt="Cyber Kiri" 
                    style="position: absolute; left: 0; top: 10%; transform: translateY(-50%); width: 30%; height: auto; z-index: 1;">

                <!-- Cyber city kanan -->
                <img src="{{ asset('images/2025/cyber city kanan.png') }}" 
                    alt="Cyber Kanan" 
                    style="position: absolute; right: 0; top: 10%; transform: translateY(-50%); width: 30%; height: auto; z-index: 1;">

                <!-- Foreground di atas city -->
                <img src="{{ asset('images/2025/Foreground.png') }}" 
                    alt="Foreground" 
                    style="position: absolute; bottom: -20%; left: 50%; transform: translateX(-50%); width: 100%; height: auto; z-index: 1;">

                <!-- Figur cewek & cowok (lebih turun) -->
                <div style="display: flex; justify-content: center; align-items: center; gap: 200px; position: relative; z-index: 3; ">
                    <img src="{{ asset('images/2025/figur cewek.png') }}" alt="Cewek" style="width: 25%; height: auto;">
                    <img src="{{ asset('images/2025/figur cowok.png') }}" alt="Cowok" style="width: 25%; height: auto;">
                </div>

                <!-- Tombol Play (tetap center) -->
                <button id="startButton" class="popping-btn" onclick="window.startButton(this)" 
                        style="position: absolute; top: 25%; left: 50%; transform: translate(-50%, -50%); z-index: 4; background: none; border: none; cursor: pointer;">
                    <img id="playButton" src="{{ asset('images/2025/Play.png') }}" alt="Play Button" style="width: 160px; height: auto;">
                </button>
            </div>

            <div id="jumbo-content" class="jumbo-content transition-all ease-in-out duration-300">
                <img src="{{ asset('images/2025/Welcome.png') }}" alt="Welcome" width="60%" style="padding-top: 7%">
            </div>
        </header>
        @livewire('top-score')
        @livewire('quizz')
    </div>
</body>
</html>
