<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReservaController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [LoginController::class, 'login_html']);

Route::get('/cadastro_usuario', [UsuarioController::class, 'cadastro_usuario_html']);

Route::get('/cadastro_reserva', function () {
    return view('cadastro_reserva');
});

Route::post('/cadastro_reserva', [ReservaController::class, 'cadastrar']);

Route::get('/inicio', [ReservaController::class, 'inicio']);
