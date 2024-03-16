<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>showOne</title>
</head>

<body>
    <table>
        <th>id</th>
        <th>title</th>
        <th>desc</th>
        <tr>
            <td align="center">{{ $post->id }}</td>
            <td align="center">{{ $post->title }}</td>
            <td align="center">{{ $post->desc }}</td>
        </tr>
    </table>
    <content>
        <b>{{ $post->text }}</b>
    </content>
    <footer>
        <i>{{$post->date}}</i>
    </footer>
</body>

</html>
