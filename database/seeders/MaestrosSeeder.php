<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Maestro;

class MaestrosSeeder extends Seeder
{
    public function run()
    {
        $maestros = [
            ['nombre' => 'Profesor A'],
            ['nombre' => 'Profesor B'],
            ['nombre' => 'Profesor C'],
        ];

        Maestro::insert($maestros);
    }
}

