<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($highscores as $highscore)
    <div class="podium">
        <h1>{{ $loop->index + 1  }}</h1>
        <p>{{ $highscore->player->username }}</p>
    </div>                    
    @endforeach
</body>
</html>