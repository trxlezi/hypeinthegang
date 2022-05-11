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

Route::get('', function () {
    return view('/paginas/home');
});

Route::get('/paginas/curso', function () {
    return view('/paginas/curso');
});

Route::get('/paginas/ementa', function () {
    return view('/paginas/ementa');
});

Route::get('/paginas/galeria', function () {
    return view('/paginas/galeria');
});
