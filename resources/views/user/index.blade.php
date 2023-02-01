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
            <hr>
            <table class="table table-striped table-hover table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Contraseña</th>
                    </tr>
                @foreach( $userList as $key => $user )
                    <tr>
                        @can('view', $user)
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>

                        <td>
                    
                            <a class="btn btn-light" href="{{ route('users.edit', $user->id) }}">Editar</a>

                        </td>
                        <td>
                            
                            <a class="btn btn-info" href="{{ route('users.show', $user->id) }}">Mostrar</a>
                        
                        </td>
                    @endcan
                    </tr>

                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
