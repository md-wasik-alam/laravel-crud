<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get("/",[HomeController::class,"readData"])->name('home');
Route::post("/insert",[HomeController::class,"storeData"])->name('emp.insert');

