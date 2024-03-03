@extends('employees.base')
@section('content')
    @parent
    @foreach ($array as $key=>$value)
        {{ $key }} - {{ $value }} <br>
    @endforeach
@endsection
