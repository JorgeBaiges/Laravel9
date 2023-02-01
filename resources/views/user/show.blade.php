@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>DETALLE DEL PRODUCTO</h1>
                <a class="btn btn-primary" href="{{ route('users.index') }}">Volver a la lista</a>
                <a class="btn btn-warning" href="{{ route('users.edit', $user->id) }}">Editar</a>
                <br><hr>
                <strong>ID:</strong> {{ $user->id }} <br><hr>
                <strong>Nombre:</strong> {{ $user->name }} <br><hr>
                <strong>Email:</strong> {{ $user->email }}
                
        </div>
    </div>
</div>

@endsection
