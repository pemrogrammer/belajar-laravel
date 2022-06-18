<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::get('form', function (Request $request) {
	return view('form');
});

Route::post('submit', function (Request $request) {

	// dd($request);

	return view('view_data', ['request_pass' => $request]);
});


Route::get('naruto', function () {
	return view('naruto');
});