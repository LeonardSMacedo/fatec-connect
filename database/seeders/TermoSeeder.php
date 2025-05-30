<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Termo;

class TermoSeeder extends Seeder
{
    public function run()
    {
        $termos = [
            '1º Termo',
            '2º Termo',
            '3º Termo',
            '4º Termo',
            '5º Termo',
            '6º Termo',
        ];

        foreach ($termos as $termo) {
            Termo::create(['descricao' => $termo]);
        }
    }
}