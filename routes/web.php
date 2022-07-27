<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;

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

Route::get('/', function() {
    return view('welcome');
});

Route::get('home', [mycontroller::class, 'Home']);

Route::get('about','App\Http\Controllers\mycontroller@About');

Route::get('contact', [mycontroller::class, 'Contact']);

Route::post('/save', [mycontroller::class, 'saveData']);

Route::get('/contact/all', [mycontroller::class, 'index']);

Route::get('/signin', [mycontroller::class, 'Signin']);

Route::get('/signup', [mycontroller::class, 'Signup'])->name('register-user');

Route::post('custom-login', [mycontroller::class, 'customLogin'])->name('login.custom'); 

Route::post('custom-registration', [mycontroller::class, 'customRegistration'])->name('register.custom'); 

Route::get('signout', [mycontroller::class, 'signOut'])->name('signout');
