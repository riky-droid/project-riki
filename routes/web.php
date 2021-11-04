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
});

Route::get('/project/Display Data', function () {
    return view('Display Data');
});

Route::get('/project/Selection', function () {
    return view('Selection');
});

Route::get('/project/Loop', function () {
    return view('Loop');
});

Route::get('/project/Continue & Break', function () {
    return view('Continue & Break');
});