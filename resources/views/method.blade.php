<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>

<body>
    <h1>{{ $title }}</h1>
    <p>{{ $content }}</p>
    @foreach ($links as $link)
    <p><a href="{{$link['href']}}">{{$link['text']}}</a></p>
    @endforeach

    <table>
        <tr>
            <th>№</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Статус</th>
        </tr>
        @foreach ($users as $key=>$user)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['surname']}}</td>
            @if ($user['banned'])
            <td bgcolor="red">Забанен</td>
            @else
            <td bgcolor="green">Активен</td>
            @endif

        </tr>
        @endforeach
    </table>
</body>

</html>
