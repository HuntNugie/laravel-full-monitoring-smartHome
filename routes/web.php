<?php

use App\Models\SmartHome;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $smarthome = SmartHome::all();
    return view('welcome',compact("smarthome"));
});


