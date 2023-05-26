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
            ['rut'=> '12312312-9','nombre'=>'gsdsrfsw','apellido'=>'Herresafara','email'=>'felipe.herrerad@usm.cl'],
            ['rut'=> '76345345-9','nombre'=>'Fegwerflipe','apellido'=>'Herrerafasdas','email'=>'felipe.herrerad@usm.cl'],
            ['rut'=> '86785464-9','nombre'=>'Felrwerweipe','apellido'=>'Herrasdasdera','email'=>'felipe.herrerad@usm.cl'],
        ]);
    }
}
