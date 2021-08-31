<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShareController;

Route::apiResource('/share', ShareController::class);
