<?php

use App\Http\Controllers\CalculaImc;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImcController;

Route::get('/', function () {
    return view('home');
});

Route::get('/imc', [ImcController::class, 'index'])->name('imc.index');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('imc.dashboard');

route::post('/calcularImc', [ImcController::class, 'calcularimc'])->name('imc.calculaimc');

//
route::post('/salvar', [ImcController::class, 'store'])->name('imc.salvar');

//ATUALIZAR E DELETAR A TABELA IMC
route::put('/dashboard/update/{id}', [DashboardController::class, 'update'])->name('dash.update');

//DELETE
route::delete('/dashboard/delete/{id}', [DashboardController::class, 'destroy'])->name('dash.delete');