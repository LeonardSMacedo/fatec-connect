<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnidadeFatec;

class ProfessorController extends Controller
{
    public function showRegisterForm()
    {
        $unidades = UnidadeFatec::all();

        return view('auth.register-professor', compact('unidades'));
    }
}