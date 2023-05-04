@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-orange-300">Doctorados - UCI</h1>
@stop

@section('content')
    <p class="text-orange-300">Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

@section('js')
    <script> console.log("init - System"); </script>
    <script src="{{ asset('js/app.js') }}" defer></script>
@stop