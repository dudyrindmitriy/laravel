<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <th>id</th>
        <th>title</th>
        <th>desc</th>
        @foreach ($posts as $post)
            <tr>
                <td align="center">{{ $post->id }}</td>
                <td align="center"><a href="/post/{{$post->id}}">{{ $post->title }}</a></td>
                <td align="center">{{ $post->desc }}</td>
                <td align="center"><a href="/post/edit/{{$post->id}}">Редактировать</a></td>
                <td align="center"><a href="/post/delete/{{$post->id}}">Удалить</a></td>
            </tr>
        @endforeach
    </table>
    <a href="/post/new">Добавить новый пост</a>

</body>

</html>
