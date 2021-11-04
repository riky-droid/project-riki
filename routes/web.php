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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/project', function () {
    return view('home');
})->name('home');

Route::get('/project/display-data', function () {
    return view('display-data');
});

Route::get('/project/selection', function () {
    return view('selection');
});

Route::get('/project/loop', function () {
    return view('loop');
});

Route::get('/project/continue-and-break', function () {
    return view('continue-and-break');
});