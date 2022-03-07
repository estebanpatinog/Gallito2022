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

/* Route::get('/', function () {
    $users = User::all();
    return view('welcome', compact('users'));
}); */


Auth::routes();
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/u/{user}', [App\Http\Controllers\PostController::class, 'index'])->name('index');

Route::get('/allu/{user}', [App\Http\Controllers\WelcomeController::class, 'ver'])->name('allusers.index');

Route::get('/perfil/{user}', [App\Http\Controllers\UserController::class, 'index']);

Route::resource('posts', App\Http\Controllers\PostController::class)
    ->except(['index']);

