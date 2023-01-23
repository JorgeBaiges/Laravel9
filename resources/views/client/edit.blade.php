@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>EDITAR {{ $client->Nombre }}</h1>
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
            <form action="{{ route('clients.update', $client->id) }}" method="POST">
                @csrf
                @method("PUT")

                <div class="form-group">

                    <label for="DNI">DNI</label>
                    <input type="text" class="form-control" name="DNI" aria-describedby="DNI" placeholder="{{ $client->DNI ?? '' }}">

                </div>

                <div class="form-group">

                    <label for="Nombre">Nombre</label>
                    <input type="text" class="form-control" name="Nombre" aria-describedby="Nombre" placeholder="{{ $client->Nombre ?? '' }}">

                </div>

                <div class="form-group">

                    <label for="Apellidos">Apellidos</label>
                    <input type="Apellidos" class="form-control" name="Apellidos" placeholder="{{ $client->Apellidos ?? '' }}">

                </div>

                <div class="form-group">

                    <label for="Telefono">Telefono</label>
                    <input type="text" class="form-control" name="Telefono" placeholder="{{ $client->Telefono ?? ''}}">

                </div>

                <div class="form-group">

                    <label for="Email">Email</label>
                    <input type="text" class="form-control" name="Email" placeholder="{{ $client->Email ?? ''}}">

                </div>

                <br>

                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a class="btn btn-danger" href="{{ route('clients.index', $client->id) }}">Cancelar</a>


            </form>
        </div>
    </div>
</div>

@endsection
