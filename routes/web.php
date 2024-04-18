<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProfileController;
Route::view('/', 'welcome');


    
    Route::middleware('auth')->group(function () {
        Route::group(['middleware' => ['permission:role-list']], function () { 
            Route::view('profile', 'profile')->name('profile');
         });

        Route::view('dashboard', 'dashboard') ->name('dashboard');
        
        // Our resource routes
        Route::resource('roles', RoleController::class);
        Route::resource('users', UserController::class);
        Route::resource('products', ProductController::class);
    });
    
require __DIR__.'/auth.php';
