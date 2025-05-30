<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UnidadeFatec;

class UnidadeFatecSeeder extends Seeder
{
    public function run()
    {
        UnidadeFatec::create(['nome' => 'Garça']);
    }
}
