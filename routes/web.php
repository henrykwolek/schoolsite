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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::middleware('auth')->group(function () {
  Route::get('/redakcja', 'HomeController@admin')
    ->name('admin-index')
    ->middleware('is_admin');

  Route::get('redakcja/posty', 'PostController@adminIndex')
    ->name('admin-post-index')
    ->middleware('is_admin');

  Route::get('redakcja/posty/nowy', 'PostController@create')
    ->name('admin-post-create')
    ->middleware('is_admin');

  Route::post('redakcja/posty/nowy/zapisz', 'PostController@store')
    ->name('admin-post-store')
    ->middleware('is_admin');
});
