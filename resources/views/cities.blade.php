<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cities</title>
</head>
<body>
    <h1>Cities</h1>
    <ul>
        @foreach ($cities as $city)
            <li>Name: {{ $city->name }}</li>
            <li>Country: {{ $city->country }}</li>
            <li>Weather: {{ $city->weather }}</li>

            <a href='{{ url("/city/$city->id") }}'>Detail</a>
            <br>
            ----------
        @endforeach
    </ul>
</body>
</html>