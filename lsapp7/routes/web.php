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
    return view('main');
});
Route::get('/','PagesController@index'); 
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');  
//Route::get('/blog','PagesController@blog');  

Route::get('/create','BlogsController@create');
Route::get('/edit','BlogsController@edit');
Route::resource('blog','BlogsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
