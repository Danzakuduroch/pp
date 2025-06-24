<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommissariatController;

Route::get('/', [CommissariatController::class, 'index']);
