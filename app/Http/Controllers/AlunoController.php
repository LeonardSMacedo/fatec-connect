<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnidadeFatec;
use App\Models\Curso;
use App\Models\Termo;

class AlunoController extends Controller
{
    public function showRegisterForm()
    {
        $unidades = UnidadeFatec::all();
        $cursos = Curso::all();
        $termos = Termo::all();

        return view('auth.register-aluno', compact('unidades', 'cursos', 'termos'));
    }
}