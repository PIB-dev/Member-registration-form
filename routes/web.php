<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CepController;
use App\Http\Controllers\MembroController;


Route::get('/', function () {
    return view('home');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/successful', function () {
    return view('successful');
});

Route::get('/errorform', function () {
    return view('errorForm');
});

Route::get('/consultar-cep', [CepController::class, 'consultarCep']);

Route::post('/members', [MembroController::class, 'store']);

