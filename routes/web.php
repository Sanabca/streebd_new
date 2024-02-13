<?php

use App\Http\Controllers\Website\BlogController;
use Illuminate\Support\Facades\Route;

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

Route::as('web.')->group(function () {

    Route::get('/', function () {
        return view('website.home');
    })->name('home');
    Route::get('/about-us', function () {
        return view('website.about');
    })->name('about-us');

    Route::get('/contact-us', function () {
        return view('website.contact');
    })->name('contact-us');

    Route::get('/service', function () {
        return view('website.service');
    })->name('service');

  
    Route::get('/blogs', [BlogController::class,'getBlogs'])->name('blog'); 
    Route::get('/blog-category/{category_slug}', [BlogController::class,'getBlogsByCategory'])->name('blog-category'); 
    Route::get('blog/{slug}', [BlogController::class,'showBlogDetails'])->name('blog-details'); 

    // Route::get('/blog', function () {
    //     return view('website.blog-details');
    // })->name('blog-details');



    Route::get('/mutual-funds', function () {
        return view('website.mutual-funds');
    })->name('mutual-funds');

    Route::get('/equity', function () {
        return view('website.equity');
    })->name('equity');

    Route::get('/privacy-policy', function () {
        return view('website.privacy-policy');
    })->name('privacy-policy');

    Route::get('/terms-conditions', function () {
        return view('website.terms-conditions');
    })->name('terms-conditions');

    Route::get('/bloogs', function () {
        return view('website.bloogs');
    })->name('bloogs');

    Route::get('/our-partners', function () {
        return view('website.partners');
    })->name('partners');
});
