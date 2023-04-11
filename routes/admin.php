<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('',[HomeController::class,'index']);
Route::get('/contacts',[HomeController::class,'contact']);
Route::get('/photos',[HomeController::class,'photo']);