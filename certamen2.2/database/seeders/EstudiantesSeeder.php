<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estudiantes')->insert([
            ['rut'=> '31541232-2','nombre'=>'Felipe','apellido'=>'Herrera','email'=>'felipe.herrerad@usm.cl'],
            ['rut'=> '23451232-2','nombre'=>'Ignacio','apellido'=>'Parada','email'=>'ignacio.paradaf@usm.cl']

        ]);
    }
}
