@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>CREAR NUEVO CLIENTE</h1>
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
            <form action="{{ route('clients.store') }}" method="POST">
                @csrf
                <div class="form-group">

                    <label for="DNI">DNI</label>
                    <input type="text" class="form-control" name="DNI" aria-describedby="DNI">

                </div>

                <div class="form-group">

                    <label for="Nombre">Nombre</label>
                    <input type="text" class="form-control" name="Nombre">

                </div>

                <div class="form-group">

                    <label for="Apellidos">Apellidos</label>
                    <input type="text" class="form-control" name="Apellidos">

                </div>

                <div class="form-group">

                    <label for="Telefono">Telefono</label>
                    <input type="text" class="form-control" name="Telefono" aria-describedby="Telefono">

                </div>

                <div class="form-group">

                    <label for="Email">Email</label>
                    <input type="text" class="form-control" name="Email" aria-describedby="Email">

                </div>

                <br>

                <button type="submit" class="btn btn-primary">Crear</button>
                <a class="btn btn-danger" href="{{ route('clients.index') }}">Cancelar</a>


            </form>
        </div>
    </div>
</div>

@endsection
