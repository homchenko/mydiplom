@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Image</th>
            <th>Price</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->image }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('products.edit', [$product->id]) }}" class="btn btn-success">
                        <span class="fa fa-edit"></span> Редактировать</a>
                </td>
                <td>
                {!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $product->id]]) !!}
                {!! Form::submit('Удалить', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Вы уверены?");']) !!}
                {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
@stop
