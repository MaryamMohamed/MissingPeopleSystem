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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::middleware('auth')->group(function(){
    Route::get('/profiles/{user:username}/edit', 'ProfilesController@edit');
    Route::patch('/profiles/{user:username}','ProfilesController@update');
    Route::post('/', 'ReportFoundedController@store')->name('welcome');
    Route::get('/report-founded', 'ReportFoundedController@showFounded')->name('report.founded');
    Route::get('/report-missed', 'ReportFoundedController@showMissed')->name('report.missed');
    Route::get('/report-delete/{id}','ReportFoundedController@destroy')->name('report.delete');
    Route::get('/report/{id}/edit','ReportFoundedController@edit')->name('report.edit');
    Route::patch('/report/{id}','ReportFoundedController@update');
});


Route::get('/profiles/{user:username}','ProfilesController@show')->name('profile');
Route::get('/report/{id}','ReportFoundedController@getAReport')->name('report');

Route::get('/','ReportFoundedController@getWelcome')->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
