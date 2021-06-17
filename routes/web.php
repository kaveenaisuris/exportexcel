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
Route::get('export', 'App\Http\Controllers\MyController@export')->name('export');


Route::get('importExportView', 'App\Http\Controllers\MyController@importExportView');


Route::post('import', 'App\Http\Controllers\MyController@import')->name('import');
