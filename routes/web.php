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


Route::middleware('auth')
    ->group(function(){

        Route::get('/usuarios', ['as' => 'user.index', 'uses'=> 'UsersController@index']);

    Route::get('/teste', function(){
        return "Entrou";
    });

});






Route::get('/', function () {
    return redirect()->route('user.index');
});

Route::get('api/usuarios/listar', ['as'=> 'users.listar', 'uses'=> 'UsersController@listar']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

