@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <p>Visitas a la pagina {{ session('contador') }}</p>
            <h1>LISTA DE PRODUCTOS</h1>
            @if($message = Session::get('exito'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            @can('create', 'App\Models\Product')
            <a class="btn btn-success" href="{{ route('products.create') }}">Nuevo Producto</a>
            @endcan
            <hr>
            <table class="table table-striped table-hover table-bordered">
                @foreach( $productList as $key => $product )
                
                    <tr>
                        <td>{{ $product->nombre }}</td>
                        <td>{{ $product->descripcion }}</td>
                        <td>{{ $product->precio }}</td>

                        <td>
                            @can('update', $product)
                            <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Editar</a>
                            @endcan
                        </td>
                        <td>

                            @can('view', $product)
                            <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Mostrar</a>
                            @endcan

                        </td>
                        <td>
                            @can('delete', $product)
                            <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-warning" type="submit">Borrar</a>
                            </form>
                            @endcan
                        </td>

                    </tr>

                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
