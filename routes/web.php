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


//create for redirect to admin panel using middleware (we have changes in AdminMiddleware,kernel,LoginController files //here auth and admin indicate to folder)
Route::group(['middleware'  => ['auth','admin']], function() {
	// you can use "/admin" instead of "/dashboard"
	Route::get('/dashboard', function () {
    	return view('admin.dashboard');
	});
	// below is used for adding the users.
	Route::get('/role-register','Admin\DashboardController@registered');
	//below route for edit the users detail and update.
	Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
	//update button route
	Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
	//delete route
	Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');

});


Route::get('/profiles/{user:username}','ProfilesController@show')->name('profile');
Route::get('/people-found', 'ReportController@index')->name('reports.founded.index');
Route::get('/missing-persons', 'ReportController@indexMissed')->name('reports.missed.index');
Route::get('/people-found/search','ReportController@search');
Route::get('/missing-persons/search','ReportController@searchMissed');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
