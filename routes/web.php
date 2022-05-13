<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/daftar','App\Http\Controllers\DaftarKaunselorController@create')->name('daftar.create');

Route::post('/daftar','App\Http\Controllers\DaftarKaunselorController@store')->name('daftar.store');

Route::get('/temujanji','App\Http\Controllers\TemujanjiController@index')->name('temujanji.index');

Route::get('/temujanji/create','App\Http\Controllers\TemujanjiController@create')->name('temujanji.create');

Route::post('/temujanji/create','App\Http\Controllers\TemujanjiController@store')->name('temujanji.store');

Route::post('/temujanji/{temujanji}','App\Http\Controllers\TemujanjiController@update')->name('temujanji.update');

Route::get('/temujanji/delete/{temujanji}','App\Http\Controllers\TemujanjiController@delete')->name('temujanji.delete');

Route::post('/temujanji/delete/{temujanji}','App\Http\Controllers\TemujanjiController@destroy')->name('temujanji.destroy');

Route::get('/temujanji/{temujanji}','App\Http\Controllers\TemujanjiController@show')->name('temujanji.show');

Route::get('/pengesahan','App\Http\Controllers\PengesahanController@index')->name('pengesahan.index');

Route::post('/pengesahan/{temujanji}','App\Http\Controllers\PengesahanController@update')->name('pengesahan.update');

Route::get('/pengesahan/{temujanji}','App\Http\Controllers\PengesahanController@show')->name('pengesahan.show');

Route::get('/search','App\Http\Controllers\CarianController@search')->name('search');

Auth::routes();

Route::get('/kaunselorlogin', 'App\Http\Controllers\SessionController@create')->name('kaunselorlogin.create');
Route::post('/kaunselorlogin', 'App\Http\Controllers\SessionController@store')->name('kaunselorlogin.store');
Route::get('/logout', 'App\Http\Controllers\SessionsController@destroy')->name('logout.destroy');

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/kaunselor/home', [App\Http\Controllers\HomeController::class, 'kaunselorHome'])->name('kaunselor.home')->middleware('is_kaunselor');

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

