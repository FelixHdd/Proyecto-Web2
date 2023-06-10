<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesoresSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('profesores')->insert([
            ['id'=> '1','nombre'=>'Carlos','apellido'=>'Alten','email'=>'carlos.alten@usm.cl'],
            ['id'=> '2','nombre'=>'Dagoberto','apellido'=>'Cabrera','email'=>'dagoberto.cabrera@usm.cl'],
            ['id'=> '3','nombre'=>'Ana Luisa','apellido'=>'Rojas','email'=>'ana.rojas@usm.cl'],
            ['id'=> '4','nombre'=>'Ricardo','apellido'=>'Cahe','email'=>'ricardo.cahe@usm.cl'],
        ]);
    }
}
