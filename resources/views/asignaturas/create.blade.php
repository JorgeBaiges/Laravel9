@extends('layouts/master')

@section('title','Jorge')


@section('encabezado')

    Alta de asignaturas

@stop

@section('cuerpo')

    @parent
    @if($errors->any())
    <div class="alert alert-danger">
        <h6>Por favor corrige los siguientes errores:</h6>
        <ul>
        @foreach($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
        </ul>
    </div>
    @endif
    <br>Completa el siguiente formulario

<form action="{{ route('asignaturas.store') }}" method="post">
    @csrf
<label for="nombre">Nombre</label><br>
<input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
<br>
<label for="curso">Curso</label><br>
<input type="text" name="curso" id="curso" value="{{ old('curso') }}">
<br>
<label for="ciclo">Ciclo</label><br>
<input type="text" name="ciclo" id="ciclo" value="{{ old('ciclo') }}">
<br>
<p>Comentarios</p>
<textarea name="comentario" id="comentarios" cols="30" rows="10" placeholder="Escribe aqui"></textarea>
@stop

@section('boton')
    @parent
    
    @section('destino')

        {{ route('asignaturas.store') }}

    @stop

    @section('accionformulario')

        Enviar Datos
        @stop
        </form>
    @stop

    
