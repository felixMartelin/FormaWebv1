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

Route::get('1', function() {return 'Je suis la page 1 !';});
Route::get('/MaVue', function() { return view('vue1');});
Route::get('/liste',function() { return view('listeConferences');});
