<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;



// Route::get('/',[StudentController::class,"show"]);
Route::get('index',[StudentController::class,"index"])->name("index");
Route::get('create',[StudentController::class,"studentFormShow"])->name("studentFormShow");
Route::post('create',[StudentController::class,"create"])->name("create");
Route::get('delete/{id}',[StudentController::class,"dlt"])->name("delete");
Route::get('delete/{id}',[StudentController::class,"dlt"])->name("delete");
Route::get("edit/{id}",[StudentController::class,"edit"]);
Route::post("edit/{id}",[StudentController::class,"update"]);

