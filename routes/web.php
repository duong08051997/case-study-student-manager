<?php

use Illuminate\Support\Facades\Route;

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
    return view('layouts.core.home');
});
Route::prefix('classes')->group(function () {
    Route::get('/','ClassController@index')->name('classes.index');
    Route::get('/create','ClassController@create')->name('classes.create');
    Route::post('/create','ClassController@store')->name('classes.store');
});
Route::prefix('students')->group(function () {
    Route::get('/','StudentController@index')->name('students.index');
    Route::get('/create','StudentController@create')->name('students.create');
    Route::post('/create','StudentController@store')->name('students.store');
    Route::get('/{id}/edit','StudentController@edit')->name('students.edit');
    Route::post('/{id}/edit','StudentController@update')->name('students.update');
});
