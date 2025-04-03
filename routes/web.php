<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin');
})->middleware(["auth", "verified"])->name("home");


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(["auth", "verified"])
    ->name("admin.")
    ->prefix("admin")
    ->group(function () {

        Route::get("/", function () {

            return view("admin");
        })->name("index");

        Route::get("profile", function () {
            return view("profile");
        })->name("profile");
    });

Route::resource("projects", ProjectController::class);
// ->middleware(["auth", "verified"]);
Route::resource("types", TypeController::class);

require __DIR__ . '/auth.php';
