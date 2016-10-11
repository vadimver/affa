<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function () {
    return view('auth.login');
});

# Now
Route::get('now', 'NowController@now');
Route::get('week', 'NowController@week');
Route::get('month', 'NowController@month');
Route::get('all', 'NowController@all');

Route::get('/now/{del}', 'NowController@destroy');

Route::get('/complied/{id}', 'NowController@complied');
Route::get('/fail/{id}', 'NowController@fail');
# New
Route::get('new', 'NewController@index');
Route::post('/store', 'NewController@store');
Route::get('/edit/{id}', 'NewController@edit');
Route::post('/update/{id}', 'NewController@update');
# Archive
Route::get('archive', 'ArchiveController@index');

Route::get('archive', 'ArchiveController@index');
Route::get('archive_week', 'ArchiveController@week');
Route::get('archive_month', 'ArchiveController@month');
Route::get('archive_all', 'ArchiveController@all');

Route::get('/archive_del/{del}', 'ArchiveController@destroy');

Auth::routes();
