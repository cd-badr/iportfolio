<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "index"])->name("home.index");

Route::get("/admin", [AdminController::class, "index"])->name("admin.index");


//!update

//* get

Route::get("/admin/show/{home}", [AdminController::class, "show"])->name("admin.show");


//& put
Route::put("/admin/update/{homes}" , [AdminController::class , "update"])->name("admin.update");