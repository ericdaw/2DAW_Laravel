<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;

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

Route::get('/', 'App\Http\Controllers\HomeController@getHome');

Route::get('/catalog', 'App\Http\Controllers\CatalogController@getIndex')->middleware('auth');

Route::get('/catalog/show/{id}', 'App\Http\Controllers\CatalogController@getShow')->middleware('auth');

Route::get('/catalog/create', 'App\Http\Controllers\CatalogController@getCreate')->middleware('auth');

Route::get('/catalog/edit/{id}', 'App\Http\Controllers\CatalogController@getEdit')->middleware('auth');

Route::post('/catalog/create', 'App\Http\Controllers\CatalogController@postCreate')->middleware('auth');

Route::put('/catalog/edit/{id}', 'App\Http\Controllers\CatalogController@putEdit')->middleware('auth');



/*
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/logout', function () {
    return "Logout usuario";
});
*/
// Route::get('foo', 'App\Http\Controllers\AdminController@method');
// $url = action('FooController@method');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
