<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TanamanHiasController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('tanaman_hias', TanamanHiasController::class);