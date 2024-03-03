<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        13.2
    </title>
</head>

<body>
    <content>
        <h1>Задание 13.2</h1>
        <table>
            <th>Айди</th>
            <th>Логин</th>
            <th>Пароль</th>
            <th>Email</th>
            @foreach ($users as $user)
                <tr>
                    <td align="center">{{ $user->id }}</td>
                    <td align="center">{{ $user->login }}</td>
                    <td align="center">{{ $user->password }}</td>
                    <td align="center">{{ $user->email }}</td>
                </tr>
            @endforeach
        </table>
    </content>
    <footer>
        <p><a href="/users/2">Добавить одного юзера</a></p>
        <p><a href="/users/3">Добавить сразу три юзера</a></p>
        <p><a href="/users/4">Изменить одного юзера</a></p>
        <p><a href="/users/5">Удалить одного юзера</a></p>
        <p><a href="/users/delete">Удылить всех юзеров</a></p>
    </footer>
</body>

</html>
