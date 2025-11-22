<?php

use App\Http\Controllers\Dht22Controller;
use App\Http\Controllers\SmartHomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/status",[SmartHomeController::class,"index"]);
Route::put("/toggle/{smartHome}",[SmartHomeController::class,"update"]);

// untuk dht
Route::get("/dht22/all",[Dht22Controller::class,"index"]);
Route::get("dht22/update/{temp}/{humd}",[Dht22Controller::class,"update"]);

// untuk max suhu
Route::get("/dht22/max",[Dht22Controller::class,"indexMax"]);
