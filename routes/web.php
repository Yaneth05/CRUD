<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');// es la pagina de inicio de laravel
    return redirect('/alumnos');// es la pagina de inicio del crud
});

//habilitar el controlador d alumno con la ruta o url localhost:xxxx/alumnos
Route::resource('/alumnos', AlumnoController::class);
