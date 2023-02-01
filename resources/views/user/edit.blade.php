@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>EDITAR {{ $user->id }} : {{ $user->name }}</h1>
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
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method("PUT")

                <div class="form-group">

                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" aria-describedby="nombre" placeholder="{{ $user->name ?? '' }}">

                </div>

                <div class="form-group">

                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="{{ $user->email ?? '' }}">

                </div>

                <div class="form-group">

                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="{{ $user->password ?? ''}}">

                </div>

                <br>

                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a class="btn btn-danger" href="{{ route('users.index') }}">Cancelar</a>


            </form>
        </div>
    </div>
</div>

@endsection
