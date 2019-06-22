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
Route::get('/', function(){
	$title = 'Home';
	return view('bird.home', compact('title'));
});

Route::get('/bird/about', function(){
	$title = 'About';
	return view('bird.about', compact('title'));
});

Route::get('/bird/contact', function(){
	$title = 'Contact';
	return view('bird.contact', compact('title'));
});

/*Route::get('/bird/birds', function(){
	$title = 'Contact';
	return view('bird.birds', compact('title'));
});

*/

Route::get('/bird/birds', 'Birds\BirdsController@index');

Route::get('/bird/birds/{id}', 'Birds\BirdsController@show');
