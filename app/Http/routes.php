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
    return redirect('login');
});

    Route::get('home', function () {

            return redirect('dashboard');
    });


    Route::get('dashboard', function () {
        return view('dashboard.index');
    });

Route::get('login', function () {
    return view('auth.index');
});
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


Route::group(['middleware' => 'auth'], function () {
    Route::resource('dashboard','DashboardController');
    Route::resource('artistas', 'ArtistasController');
    Route::resource('canciones', 'SongController');
    Route::resource('clientes', 'ClientesController');
    Route::get('clientes/search/{option}/{search}','ClientesController@searchArtist');
    Route::get('clientes/colas/{song}', 'ClientesController@SendSongs');
    Route::get('canciones/colas/{song}', 'SongController@SendSongs');
    Route::get('search/autocompleteArtistas', 'ClientesController@autocompleteArtistas');
    Route::get('search/autocompleteTitle', 'ClientesController@autocompleteTitle');
    Route::get('clientes/search/{id}', 'ClientesController@search');
});
