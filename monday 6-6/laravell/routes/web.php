<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_Test;
use App\Models\User;


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


Route::get('/roa', function(){
    return 'welcome roa';
});
Route::get('/roa', function () {
    return view('roa');
});


Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});



Route::get('/candy', function () {
    $tasks = [
        'sneakers',
        'mars',
        'twix'  
    ];
    return view('candy', compact('tasks')
);
});


Route::get('/newTest', 'App\Http\Controllers\Controller_Test@test');
Route::get('/too/id/{id}/name/{name}', 'App\Http\Controllers\Controller_Test@render');



Route::get('/log', function () {
    return view('login');
});



Route::get('/sign', function () {
    return view('layout.signup');
});

//Q2
Route::get('/newTest/id/{id}/user/{user}', [Controller_Test::class,'test2'])-> where('id', '[0-9]+');

//Q3
Route::get('/newTest/id/{id}/user/{user}', [Controller_Test::class,'test2'])-> where('user', '[A-z]+');

Route::get('/home',[Controller_Test::class,'home']);
Route::get('/about',[Controller_Test::class,'Send']);
Route::get('/contact',[Controller_Test::class,'contact']);
Route::get('/list',[Controller_Test::class,'list']);
Route::get('/table',[Controller_Test::class,'table']);
Route::get('/add', [Controller_Test::class, 'add']);
Route::post('/add', [Controller_Test::class, 'insert']);
Route::get('delete/id/{id}', [Controller_Test::class, 'delete']);
Route::get('edit/id/{id}', [Controller_Test::class, 'edit']);
Route::put('update/id/{id}', [Controller_Test::class, 'updated']);
Route::get('select/id/{id}', [Controller_Test::class, 'select']);
Route::post('form', [Controller_Test::Class, 'validation']);
Route::view("show","form");
Route::get('/candy', [Controller_Test::class, 'onerel']);
Route::post('/sign', [Controller_Test::Class, 'form_validate']);
Route::view("show","layout.signup");

