<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommissariatController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ConscriptController;

Route::get('/', [CommissariatController::class, 'index'])->name('index');
Route::get('/contracts', [ContractController::class, 'index'])->name('contracts.index');
Route::get('/form', [ContractController::class, 'form'])->name('form.index');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/conscripts', [ConscriptController::class, 'index'])->name('conscripts.index');
