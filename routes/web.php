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
    return view('welcome');
});


Route::get('/log', function () {
    return view('logingForm');
});


Route::get('/about','LogingOneController@singUpData');

Route::post('/saveTask','LogingOneController@saveTast');
Route::post('/insert','Controller@insert');
