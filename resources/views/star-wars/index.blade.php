<!-- resources/views/star_wars_characters.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Wars Characters</title>
</head>
<body>

    <h1>Star Wars Characters</h1>

    <form method="get" action="{{ route('star-wars.index') }}">
        <label for="search">Search by Name:</label>
        <input type="text" name="search" id="search" value="{{ request('search') }}">
        <button type="submit">Search</button>
    </form>

    @if ($characters->isNotEmpty())
        <ul>
            @foreach ($characters as $character)
                <li>
                    <strong>Name:</strong> {{ $character->name }}<br>
                    <strong>Height:</strong> {{ $character->height }}<br>
                    <strong>Mass:</strong> {{ $character->mass }}<br>
                    <strong>Hair Color:</strong> {{ $character->hairColor }}<br>
                    <strong>Skin Color:</strong> {{ $character->skinColor }}<br>
                    <strong>Eye Color:</strong> {{ $character->eyeColor }}<br>
                    <strong>Birth Year:</strong> {{ $character->birthYear }}<br>
                    <strong>Gender:</strong> {{ $character->gender }}<br>
                    <strong>Homeworld:</strong> {{ $character->homeworld }}<br>
                </li>
            @endforeach
        </ul>
    @else
        <p>No characters found.</p>
    @endif

</body>
</html>
