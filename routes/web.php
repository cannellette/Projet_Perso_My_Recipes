<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CookbookController;
use App\Http\Controllers\RecipeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cookbooks', [CookbookController::class, 'index'])->name('cookbooks.index');
Route::get('/cookbooks/create', [CookbookController::class, 'create'])->name('cookbooks.create');
Route::post('/cookbooks/create', [CookbookController::class, 'store'])->name('cookbooks.store');
Route::post('/cookbooks/{cookbook}/edit', [CookbookController::class, 'edit'])->name('cookbooks.edit');
Route::put('/cookbooks/{cookbook}', [CookbookController::class, 'update'])->name('cookbooks.update');
Route::delete('/cookbooks/{cookbook}', [CookbookController::class, 'destroy'])->name('cookbooks.destroy');

Route::get('/cookbooks/{cookbook}', [RecipeController::class, 'showRecipes'])->name('cookbooks.show');
Route::get('/cookbooks/{cookbook}/recipes', [RecipeController::class,'index'])->name('cookbooks.recipes.index');

Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('/cookbooks/{cookbook}/recipes/create', [RecipeController::class, 'create'])->name('recipes.create');
Route::post('/cookbooks/{cookbook}/recipes', [RecipeController::class, 'store'])->name('recipes.store');
Route::get('/cookbooks/{cookbook}/recipes/edit', [RecipeController::class, 'edit'])->name('recipes.edit');
Route::put('/cookbooks/{cookbook}/recipes', [RecipeController::class, 'update'])->name('recipes.update');
Route::delete('/cookbooks/{cookbook}/recipes', [RecipeController::class, 'destroy'])->name('recipes.destroy');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
