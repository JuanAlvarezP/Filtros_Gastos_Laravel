<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GastoController;

Route::get('/gastos', [GastoController::class, 'index'])->name('gastos.index');