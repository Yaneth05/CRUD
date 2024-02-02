@extends('layout/template')

@section('title', 'Registrar Alumno')

@section('contenido')
<main>
    <div class="container py-3">
        <h2>Registrar Alumno (CREATE del CRUD)</h2>
        <!--FORMULARIO DE REGISTRO DE LOS DATOS DEL ALUMNO-->
        <form action=" {{ url('alumnos') }}" method="post">
            @csrf
            <div class="row py-2">
                <label for="matricula" class="col-sm-2 col-form-label">Matricula :</label>
                <div class="col-sm-5">
                    <input type="text" name="matricula" id="matricula" class="form-control" value="{{ old('matricula') }}" required>
                </div>               
            </div>

            <div class="row py-2">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre :</label>
                <div class="col-sm-5">
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}" required>
                </div>               
            </div>

            <div class="row py-2">
                <label for="fecha" class="col-sm-2 col-form-label">Fecha Nacimiento :</label>
                <div class="col-sm-5">
                    <input type="date" name="fecha" id="fecha" class="form-control" value="{{ old('fecha') }}" required>
                </div>               
            </div>

            <div class="row py-2">
                <label for="telefono" class="col-sm-2 col-form-label">Telefono :</label>
                <div class="col-sm-5">
                    <input type="text" name="telefono" id="telefono" class="form-control" value="{{ old('telefono') }}" required>
                </div>               
            </div>

            <div class="row py-2">
                <label for="correo" class="col-sm-2 col-form-label">Correo Electronico :</label>
                <div class="col-sm-5">
                    <input type="email" name="correo" id="correo" class="form-control" value="{{ old('correo') }}">
                </div>               
            </div>

            <div class="row py-2">
                <label for="carrera" class="col-sm-2 col-form-label">Carrera :</label>
                <div class="col-sm-5">
                    <select name="carrera" id="carrera" required>
                        <option value="">Selecciona la carrera</option>
                        <!--recupera todas las carreras-->
                        @foreach ($carreras as $carrera) 
                            <option value="{{ $carrera->id }}"> {{ $carrera->nombre}}</option>
                        @endforeach               
                    </select>
                </div>               
            </div>

            <button type="submit" class="btn btn-sm btn-info">Registrar Alumno</button>
            <p class="mt-3">
                <a href="{{url('alumnos')}}" class="btn btn-primary btn-sm" role="button">Regresar al menú del CRUD</a>
            </p>
        </form>
    </div>
</main>