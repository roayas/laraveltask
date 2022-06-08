<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\HomeController;


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

Route::get('/net', function () {
    return view('netfilx');
});

Route::get('movies',[MovieController::class,'show']);
Route::get('add',[MovieController::Class,'viewadd']);
Route::post('add', [MovieController::class, 'createData']);
Route::get('delete/id/{id}', [MovieController::class, 'delete']);
Route::get('edit/id/{id}', [MovieController::class, 'edit']);
Route::put('update/id/{id}', [MovieController::class, 'updated']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin-view', [App\Http\Controllers\HomeController::class, 'adminView'])->middleware('admin');
