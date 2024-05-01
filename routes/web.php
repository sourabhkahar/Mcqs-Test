<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
Route::view('/', 'welcome');


    
    Route::middleware('auth')->group(function () {
        // Route::group(['middleware' => ['permission:role-list']], function () { 
            //  });
            
        Route::view('dashboard', 'dashboard') ->name('dashboard');
        Route::view('profile', 'profile')->name('profile');
        Route::view('question', 'question')->name('question');
        // Route::view('category', 'category')->name('category');
        
        Route::get('/category', [CategoryController::class, 'index']);
        Route::get('/category/create', [CategoryController::class, 'create'])->name('createCategory');
        // Our resource routes
        Route::resource('roles', RoleController::class);
        Route::resource('users', UserController::class);
        Route::resource('products', ProductController::class);
    });
    
require __DIR__.'/auth.php';
