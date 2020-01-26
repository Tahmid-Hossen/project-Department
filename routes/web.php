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

Route::get('/', function(){
      return view('welcome');
});

Route::get('/create', [
  'uses' => 'TeamController@create'
]);

Route::post('/create-team', [
  'uses' => 'TeamController@store'
]);
Route::get('/team-list', [
  'uses' => 'TeamController@index'
]);
Route::post('/search',[
  'uses' => 'TeamController@search'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
