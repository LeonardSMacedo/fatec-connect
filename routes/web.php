<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfessorController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/register-aluno', [AlunoController::class, 'showRegisterForm'])->name('register.aluno');
Route::get('/register-professor', [ProfessorController::class, 'showRegisterForm'])->name('register.professor');


Route::get('/email/verify', function () {
    return 'Verifique seu e-mail para continuar.';
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return 'Bem-vindo à Dashboard!';
    });
});




