@extends('base.base')
@section('title','Начальная страница')
@section('header')
@parent
 - Начальная страница
@endsection

@section('content')
<a href="/products/show">Показать всех производителей</a>
@endsection

@section('footer')
Начальная страница сайта
@endsection
