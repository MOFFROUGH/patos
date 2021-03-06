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
    return view('home.home');
});
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
Route::get('/project/{slug}', 'HomeController@project')->name('project');
Route::get('/pricing', 'HomeController@pricing')->name('pricing');
Route::get('/contacts', 'HomeController@contacts')->name('contacts');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
