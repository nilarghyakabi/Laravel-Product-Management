<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','user'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);

//Product list view for both admin and user
Route::middleware('auth')->prefix('products')->group(function(){
    Route::get('/view',[ProductController::class,'view'])->name('product.view');
});

//CRUD Operation for Product only accessible by admin
Route::middleware('auth','admin')->prefix('products')->group(function(){
    Route::get('/form',[ProductController::class,'form'])->name('product.form');
    Route::post('/create',[ProductController::class,'create'])->name('product.create');
    Route::get('/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::post('/update/{id}',[ProductController::class,'update'])->name('product.update');
    Route::get('/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
});