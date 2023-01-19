@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>CREAR NUEVO PRODUCTO</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <h4>Por favor corrige los errores</h4>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach  
                    </ul>
                </div>
            @endif
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="form-group">

                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" aria-describedby="nombre">

                </div>

                <div class="form-group">

                    <label for="descripcion">Descripcion</label>
                    <input type="descripcion" class="form-control" name="descripcion">

                </div>

                <div class="form-group">

                    <label for="precio">Precio</label>
                    <input type="text" class="form-control" name="precio">

                </div>

                <br>

                <button type="submit" class="btn btn-primary">Crear</button>
                <a class="btn btn-danger" href="{{ route('products.index') }}">Cancelar</a>


            </form>
        </div>
    </div>
</div>

@endsection
