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

// Route::get('/destroy','FooterMenuController@destroy');
Route::resource('footermenu','FooterMenuController');
Route::resource('footersubmenu','FooterSubMenuController');
Route::resource('footer','FooterController');
Route::resource('footer','FooterController');
Route::resource('socialmedia' , 'SocialMediaController');
Route::resource('contact' , 'ContactController');