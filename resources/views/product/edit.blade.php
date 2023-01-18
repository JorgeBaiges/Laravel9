@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>EDITAR {{ $product->nombre }}</h1>
            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group">

                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" aria-describedby="nombre" placeholder="{{ $product->nombre ?? '' }}">

                </div>

                <div class="form-group">

                    <label for="descripcion">Descripcion</label>
                    <input type="descripcion" class="form-control" id="descripcion" placeholder="{{ $product->descripcion ?? '' }}">

                </div>

                <div class="form-group">

                    <label for="precio">Precio</label>
                    <input type="text" class="form-control" id="precio" placeholder="{{ $product->precio ?? ''}}">

                </div>

                <br>

                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a class="btn btn-danger" href="{{ route('products.show', $product->id) }}">Cancelar</a>


            </form>
        </div>
    </div>
</div>

@endsection
