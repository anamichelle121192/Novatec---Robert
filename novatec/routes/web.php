<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PruebaController;
use App\Http\Controllers\AuthController;
use App\Livewire\Counter;
use App\Livewire\AsignacionCliCulIng;

// BLOQUEO LOGIN

Route::middleware(['guest'])->group(function () {

    Route::get('/', function () {
        return view('Login.login');
    });

});

// SALIDA DE SESION
Route::get('/logout', [AuthController::class, 'logout']);

// ACCESO PERMITIDO

Route::middleware(['checksession'])->group(function () {

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/robert', function (){
        return view('asignacion-cli-cul-ing.asignacion-load');
    });

});