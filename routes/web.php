<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\candidateListController;

use App\Http\Controllers\SearchController;

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


Route::get('/admin/candidateinfo', 'App\Http\Controllers\AdminController@cinfo')->name('candidateinfo');
Route::get('/admin/candidateinfo', 'App\Http\Controllers\candidateListController@appcandidate')->name('appcandidate');

Route::get('/admin', 'App\Http\Controllers\candidateListController@count')->name('count');

Route::get('/admin/assignposition', 'App\Http\Controllers\candidateListController@assignpos')->name('assignpos');

Route::get('/admin/electionresult', 'App\Http\Controllers\candidateListController@elecres')->name('elecres');

Route::get('/ongoresult', 'App\Http\Controllers\candidateListController@ongoresult')->name('ongoresult');

Route::get('/voting','App\Http\Controllers\candidateListController@votingpage')->name('votingpage');

Route::get('/applications', 'App\Http\Controllers\ApplicationController@index')->name('index');

Route::resource('candidate','App\Http\Controllers\candidateListController');

Route::get('/admin/approvecandidate', 'App\Http\Controllers\candidateListController@index')->name('index');

Route::get('/approved/{id}', 'App\Http\Controllers\candidateListController@approved')->name('approved');

Route::get('/rejected/{id}', 'App\Http\Controllers\candidateListController@rejected')->name('rejected');

Route::post('/castVote',[candidateListController::class, 'castVote'])->name('castVote');

Route::get('/search','App\Http\Controllers\SearchController@search')->name('search');

Route::get('/imagepreview', [candidateListController::class, 'imagepreview'])->name('imagepreview');
