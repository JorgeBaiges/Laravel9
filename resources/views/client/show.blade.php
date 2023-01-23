@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>DETALLE DEL PRODUCTO</h1>
                <a class="btn btn-primary" href="{{ route('clients.index') }}">Volver a la lista</a>
                <a class="btn btn-warning" href="{{ route('clients.edit', $client->id) }}">Editar</a>
                <br><hr>
                <strong>DNI:</strong> {{ $client->DNI }} <br><hr>
                <strong>Nombre:</strong> {{ $client->Nombre }} <br><hr>
                <strong>Apellidos:</strong> {{ $client->Apellidos }} <br><hr>
                <strong>Telefono:</strong> {{ $client->Telefono }} <br><hr>
                <strong>Email:</strong> {{ $client->Email }} <br><hr>
                
        </div>
    </div>
</div>

@endsection
