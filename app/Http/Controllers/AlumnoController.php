<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Carrera;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // habilitar la vista
        return view('alumnos.index');//en ruta alumnos busca vista index
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //habilitar la vista de alumnos.create
        //habilitar en el select los nombre de las carreras
        return view('alumnos.create', ['carreras' => Carrera::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //aqui se recuperan los datos del formulario

        //antes de guardar, laravel tiene reglas de validacion para el formulario
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
