<?php

Auth::routes();

Route::group( ['middleware' => 'auth' ], function()
{

Route::get('/', 'HomeController@index')->name('home');




Route::resource('/add-visit', 'VisitController');

Route::resource('/reports','ReportController');
Route::resource('/overview','OverviewController');

Route::resource('/setting', 'SettingController');



});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
