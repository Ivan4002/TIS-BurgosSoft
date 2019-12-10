<?php

Route::get('login/{socialNetwork}','SocialLoginController@redirectToSocialNetwork')
->name('login.social')->middleware('guest','social_network');
Route::get('login/{socialNetwork}/callback','SocialLoginController@handleSocialNetworkCallback')
->middleware('guest');
      // Authentication Routes...
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        Route::post('login', 'Auth\LoginController@login');
        Route::post('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::get('/', 'PagesController@home')->name('home');
Route::get('convocatoria/{post}', 'PostsController@show')->name('posts.show');
Route::get('/quienes-sommos','ProjectController@about')->name('about');

Route::group(['prefix'=>'admin3',
              'namespace'=>'Admin',
              'middleware'=>'auth'],
function(){
    Route::get('/','Admin3Controller@index')->name('dashboard');
    Route::get('posts', 'PostsController@index')->name('admin.posts.index');
    Route::get('posts/create', 'PostsController@create')->name('admin.posts.create');
    Route::post('posts/create', 'PostsController@store')->name('admin.posts.store');
});

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

