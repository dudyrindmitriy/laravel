@extends('base.base')

@section('title')
    {{$products[0]}}
@endsection

@section('header')
@parent
 - Страница производителя {{$products[0]}}
@endsection
@section('content')
    @foreach ($products[1] as $model)
        <ul>
            <li>{{ $model }}</li>
        </ul>
    @endforeach
<a href="/products/show">Страница производителей</a>
<br>
<a href="/products">Начальная страница</a>
@endsection

