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
    return view('front.home-page');
})->name('home-page');

Route::get('/junte-se-a-nos', function () {
    return view('front.join-us');
})->name('join-us');

Route::get('/politica-cookies', function () {
    return view('front.politicas.politica-cookies');
})->name('politica-cookies');

Route::get('/politica-privacidade', function () {
    return view('front.politicas.politica-privacidade');
})->name('politica-privacidade');

Route::get('/politica-termos-gerais', function () {
    return view('front.politicas.politica-termos-gerais');
})->name('politica-termos-gerais');

Route::get('/menu', function () {
    return view('front.partials.menu');
})->name('menu');



Route::group(['namespace' => 'Front'], function()
{
    Route::resource('candidatos', 'CandidatosController');
});

