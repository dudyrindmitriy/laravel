@extends('employees.base')
@section('content')
    @parent
    <table>
        <th>Айди</th>
        <th>Имя</th>
        <th>Дата рождения</th>
        <th>Должность</th>
        <th>Зарплата</th>
            <tr>

                <td align="center">{{ $employee->id }}</td>
                <td align="center">{{ $employee->name }}</td>
                <td align="center">{{ $employee->birthday }}</td>
                <td align="center">{{ $employee->position }}</td>
                <td align="center">{{ $employee->salary }}</td>
            </tr>
    </table>
@endsection
