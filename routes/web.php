<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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
    return view('index');
});

Route::view('ex1', 'example/ex1');
Route::view('ex2', 'example/ex2');
Route::view('ex3', 'example/ex3');
Route::view('ex4', 'example/ex4');
Route::view('ex5_1', 'example/ex5_1');
Route::view('ex5_2', 'example/ex5_2');




