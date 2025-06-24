<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommissariatController;
use App\Http\Controllers\ContractController;

Route::get('/', [CommissariatController::class, 'index'])->name('index');
Route::get('/contracts', [ContractController::class, 'index'])->name('contracts.index');
