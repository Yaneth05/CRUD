@extends('layout/template')

@section('title', 'CRUD Alumnos en Laravel')

@section('contenido')
<main>
    <div class='container py-4'>
        <h2>CRUD Alumnos en Laravel</h2>
        <hr>
        <a href="{{ url('alumnos/create') }} " class="btn btn-primary btn-sm" role="button">Nuevo Alumno</a>
    </div>
</main>