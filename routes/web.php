<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;

//user
//register user
Route::get('/register_user', [ClientController::class, 'register_user'])->name('user_register');
Route::post('/register_user', [ClientController::class, 'storeuser'])->name('register_user');

//login user
Route::get('/login_user', [ClientController::class, 'login_user'])->name('user_login');
Route::post('/login_user', [ClientController::class, 'checkloginuser'])->name('login_user');

//logout user
Route::post('/logout_user', [ClientController::class, 'logoutuser'])->name('logout_user');


//forgot password user
Route::get('/forgot_password_user', [ClientController::class, 'forgotpassworduser'])->name('forgot_password_user');
Route::post('/forgot_password_user', [ClientController::class, 'sendResetLinkEmailUser'])->name('password.email.user');
Route::get('/reset-password-user/{token}', [ClientController::class, 'showResetFormUser'])->name('password.reset.user');
Route::post('/reset-password-user', [ClientController::class, 'resetPasswordUser'])->name('password.update.user');


Route::get('/', [ClientController::class, 'index'])->name('index');
Route::get('/shop', [ClientController::class, 'shop'])->name('shop');
Route::get('/about', [ClientController::class, 'about'])->name('about');
Route::get('/services', [ClientController::class, 'services'])->name('services');
Route::get('/blog', [ClientController::class, 'blog'])->name('blog');
Route::get('/contact', [ClientController::class, 'contact'])->name('contact');
Route::get('/cart', [ClientController::class, 'cart'])->name('cart');
Route::get('/detail_product/{id}', [ClientController::class, 'detail_product'])->name('detail_product');
Route::get('/detail_blog/{id}', [ClientController::class, 'detail_blog'])->name('detail_blog');






//admin
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'login'])->name('pagelogin');
    Route::post('/login', [AdminController::class, 'checklogin'])->name('login');
    Route::get('/register', [AdminController::class, 'register'])->name('pageregister');
    Route::post('/register', [AdminController::class, 'store'])->name('register');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');    
    Route::get('/forgot-password', [AdminController::class, 'forgotpassword'])->name('forgot_password');
    Route::post('/forgot-password', [AdminController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('/reset-password/{token}', [AdminController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [AdminController::class, 'resetPassword'])->name('password.update');

    // Dashboard + resource
        Route::get('/dashboard', function(){
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
