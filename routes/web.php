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

Route::get('/', 'PostController@featch_all_post');

Route::get('/about-us', function () {
    return view('about');
});


Auth::routes();

//contract route
Route::post('/send-mail','ContractController@send');
Route::get('/contract-us','ContractController@index');

//post insert route
Route::get('/insert','PostController@insertform');
Route::post('/create','PostController@insert');


//view post routes
Route::pattern('id', '[0-9]+');
Route::get('/post/{id}', 'PostController@view_post');

//admin panel routs
Route::get('/admin', function () {
    return view('admin.index');
});