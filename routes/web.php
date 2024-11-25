<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', function () {
    //return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard',[ProductController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::get('/product',[ProductController::class,'index']);
    Route::get('/products/create',[ProductController::class,'create']);
    Route::post('/products/store',[ProductController::class,'store']);
    Route::get('/products/{id}/edit',[ProductController::class,'edit']);
    Route::put('/products/{id}/update',[ProductController::class,'update']);
    Route::get('/products/{id}/delete',[ProductController::class,'destroy']);
    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';