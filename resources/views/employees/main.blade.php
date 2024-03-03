<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
</head>

<body>
    <h1>Задание 13.1</h1>
    <table>
        <th>Айди</th>
        <th>Имя</th>
        <th>Дата рождения</th>
        <th>Должность</th>
        <th>Зарплата</th>
        @foreach ($employees as $employee)
            <tr>

                <td align="center">{{ $employee->id }}</td>
                <td align="center">{{ $employee->name }}</td>
                <td align="center">{{ $employee->birthday }}</td>
                <td align="center">{{ $employee->position }}</td>
                <td align="center">{{ $employee->salary }}</td>
            </tr>
        @endforeach
    </table>
    <footer>

        <p><a href="/employees/2">Пункт 2</a></p>
        <p><a href="/employees/3">Пункт 3</a></p>
        <p><a href="/employees/4">Пункт 4</a></p>
        <p><a href="/employees/5">Пункт 5</a></p>
        <p><a href="/employees/6">Пункт 6</a></p>
        <p><a href="/employees/7">Пункт 7</a></p>
        <p><a href="/employees/8">Пункт 8</a></p>
        <p><a href="/employees/9">Пункт 9</a></p>
        <p><a href="/employees/10">Пункт 10</a></p>

    </footer>
</body>

</html>
