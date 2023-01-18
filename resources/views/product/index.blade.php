@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>INDEX PRODUCTOS</h1>
            <a class="btn btn-success" href="{{ route('products.create') }}">Nuevo Producto</a>
            <hr>
            <table class="table table-striped table-hover table-bordered">
                @foreach( $productList as $key => $product )

                    <tr>
                        <td>{{ $product->nombre }}</td>
                        <td>{{ $product->descripcion }}</td>
                        <td>{{ $product->precio }}</td>

                        <td>

                            <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Editar</a>

                        </td>
                        <td>

                            <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Mostrar</a>
                        
                        </td>
                        <td>

                            <a class="btn btn-warning" href="{{ route('products.destroy', $product->id) }}">Borrar</a>
                        
                        </td>

                    </tr>

                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
