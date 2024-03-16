<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/post/new" method="post">
        @csrf
        <input type="text" name='title' placeholder='title'><br>
        <input type="text" name='desc' placeholder='desc'><br>
        <textarea name="text"cols="30" rows="10" placeholder="text"></textarea><br>
        <input type="date" name="date"><br>
        <input type="submit">
    </form>
</body>

</html>
