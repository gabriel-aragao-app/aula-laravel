<?php

use App\Http\Controllers\CalculaImc;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImcController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use APP\Http\Middleware\Autentication;

Route::get('/', function () {
    return view('home');
});

Route::get('/imc', [ImcController::class, 'index'])->name('imc.index');

Route::post('/calcularImc', [ImcController::class, 'calcularimc'])->name('imc.calculaimc');

// VIEW LOGIN
Route::get('/login', [LoginController::class, 'index'])
    ->name('login');

// EVIAR DADOS FORM LOGIN
Route::post('/loin', [LoginController::class, 'logar'])
    ->name('logar');

// FINALIZAR LOGIN
Route::get('/logout', [LoginController::class, 'logout'])
    ->name('logout');

// VIEW REGISTRO
Route::get('/registro', [RegistroController::class, 'index'])
    ->name('user.create');//poderia ser 'cadastrousuario'

Route::post('/registro', [RegistroController::class, 'store'])
    ->name('user.store');

// SEGURANÇA DAS ROTAS
Route::middleware(Autentication::class)->group(function () {
    // VIEW DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('imc.dashboard');

    // inserir NA TABELA
    Route::post('/salvar', [ImcController::class, 'store'])->name('imc.salvar');

    //ATUALIZAR E DELETAR A TABELA IMC
    Route::put('/dashboard/update/{id}', [DashboardController::class, 'update'])->name('dash.update');

    //DELETE
    Route::delete('/dashboard/delete/{id}', [DashboardController::class, 'destroy'])->name('dash.delete');
});
