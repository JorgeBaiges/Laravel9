@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>DETALLE DEL PRODUCTO</h1>
                <a class="btn btn-primary" href="{{ route('products.index') }}">Volver a la lista</a>
                @can('update', $product)
                <a class="btn btn-warning" href="{{ route('products.edit', $product->id) }}">Editar</a>
                @endcan
                <br><hr>
                <strong>Nombre:</strong> {{ $product->nombre }} <br><hr>
                <strong>Descripcion:</strong> {{ $product->descripcion }} <br><hr>
                <strong>Precio:</strong> {{ $product->precio }}
                
        </div>
    </div>
</div>

@endsection
