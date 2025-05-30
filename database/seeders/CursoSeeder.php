<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    public function run()
    {
        $cursos = [
            'Análise e Desenvolvimento de Sistemas',
            'Mecatrônica',
            'Gestão'
        ];

        foreach ($cursos as $curso) {
            Curso::create(['nome' => $curso]);
        }
    }
}
