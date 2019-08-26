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

Route::get('/','WelcomeController@index')->name('Accueil');

Route::get('/association','WelcomeController@showAsso')->name('Association');

/*route::get('association',function(){
	return view('association');
});
*/
route::get('evenement',function(){
	return view('evenement');
});

route::get('prestation',function(){
	return view('prestation');
});

route::get('contact',function(){
	return view('contact');
});

