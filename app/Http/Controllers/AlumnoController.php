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
        //cargar los datos de los alumnos en objeto $alumnos de la tabla
        $alumnos = Alumno::all();//traemos de la tabla todo lo que tenga el objeto alumno
        // habilitar la vista
        return view('alumnos.index', ['alumnos'=> $alumnos]);//en ruta alumnos busca vista index
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
        //aqui se recuperan los datos del formulario en variable $request

        //antes de guardar, laravel tiene reglas de validacion para el formulario
        $request -> validate([
            'matricula' => 'required|unique:alumnos|max:12', //campo matricula,obligatorio, debe ser unica, 10 carracteres max
            'nombre' => 'required|max:80',
            'fecha' => 'required|date',
            'telefono' => 'required',
            'correo' => 'nullable|email',
            'carrera' => 'required'
        ]);

        //si todos los datos son correctos entonces se guarda en la tabla de la BD
        //para guardar se integran los datos en un objeto llamado $alumno (debido a q lasBD en laravel en por ORM)
        $alumno = new Alumno();
        //(nombre del campo de la tabla) -> (name del input)
        $alumno -> matricula = $request -> input('matricula');
        $alumno -> nombre = $request -> input('nombre');
        $alumno -> fechaNacimiento = $request -> input('fecha');
        $alumno -> telefono = $request -> input('telefono');
        $alumno -> correo = $request -> input('correo');
        $alumno -> carrera_id = $request -> input('carrera');
        $alumno -> save();//guardar registros en la BD
        //cuando guarde presentar un msj en la vista
        return view("alumnos.mensaje", ['smg' => 'Alumno registrado correctamente']);
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
