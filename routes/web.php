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
    return view('welcome');
//    return view('contacts');
});


Route::get('/contacts','ContactController@show');
Route::get('/newcontact','ContactController@newcontact');
Route::get('/editcontact/{id}','ContactController@edit')->name('edit');


Route::post('/delete/{id}','ContactController@delete')->name('delete');
//Route::post("/update", "ContactController@update")->name('update');
Route::post('/update', array('uses'=>'ContactController@update'));

Route::post('/create', array('uses'=>'ContactController@create'));