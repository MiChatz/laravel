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

	$info = DB::table('info')->get();
	return view('info', compact('info'));
});

Route::get('info', function () {
	$info = DB::table('info')->get();
	return view('info', compact('info'));
});

Route::get('portfolio', function () {
	$portfolio = DB::table('portfolio')->get();
	return view('portfolio', compact('portfolio'));
});

Route::get('contact', function () {
	$contact = DB::table('contact')->get();
	return view('contact', compact('contact'));
});