<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProducController;


// api
Route::apiResource('sanphams', ProducController::class);
//


Route::apiResource('admin/sp', AdminController::class);
