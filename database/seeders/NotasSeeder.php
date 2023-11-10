<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nota;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $notas = [
            ['id_estudiante' => 1, 'id_curso' => 101, 'nota' => 85],
            ['id_estudiante' => 2, 'id_curso' => 101, 'nota' => 90],
            ['id_estudiante' => 3, 'id_curso' => 102, 'nota' => 75],
            ['id_estudiante' => 4, 'id_curso' => 103, 'nota' => 95],
            ['id_estudiante' => 5, 'id_curso' => 103, 'nota' => 88],
        ];

        Nota::insert($notas);
    }
}
