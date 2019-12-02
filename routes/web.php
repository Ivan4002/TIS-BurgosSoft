<?php

Route::get('login/{socialNetwork}','SocialLoginController@redirectToSocialNetwork')
->name('login.social')->middleware('guest','social_network');
Route::get('login/{socialNetwork}/callback','SocialLoginController@handleSocialNetworkCallback')
->middleware('guest');
Auth::routes();


Route::get('/', 'ProjectController@home')->name('home');
Route::get('/quienes-sommos','ProjectController@about')->name('about');

Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
Route::get('/portafolio/crear','ProjectController@create')->name('projects.create');
Route::get('/portafolio/{project}/editar','ProjectController@edit')->name('projects.edit');
Route::put('/portafolio/{project}','ProjectController@update')->name('projects.update');
Route::post('/portafolio', 'ProjectController@store')->name('projects.store');
Route::get('/portafolio/{project}','ProjectController@show')->name('projects.show');
Route::delete('/portafolio/{project}' , 'ProjectController@destroy')->name('projects.destroy');


Route::get('/admin', 'UsersController@index')->name('admin.users.index');
Route::post('/impersonations', 'ImpersonationsController@store')->name('impersonations.store');
Route::delete('/impersonations', 'ImpersonationsController@destroy')->name('impersonations.destroy');

Route::get('/contacto','ProjectController@contact')->name('contact');
Route::post('contact','MessageController@store')->name('messages.store');

