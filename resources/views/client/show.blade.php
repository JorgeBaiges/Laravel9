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
                <strong>Telefono:</strong> {{ $client->telefono }} <br><hr>
                <strong>Email:</strong> {{ $client->Email }} <br><hr>         
        </div>
        <div>

            <table class="table table-dark table-hover table-striped">
                <tr>
                <th>ID</th>
                <th>Solicitante</th>
                <th>Fecha</th>
                <th>Descripcion</th>
                </tr>
                @foreach($client->orders as $pedidos)
                <tr>
                    <td>{{ $pedidos->id }}</td>
                    <td>{{ $pedidos->solicitante }}</td>
                    <td>{{ $pedidos->fecha }}</td>
                    <td>{{ $pedidos->descripcion }}</td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>

@endsection
