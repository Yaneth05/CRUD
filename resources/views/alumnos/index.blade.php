@extends('layout/template')

@section('title', 'CRUD Alumnos en Laravel')

@section('contenido')
<main>
    <div class='container py-4'>
        <h2>CRUD Alumnos en Laravel</h2>
        <hr>
        <a href="{{ url('alumnos/create') }} " class="btn btn-primary btn-sm mb-3" role="button">Nuevo Alumno</a>
        
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Matricula</th>
                <th scope="col">Nombre</th>
                <th scope="col">Fecha nacimiento</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Correo electronico</th>
                <th scope="col">Carrera</th>
                <th scope="col">X</th>
                <th scope="col">Y</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                <tr>
                    <th>{{ $alumno->id }}</th>
                    <td>{{ $alumno->matricula }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->fechaNacimiento }}</td>
                    <td>{{ $alumno->telefono }}</td>
                    <td>{{ $alumno->correo }}</td>
                    <td>{{ $alumno->carrera->nombre }}</td>
                    <td>editar</td>
                    <td>eliminar</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>