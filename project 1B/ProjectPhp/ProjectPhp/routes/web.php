<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/users', function () {
//     return view('users');
// })->middleware(['auth'])->name('users');

// require __DIR__.'/auth.php';

Route::resource('articles', ArticleController::class)->middleware(['auth']);

Route::resource('profiles', ProfileController::class)->middleware(['auth']);

Route::get('users', [UserController::class, 'list'])->middleware(['auth','role:editor,admin']);

Route::resource('category', CategoryController::class)->middleware(['auth']);

Route::resource('products', ProductController::class)->middleware(['auth']);

Route::get('/fail', function (){
    return view('pages.fail');
});

Route::get('check_age/{age?}', function ($age=null) {
    return view('pages.admin');
})->middleware(\App\Http\Middleware\CheckAge::class);
