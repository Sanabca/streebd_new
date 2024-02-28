<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AdminAuthController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Blog\BlogController;
use App\Http\Controllers\Admin\Blog\BlogCategoryController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\Order\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::as('admin.')->group(function () {
    Route::middleware(['auth'])->group(function(){
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard'); 

        Route::prefix('blog')->as('blog.')->group(function () {
            Route::prefix('blogs')->as('blogs.')->group(function () {
                Route::get('list', [BlogController::class, 'index'])->name('list');
                Route::post('save', [BlogController::class, 'save'])->name('save');
                Route::get('create', [BlogController::class, 'create'])->name('create');
                Route::get('edit/{uuid}', [BlogController::class, 'getEdit'])->name('edit');
                Route::get('update-status/{id}', [BlogController::class, 'updateStatus'])->name('status');
                Route::get('delete/{id}', [BlogController::class, 'deleteRecord'])->name('delete');
                Route::post('upload-image', [BlogController::class, 'uploadImage'])->name('upload-image');
            });
            Route::prefix('categories')->as('category.')->group(function () {
                Route::get('list', [BlogCategoryController::class, 'index'])->name('list');
                Route::post('save', [BlogCategoryController::class, 'save'])->name('save');
                Route::get('edit/{id}', [BlogCategoryController::class, 'getEdit'])->name('edit');
                Route::get('update-status/{id}', [BlogCategoryController::class, 'updateStatus'])->name('status');
                Route::get('delete/{id}', [BlogCategoryController::class, 'deleteRecord'])->name('delete');
            });
        });

        Route::prefix('product')->as('product.')->group(function () {
            Route::get('list', [ProductController::class, 'index'])->name('list');
            Route::post('save', [ProductController::class, 'save'])->name('save');
            Route::get('edit/{id}', [ProductController::class, 'getEdit'])->name('edit');
            Route::get('update-status/{id}', [ProductController::class, 'updateStatus'])->name('status');
            Route::get('delete/{id}', [ProductController::class, 'deleteRecord'])->name('delete');
            Route::post('upload-image', [ProductController::class, 'uploadImage'])->name('upload-image');
        });

        Route::prefix('user')->as('user.')->group(function () {
            Route::get('list', [UserController::class, 'index'])->name('list');
            Route::post('save', [UserController::class, 'save'])->name('save');
            Route::get('edit/{id}', [UserController::class, 'getEdit'])->name('edit');
            Route::get('update-status/{id}', [UserController::class, 'updateStatus'])->name('status');
            Route::get('delete/{id}', [UserController::class, 'deleteRecord'])->name('delete');
        });

        Route::prefix('order')->as('order.')->group(function () {
            Route::get('list', [OrderController::class, 'index'])->name('list');
            Route::post('save', [OrderController::class, 'save'])->name('save');
            Route::get('edit/{id}', [OrderController::class, 'getEdit'])->name('edit');
            Route::get('update-status/{id}', [OrderController::class, 'updateStatus'])->name('status');
            Route::get('delete/{id}', [OrderController::class, 'deleteRecord'])->name('delete');
        });

    });
   

    Route::match(['get', 'post'], '/login', [AdminAuthController::class,'login'])->name('login'); 
    Route::post('/logout', [AdminAuthController::class,'logout'])->name('logout'); 

});
