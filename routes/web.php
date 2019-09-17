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

Route::get('/prestation/{catId}', 'PrestationController@getOnePrestation')->name('prestation.getOnePrestation');



/*Route::get('/prestations/{categories_id}','PrestationController@getCatPrestation')->name('prestation');*/

/*route::get('association',function(){
	return view('association');
});
*/

