<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Front End About
Route::get('/', 'AboutController@front')->name('about.front');

// Front End Resume
Route::get('/resume', 'ResumeController@front')->name('resume.front');

// Front End Portfolio
Route::get('/portfolio', 'PortfolioController@front')->name('portfolio.front');

// Front End Blog
Route::get('/blog', 'BlogController@front')->name('blog.front');

// Front End Contact
Route::get('/contact', 'ContactController@front')->name('contact.front');


// Backend
Route::prefix('admin')->group(function () {
    Route::get('/', 'AuthController@index')->name('admin.auth');
    Route::post('/verif-auth', 'AuthController@auth')->name('login.admin');

    Route::middleware('auth')->group(function () {  
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    });
});