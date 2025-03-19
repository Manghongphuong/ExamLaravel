<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\AdminController;


//user
// Route::get('/login', [AdminController::class, 'login'])->name('pagelogin');
Route::get('/', [AdminController::class, 'login'])->name('pagelogin');
Route::post('/login', [AdminController::class, 'checklogin'])->name('login');
Route::get('/register', [AdminController::class, 'register'])->name('pageregister');
Route::post('/register', [AdminController::class, 'store'])->name('register');
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');    

Route::prefix('admin')->middleware('admin')->group(function(){
    Route::get('/', function(){
        return view('dashboard');
    })->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductsController::class);
    Route::resource('blogs', BlogsController::class);
    
    //User
    Route::get('/listuser', [AdminController::class, 'listuser'])->name('list_user');
    Route::post('destroyuser/{id}', [AdminController::class, 'destroyuser'])->name('destroy_user');
   
    //Email
    Route::get('/send-email', function () {
        return view('users.sendemail');
    })->name('sendemail');
    Route::post('/send-email', [EmailController::class, 'send'])->name('send_email');

});
