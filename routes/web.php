<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\BackendendController;
use App\Http\Controllers\Backend\ProductCategoriesController;

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/checkout', [FrontendController::class, 'checkout'])->name('frontend.checkout');
Route::get('/cart', [FrontendController::class, 'cart'])->name('frontend.cart');
Route::get('/shop', [FrontendController::class, 'shop'])->name('frontend.shop');
Route::get('/detail', [FrontendController::class, 'detail'])->name('frontend.detail');

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::prefix('admin')->as('admin.')->group(
    function () {
        Route::group(['middleware' => 'guest'], function () {
            Route::get('login', [BackendendController::class, 'login'])->name('login');
            Route::get('forget_password', [BackendendController::class, 'forget_password'])->name('forget_password');
        });

        Route::middleware(['role:admin|superadmin', 'roles','auth'])->group(function () {
            Route::get('index', [BackendendController::class, 'index'])->name('index');
            Route::get('/', [BackendendController::class, 'index'])->name('index_route');
        Route::resource('product_categories',ProductCategoriesController::class);
        
        });
    }
);
