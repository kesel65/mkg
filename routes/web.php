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

Route::get('/', function () {
    return view('home', ['title' => 'Welcome To Michelle Kesel\'s website']);
})->name('home');

Route::get('bio', 'Bio@index')->name('bio');

Route::get('portfolio', 'ProjectController@index')->name('portfolio');

Route::get('resume', 'CertController@index')->name('resume');

Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact', 'ContactController@store')->name('contact.store');

Route::resources([
    'projects' => 'ProjectController',
    'songs' => 'SongController'
]);

Route::get('/songs/{song}/delete', 'SongController@destroy');

