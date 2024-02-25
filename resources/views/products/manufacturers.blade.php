@extends('base.base')
@section('title', 'Производители')
@section('header')
@parent
 - Страница производителей
@endsection

@section('content')
    <ul>
        @foreach ($products as $manufacturer=>$model)
            <li><a href="/products/show/{{ $manufacturer }}">{{ $manufacturer }}</a></li>
        @endforeach
    </ul>
    <a href="/products">Начальная страница</a>
@endsection
