<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("hola", 'holaController');

Route::get('usuario/{nombre?}', 'UsuarioController@usuariounparametro')->name('usuarionombre');

Route::get('usuario/{nombre}/comentario/{comentarioid}', 'UsuarioController@usuariodosparametros');

Route::get('user/{nombre}', 'usuario\userController@user')->where('nombre', '[A-Za-z]+');

Route::get('user1/{id}', 'usuario\userController@user1')->where('id', '[0-9]+');

Route::get('prueba', function () {
    return 'Pagina de prueba';
})->name('pruebaroute');

Route::get('redirigirprueba', function () {
    return redirect()->route('pruebaroute');
});

Route::get('redirigirprueba1', function () {
    return redirect()->route('usuarionombre', ['nombre' => 'Andres']);
});

Route::redirect('/prueba3', '/prueba', 301);

Route::resource('varios', 'variosmetodosrecursos');

Route::resource('varios1', 'variosmetodosrecursos')->only(['index', 'show']);

Route::resource('varios2', 'variosmetodosrecursos')->except(['create', 'store', 'update', "destroy"]);
