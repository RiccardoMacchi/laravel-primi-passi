<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello Laravel</title>
</head>

<body>
    <h1>{{ $title }}</h1>

    <ul>
        @foreach ($numbers as $number)
            @if ($number % 2 == 0)
                <li>Numero Pari: {{ $number }}</li>
            @else
                <li>Numero Dispari: {{ $number }}</li>
            @endif
        @endforeach
    </ul>
</body>

</html>
