<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/index/{id}', [ProfileController::class, 'index']);


