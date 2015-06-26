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

    if(Auth::user()['attributes']['roll'] == "Administrator")
        return redirect('canciones');
    else
        return redirect('artistas');
});

/*Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout'], function(){
	return view('auth/login');
});*/

//Route::get('artistas', 'ArtistasController@index');



//Route::get('artistas', 'ArtistasController@index');
//Route::get('artistas/create', 'ArtistasController@create');

    Route::get('clientes/search/{id}', 'ClientesController@search');


Route::get('login', function () {
    return view('auth.index');
});


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
/*
Route::get('canciones/findAllArtist', ['as' => 'todos', 'uses' => 'SongController@findAllArtist']);
Route::get('clientes/search/{id}', ['as' => 'search', 'uses' => 'ClientesController@search']);*/
Route::get('clientes/search/{option}/{search}','ClientesController@searchArtist');



Route::get('colas/{id}', 'SongController@SendSongs');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('artistas', 'ArtistasController');
    Route::resource('canciones', 'SongController');
    Route::resource('clientes', 'ClientesController');

    

   // Route::match(['get', 'post'],'artistas','ArtistasController@index');
   // Route::match(['get', 'post'],'artistas/create','ArtistasController@create');
    //Route::match(['get', 'put'],'artistas/update/{id}','ArtistasController@update');
    //Route::match(['get', 'post'],'artistas/edit','ArtistasController@edit');
    /*Route::post('artistas','ArtistasController@store');
    Route::get('artistas/{id}','ArtistasController@show');
    Route::get('artistas/edit/{id}','ArtistasController@edit');
    Route::put('artistas/update/{id}','ArtistasController@update');
    //Route::match(['get', 'post'],'articles/{id}/edit','ArticlesController@edit');
    //Route::put('articles/{id}','ArticlesController@update');
    //Route::patch('articles/{id}','ArticlesController@update');

    Route::get('artistas/delete/{id}','ArtistasController@destroy');

    //Route::delete('articles/{id}','ArticlesController@destroy');*/

});
