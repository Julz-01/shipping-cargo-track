<?php

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

Route::get('/', 'PagesController@index');

// Route::get('/track', function () {
//     return view('track');
// });

Route::get('/vessel', 'PagesController@schedule');
Route::get('/vesselupdates', 'PagesController@update');

Route::get('/welcome', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/uploads', 'HomeController@upload');
Route::post('/tracker', 'PagesController@tracker');
Route::get('/changelocale', ['as' => 'changelocale', 'uses' => 'HomeController@changeLocale']);
Route::post('/uploads', 'UsersController@import')->name('upload.submit');
Route::get('/updates', 'HomeController@updates')->name('vessel.up');
Route::get('/sched', 'HomeController@sched')->name('vessel.sched');//sched view
Route::post('/schedule', 'SchedController@scheduler')->name('sched.submit');//submit sched
Route::get('sclist', 'SchedController@sclist');//sched list


Route::get('admin/sclist/{id}', 'SchedController@scid');

Route::put('admin/sclist/{id}', 'SchedController@up');

Route::get('uplist', 'HomeController@uplist');//updates list
Route::get('admin/uplist/{id}', 'HomeController@upid');
Route::put('admin/uplist/{id}', 'HomeController@up');
