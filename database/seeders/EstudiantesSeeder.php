<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estudiante;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estudiantes = [
            ['nombre' => 'Juan', 'edad' => 20, 'id_curso' => 101],
            ['nombre' => 'Maria', 'edad' => 21, 'id_curso' => 102],
            ['nombre' => 'Carlos', 'edad' => 19, 'id_curso' => 101],
            ['nombre' => 'Laura', 'edad' => 22, 'id_curso' => 103],
            ['nombre' => 'Pedro', 'edad' => 20, 'id_curso' => 102],
        ];

        Estudiante::insert($estudiantes);
    }
}
