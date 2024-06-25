<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcome; 
use App\Http\Controllers\playlist; 
Route::get('/', function () {
    return view('welcome');
});

Route::get("/hello", [welcome::class, "hello"]);
Route::get("/Song",); 
Route::get("/playlist/all");
Route::get("/playlist");
Route::get("/playlist/view/{playlist}")
Route::post("/playlist/addsong{Playlistcontroller}")