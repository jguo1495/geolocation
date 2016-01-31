<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
//basic Google Map
Route::get('map', 'HomeController@showUserMap');
//Google Map wth dynamic address
Route::get('map2', 'HomeController@showUserMap2');
//Googlee Map with search box
Route::get('map3', 'HomeController@showUserMap3');
//Google Map with multi markers
Route::get('map4', 'HomeController@showUserMap4');
Route::get('map-component', 'HomeController@showUserMapComponent');
Route::get('vue-test', 'HomeController@showVue');
Route::get('json', 'HomeController@showJsonPage');
Route::post('geo-data', 'HomeController@handleGeodata');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
