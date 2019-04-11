@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Удалить товар</h1>

    {!! Form::open(['route' => 'products.destroy']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Название') }}
        {{ Form::text('title', null, ['class' =>'form-control']) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('price', 'Цена') }}
        {{ Form::text('price', null, ['class' =>'form-control']) }}
    </div>

    {{ Form::submit('Удалить товар', ['class' => 'btn btn-danger']) }}

    {!! Form::close() !!}
@stop
