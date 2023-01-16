@extends('layouts.master')

@section('content')
<h1>INDEX PRODUCTOS</h1>
<a href="{{ route('products.create') }}">Nuevo Producto</a>

<table border="1">
    @foreach( $productList as $key => $product )

        <tr>
            <td>{{ $product->nombre }}</td>
            <td>{{ $product->descripcion }}</td>
            <td>{{ $product->precio }}</td>

            <td>

                <a href="{{ route('products.edit', $product->id) }}">Editar</a>

            </td>
            <td>

                <a href="{{ route('products.show', $product->id) }}">Mostrar</a>
            
            </td>
        </tr>

    @endforeach
</table>

@endsection