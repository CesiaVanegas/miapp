<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cursos = [
            ['id_curso' => 101, 'nombre_curso' => 'Matemáticas'],
            ['id_curso' => 102, 'nombre_curso' => 'Historia'],
            ['id_curso' => 103, 'nombre_curso' => 'Ciencias'],
        ];

        Curso::insert($cursos);
    }
}
