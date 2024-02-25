@extends('layouts.app')
@section('title','zagolovok')

@section('sidebar')
@parent
<div>
    Содержимое бокового меню
</div>
@endsection


@section('content')
<div>
    @foreach ( $arr as $elem )
    <p>{{$elem}}</p>
    @endforeach
</div>
@endsection
