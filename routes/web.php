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
});

Route::group(['middleware' => ['web']], function () {

	Route::get('/', 'UserController@index');
	Route::get('/user/login', 'UserController@index');
	Route::post('/user/login', 'UserController@login');

	Route::get('/user/register', 'UserController@register');
	Route::post('/user/register', 'UserController@create');

	Route::get('/user/profile', 'UserController@profile');
	Route::post('/user/profile', 'UserController@update');

	Route::get('/user/logout', 'UserController@logout');

	Route::get('/user/delete/{id}', 'UserController@delete');


  Route::get('admin/inquiry/list', 'AdminInquiryController@index')->name('inquiry.index');;

  Route::get('admin/inquiry/detail/{id}', 'AdminInquiryController@detail')->name('inquiry.detail');


});

Route::get('inquiry/input', 'InquiryController@input')->name('inquiry.input');
Route::post('inquiry/confirm', 'InquiryController@confirm')->name('inquiry.confirm');
Route::post('inquiry/store', 'InquiryController@store')->name('inquiry.store');
Route::get('inquiry/back', 'InquiryController@back')->name('inquiry.back');

Route::post('inquiry/complete', 'InquiryController@complete')->name('inquiry.complete');
