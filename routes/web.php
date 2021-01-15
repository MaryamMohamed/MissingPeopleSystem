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

Route::middleware('auth')->group(function(){
    Route::get('/profiles/{user:username}/edit', 'ProfilesController@edit');
    Route::patch('/profiles/{user:username}','ProfilesController@update');
    Route::resource('reports', 'ReportController');
    Route::get('/people-found', 'ReportController@index')->name('reports.founded.index');
    Route::get('/missing-persons', 'ReportController@indexMissed')->name('reports.missed.index');
    Route::get('/missing/create', 'ReportController@createMissed')->name('reports.missed.create');
    Route::post('/missing-persons', 'ReportController@storeMissed')->name('reports.missed.store');
    Route::get('/missing/{id}/edit', 'ReportController@editMissed')->name('reports.missed.edit');
    Route::put('/missing/{id}', 'ReportController@updateMissed')->name('reports.missed.update');
    Route::delete('/missing/{id}', 'ReportController@destroyMissed')->name('reports.missed.destroy');
    Route::get('/people-found/search','ReportController@search');
    Route::get('/missing-persons/search','ReportController@searchMissed');

});


Route::get('/profiles/{user:username}','ProfilesController@show')->name('profile');
Route::get('/people-found', 'ReportController@index')->name('reports.founded.index');
Route::get('/missing-persons', 'ReportController@indexMissed')->name('reports.missed.index');
Route::get('/people-found/search','ReportController@search');
Route::get('/missing-persons/search','ReportController@searchMissed');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
