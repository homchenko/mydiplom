@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Отредактировать товар</h1>

    {!! Form::model($product, ['route' => ['products.update', $product->id],  'method' => 'PUT']) !!}
    <div class="form-group">
        {{ Form::label('slug', 'Slug') }}
        {{ Form::text('slug', null, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('image', 'Image') }}
        {{ Form::textarea('image', null, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('category_id', 'Category_id') }}
        {{ Form::textarea('category_id', null, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('price', 'Price') }}
        {{ Form::text('price', null, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('fat', 'Fat') }}
        {{ Form::text('fat', null, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('filter', 'Filter') }}
        {{ Form::text('filter', null, ['class' =>'form-control']) }}
    </div>
    {{ Form::submit('Редактировать товар', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}
@stop
