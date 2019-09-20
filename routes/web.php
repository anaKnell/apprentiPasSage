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

Route::get('/prestations/{catId}', 'PrestationController@getCatPrestation')->name('prestations.getCatPrestation');

Route::get('/prestation/{prestaId}','PrestationController@getOnePrestation')->name('prestation.getOnePrestation');

Route::get('/membre-association/{teamId}','TeamController@getOneteam')->name('teamController.getOneteam');

Route::get('/evenement-association/{eventId}','EventController@getOneEvent')->name('eventController.getOneEvent');

Route::get('/contact', 'ContactUSController@create')->name('Contact');

Route::post('/contact', ['as'=>'contactus.store','uses'=>'ContactUSController@store']);


