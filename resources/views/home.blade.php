@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
    <h4>Hello, {{Auth::user()->name}}</h4>
@stop

@section('content')
    <p>You are logged in!</p>
@stop