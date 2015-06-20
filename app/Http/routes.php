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

Route::get('/', function () {
    return redirect('welcome');
});

Route::get('home', function () {
    return view('administrator/index');
});

//Route::get('artistas', 'ArtistasController@index');



//Route::get('artistas', 'ArtistasController@index');
//Route::get('artistas/create', 'ArtistasController@create');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


Route::group(['middleware' => 'auth'], function () {
    Route::match(['get', 'post'],'artistas','ArtistasController@index');
    Route::match(['get', 'post'],'artistas/create','ArtistasController@create');
    Route::post('artistas','ArtistasController@store');
    Route::get('artistas/{id}','ArtistasController@show');
    //Route::match(['get', 'post'],'articles/{id}/edit','ArticlesController@edit');
    //Route::put('articles/{id}','ArticlesController@update');
    //Route::patch('articles/{id}','ArticlesController@update');
    //Route::delete('articles/{id}','ArticlesController@destroy');
});