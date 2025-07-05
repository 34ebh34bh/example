<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\filterController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [filterController::class, 'index'])->name('index');
