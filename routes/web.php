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
    return view('/auth/login');
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', function () {
      return view('admin.dashboard');
    })->name('dashboard');
  });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group([
//     'middleware'=>'auth',//lock this route group to only authenticated users
//     'prefix'=>'applications',
//     'as'=>'application:',
// ],function(){
//     Route::get('/', 'ApplicationController@index')->name('index');
//     Route::get('/create', 'ApplicationController@create')->name('create');
//     Route::post('/create', 'ApplicationController@store')->name('store');
//     Route::get('/{application}', 'ApplicationController@show')->name('show');
//     Route::get('/{application}/edit', 'ApplicationController@edit')->name('edit');
//     Route::post('/{application}', 'ApplicationController@update')->name('update');
//     Route::post('/{application}/delete', 'ApplicationController@delete')->name('delete');
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/{applications}', \App\Http\Controllers\ApplicationController::class)->name('application');
// });

Route::get('/applications', 'App\Http\Controllers\ApplicationController@index')->name('index');

