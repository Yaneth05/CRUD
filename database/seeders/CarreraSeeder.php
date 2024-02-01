<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//para q pueda usar el metodo DB

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //crear los dato para llenar la tabla mediante un arreglo (array)
        $carreras = ['Ing. Software', 'Ing. Animacion y efectos visuales', 'Lic. en Nutricion', 'Li. en Terapia Fisica', 'Lic. en Administracion'];
        //recorrer el arreglo para ingresar cada carrera en la tabla
        foreach($carreras as $carrera){
            DB::table('carreras')->insert(['nombre' => $carrera]);
        }
    }
}
