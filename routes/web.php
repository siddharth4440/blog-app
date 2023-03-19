<?php

use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/register', [LoginController::class, 'register']);

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/posts', function () {
    return view('pages.posts');
});

Route::get('/addpost', function () {
    return view('pages.addpost');
});
