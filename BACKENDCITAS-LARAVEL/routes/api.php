<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::resource('appointment', AppointmentController::class);

Route::get('users', [UserController::class, 'index']);

Route::get('profile', [ApiController::class, 'obtenerDatos']);

Route::put('/editar-perfil/{rut}', [ApiController::class, 'editarPerfil']);