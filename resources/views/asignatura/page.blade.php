@extends('layouts.master')

@section('title', 'Pagina de Informacion')

@section('widget')

    @parent
    <h4>Esto es un añadido</h4>

@stop

@section('maincontent')

    @parent
    <h4>Añadido a main Content</h4>

@stop