<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\MilanoController;
use App\Http\Controllers\RomaController;
use App\Http\Controllers\IscrittiController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/milano', [MilanoController::class, 'milano'])->name('milano');
Route::get('/roma', [RomaController::class, 'roma'])->name('roma');
Route::get('/iscritti', [IscrittiController::class, 'iscritti'])->name('iscritti');