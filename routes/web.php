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

  Route::get('redakcja/posty/edytuj/{post}', 'PostController@edit')
    ->name('admin-post-edit')
    ->middleware('is_admin');

  Route::post('redakcja/posty/edytuj/{post}/zapisz', 'PostController@update')
    ->name('admin-post-update')
    ->middleware('is_admin');

  Route::delete('redakcja/posty/edytuj/{post}/usun', 'PostController@destroy')
    ->name('admin-post-destroy')
    ->middleware('is_admin');

  Route::get('redakcja/posty/detail/{post}', 'PostController@show')
    ->name('admin-post-detail')
    ->middleware('is_admin');

  Route::get('redakcja/profil/{user}', 'UsersController@show')
    ->name('user-show-profile')
    ->middleware('is_admin');

  Route::put(
    'redakcja/profil/{user}/changepassword',
    'UsersController@changePassword'
  )
    ->name('user-change-password')
    ->middleware('is_admin');

  Route::put(
    'redakcja/profil/{user}/updateprofile',
    'UsersController@updateProfile'
  )
    ->name('user-update-profile')
    ->middleware('is_admin');

  Route::get('redakcja/zadania', 'TaskController@index')
    ->name('task-index')
    ->middleware('is_admin');

  Route::post('redakcja/zadania/nowe', 'TaskController@store')
    ->name('task-create')
    ->middleware('is_admin');

  Route::post('redakcja/zadania/{task}/complete', 'TaskController@complete')
    ->name('task-complete')
    ->middleware('is_admin');

  Route::get(
    'logout',
    '\App\Http\Controllers\Auth\LoginController@logout'
  )->name('user.logout');
});
