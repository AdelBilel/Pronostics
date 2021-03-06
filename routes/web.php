<?php

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



Auth::routes();

Route::get('/', function () {
    return view('welcome');
})->name('accueil');


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/match', 'MatchController'); // ecrit toutes les routes lié au fonctions de MatchController ( show, create, etc...)

Route::resource('/pronos', 'PronosController');

Route::resource('/contact', 'ContactController');

Route::get('/classement', 'ClassementController@index')->name('classement');

Route::resource('profile', 'UserController', [
    'only' => ['edit', 'update'],
    'parameters' => ['profile' => 'user']
]);




