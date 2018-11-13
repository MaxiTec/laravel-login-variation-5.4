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
use App\User;
use App\Client;

// Route::get('/usuarios', function() {
//   dd(User::all());
// });
// Route::get('/clientes', function() {
//   dd(Client::all());
// });

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('cliente')->group(function () {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('cliente.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('cliente.logout');
});
Route::prefix('administrador')->group(function () {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('administrador.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('administrador.logout');
    ;
});

Route::get('administrador', 'AdministratorController@index')->name('administrator.index');
Route::get('cliente', 'ClientController@index')->name('client.index');
Route::get('/home', 'HomeController@index')->name('home');
