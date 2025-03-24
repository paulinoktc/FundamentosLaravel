<?php

use App\Http\Controllers\AlumnospleController;
use App\Http\Controllers\GustavoController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\JorgeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', JorgeController::class);

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::resource('example', ExampleController::class)->names('xample');

Route::resource('Jorge', JorgeController::class)->names('Jorgex');

Route::resource('alumnosx', AlumnospleController::class)->names('alumnosx');

Route::resource('Gustavo', GustavoController::class)->names('Gustavo');
