<!--mensaje para informar que ya guardamos el alumno-->
@extends('layout/template')

@section('title', 'CRUD Alumnos en Laravel')

@section('contenido')
<main>
    <div class='container py-4'>
        <h2>{{ $smg }}</h2>
        <hr>
        <p class="mt-4">
            <a href="{{ url('alumnos') }} " class="btn btn-secondary btn-sm" role="button">Regresar al menú principal</a>
        </p>
    </div>
</main>