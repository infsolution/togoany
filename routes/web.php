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

Route::get('/','NewsController@listNews');
Route::get('/sites','SiteController@searchSite');
Route::get('/detail/{id}', 'NewsController@openLink');

//Route::get('/addsite/{name}/{url}','SiteController@addSite')/*->where('name','[a-zA-Z]+')*/;
Route::get('/add/{name}/{url}','SiteController@add');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
