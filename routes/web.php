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

//Route::resource ('organizations', 'OrganizationsController');
//Route::resource ('vehicles', 'VehiclesController');
//Route::resource ('services', 'ServicesController');
//Route::resource ('company', 'CompanyController');
//Route::resource ('cservices', 'CservicesController');
//Route::resource ('parts', 'PartsController');
//Route::resource ('auto', 'AutoController');

Route::get('/', 'HomeController@index');
Route::get('/menu', 'VehiclesController@index');
Route::get('/vehicles/{vehicle}', 'VehiclesController@showVehicle');
Route::get('/vehicle/{id}', 'VehiclesController@vehicleDetails');
//Route::get('/menu/index', 'VehiclesController@index');
Route::get('/vehicles', 'VehiclesController@index');
Route::get('/search', 'VehiclesController@searchVehicle')->name('CarSearch');
Route::post('/motorcycles', 'VehiclesController@eyes');
Route::get('search', ['as' => 'search', 'uses' => 'VehiclesController@searchVehicle']);
//Route::get('/vehicles/{make}/{model}', 'VehiclesController@searchVehicle');
//Route::get('/vehicles/{vehicle}/{vehicle}', 'VehiclesController@searchVehicle');
Route::get('/moto', 'VehiclesController@index');