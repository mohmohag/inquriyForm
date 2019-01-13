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


Route::get('inquiry/input', 'InquiryController@input')->name('inquiry.input');
Route::post('inquiry/confirm', 'InquiryController@confirm')->name('inquiry.confirm');
Route::post('inquiry/store', 'InquiryController@store')->name('inquiry.store');
Route::get('inquiry/back', 'InquiryController@back')->name('inquiry.back');

Route::post('inquiry/complete', 'InquiryController@complete')->name('inquiry.complete');
