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
            <li>Name: {{ $data['name'] }}</li>
            <li>Country: {{ $data['sys']['country'] }}</li>
            <li>Weather: {{ $data['weather'][0]['description'] }}</li>
        
    </ul>
</body>
</html>