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
// ejemplo de llamar al metodo index dentro de PostsController
//Route::get('/posts','PostsController@index');

// autenticacion - master
Route::auth();
// Authentication routes...
/*
$this->get('login','');
$this->post('login','');
$this->get('logout','');
*/
// Registration routes...\
/*
$this->get('register','');
$this->post('register','');
*/

// Password reset routes...
/*
$this->get('password','');
$this->post('password','');
$this->get('password','');
*/

Route::get('/','HomeController@index');


Route::resource('/usuarios','UserController');
Route::resource('/categorias','CategoriesController');
Route::resource('/posts','PostsController');