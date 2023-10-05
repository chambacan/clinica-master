@extends('adminlte::page')

@section('title', 'Hola')

@section('content_header')
    <h1>MI LISTA DE AUSURIOS</h1>
@stop

@section('content')
<h1>{{$users}}</h1>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
