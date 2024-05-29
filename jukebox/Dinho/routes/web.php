<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcome; 

Route::get('/', function () {
    return view('welcome');
});

Route::get("/hello", [welcome::class, "hello"]);
Route::get("/song",); 