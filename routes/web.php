<?php

use App\Http\Controllers\Dht22Controller;
use App\Models\max_suhu;
use App\Models\SmartHome;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $smarthome = SmartHome::all();
    $max_suhu = max_suhu::first();
    return view('welcome',compact("smarthome","max_suhu"));
});


Route::put("/dht22/max/update/{max_suhu}",[Dht22Controller::class,"updateMax"])->name("update.max");
