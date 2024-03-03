<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        method{{ $current }}
    </title>
</head>

<body>
    <content>
        @section('content')
            <h1>Задание 13.1</h1>
            <h2>Пункт {{ $current }}</h2>

        @show
    </content>
    <footer>
        <a href="{{ $previous }}">Предыдущий пункт</a> ... <a href="{{ $next }}">Следующий пункт</a>
        <br>
        <a href="/employees">На главную</a>
    </footer>
</body>

</html>
