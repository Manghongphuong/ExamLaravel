<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;

//user
// Route::get('/', [ClientController::class, 'index'])->name('index');
// Route::get('/shop', [ClientController::class, 'shop'])->name('shop');
// Route::get('/about', [ClientController::class, 'about'])->name('about');
// Route::get('/services', [ClientController::class, 'services'])->name('services');
// Route::get('/blog', [ClientController::class, 'blog'])->name('blog');
// Route::get('/contact', [ClientController::class, 'contact'])->name('contact');


//admin
// Route::get('/login', [AdminController::class, 'login'])->name('pagelogin');
Route::get('/', [AdminController::class, 'login'])->name('pagelogin');
Route::post('/login', [AdminController::class, 'checklogin'])->name('login');
Route::get('/register', [AdminController::class, 'register'])->name('pageregister');
Route::post('/register', [AdminController::class, 'store'])->name('register');

Route::get('/forgot-password', [AdminController::class, 'forgotpassword'])->name('forgot_password');
Route::post('/forgot-password', [AdminController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [AdminController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [AdminController::class, 'resetPassword'])->name('password.update');


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
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');    

});

