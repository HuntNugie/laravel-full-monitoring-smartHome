<?php

use App\Http\Controllers\SmartHomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/status",[SmartHomeController::class,"index"]);
Route::put("/toggle/{smartHome}",[SmartHomeController::class,"update"]);
