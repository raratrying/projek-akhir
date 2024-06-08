<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtributController;


Route::resource('atributs', AtributController::class);

// Route::get('/', function () {
//     return view('welcome');
// });
