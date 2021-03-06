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

// Pages
Route::get('/', 'PageCtrl@welcome');
Route::get('impressum', 'PageCtrl@impressum')->name('imprint');
Route::get('debug', 'PageCtrl@debug');

// Contact Form
Route::post('contact', 'ContactCtrl@sendMail');
