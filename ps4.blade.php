<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PS4 Games</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>PS4 Games</h1>
    <div class="games-container">
        @foreach($ps4Games as $game)
            <div class="game-card">
                <img src="{{ asset('images/' . $game['image']) }}" alt="{{ $game['title'] }}">
                <h3>{{ $game['title'] }}</h3>
                <p>Price: ${{ number_format($game['price'], 2) }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
