@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>LISTA DE CLIENTES</h1>
            @if($message = Session::get('exito'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <a class="btn btn-success" href="{{ route('clients.create') }}">Nuevo Cliente</a>
            <hr>
            <table class="table table-striped table-hover table-dark">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Email</th>
                    </tr>
                @foreach( $clientList as $key => $client )
                    <tr>
                        <td>{{ $client->DNI }}</td>
                        <td>{{ $client->Nombre }}</td>
                        <td>{{ $client->Apellidos }}</td>
                        <td>{{ $client->Telefono }}</td>
                        <td>{{ $client->Email }}</td>

                        <td>

                            <a class="btn btn-light" href="{{ route('clients.edit', $client->id) }}">Editar</a>

                        </td>
                        <td>

                            <a class="btn btn-info" href="{{ route('clients.show', $client->id) }}">Mostrar</a>
                        
                        </td>
                        <td>
                            <form action="{{ route('clients.destroy', $client->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Borrar</a>
                            </form>
                        </td>

                    </tr>

                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
