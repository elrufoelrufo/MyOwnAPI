<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

//Route::get('/{name?}', 'MyController@index');

Route::group(array ('prefix'=> 'api/v1.1'), function(){ // versión for our api


Route::resource('makers', 'MakerController', ['except' => ['create' , 'edit' ]]);


Route::resource('vehicles', 'VehicleController' , ['only' => ['index']]);


Route::resource('makers.vehicles' , 'MakerVehiclesController' , ['except' => ['create' , 'edit' ]]); 


});