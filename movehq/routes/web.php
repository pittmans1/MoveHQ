<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/signup','signup');
Route::view('/login','login');
Route::post('/signup', ['App\Http\Controllers\Controller::class', 'createUser']);
Route::post('login', ['App\Http\Controllers\Controller::class','login']);
Route::view('/home', 'home');
Route::get('/posts',['App\Http\Controllers\Controller::class','getPosts']);
Route::post('/post/{id}', ['App\Http\Controllers\Controller::class','createPost']);
Route::delete('/post/{id}', ['App\Http\Controllers\Controller::class','deletePost']);
