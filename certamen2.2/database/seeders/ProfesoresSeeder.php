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
            ['rut'=> '98765432-1','nombre'=>'Carlos','apellido'=>'Alten'],
        ]);
    }
}
