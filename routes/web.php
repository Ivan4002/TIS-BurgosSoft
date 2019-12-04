<?php



Route::get('/', function () {
    return view('auth.login');
});
Route::get('login/{socialNetwork}','SocialLoginController@redirectToSocialNetwork')
->name('login.social')->middleware('guest','social_network');
Route::get('login/{socialNetwork}/callback','SocialLoginController@handleSocialNetworkCallback')
->middleware('guest');
 // Authentication Routes...

 $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
 $this->post('login', 'Auth\LoginController@login');
 $this->post('logout', 'Auth\LoginController@logout')->name('logout');

 // Registration Routes...
 //$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
 //$this->post('register', 'Auth\RegisterController@register');

 // Password Reset Routes...
 $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
 $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
 $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
 $this->post('password/reset', 'Auth\ResetPasswordController@reset');


// Route::get('/', 'ProjectController@home')->name('home');
// Route::get('/quienes-sommos','ProjectController@about')->name('about');

// Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
// // Route::get('/portafolio/crear','ProjectController@create')->name('projects.create');
// // Route::get('/portafolio/{project}/editar','ProjectController@edit')->name('projects.edit');
// // Route::put('/portafolio/{project}','ProjectController@update')->name('projects.update');
// // Route::post('/portafolio', 'ProjectController@store')->name('projects.store');
// // Route::get('/portafolio/{project}','ProjectController@show')->name('projects.show');
// // Route::delete('/portafolio/{project}' , 'ProjectController@destroy')->name('projects.destroy');


// Route::get('/admin', 'UsersController@index')->name('admin.users.index');
// Route::post('/impersonations', 'ImpersonationsController@store')->name('impersonations.store');
// Route::delete('/impersonations', 'ImpersonationsController@destroy')->name('impersonations.destroy');

// Route::get('/contacto','ProjectController@contact')->name('contact');
// Route::post('contact','MessageController@store')->name('messages.store');


Route::get('admin/','AdminController@index');

Route::get('posts','ConcursosController@home');

route::group(['prefix'=>'admin',
            'namespace'=>'Admin' ,
            'middleware' =>'auth'],
            function(){
    Route::get('posts','PostsController@index')->name('admin.posts.index');
    Route::get('posts/create','PostsController@create')->name('admin.posts.create');
    Route::post('posts','PostsController@store')->name('admin.posts.store');
    Route::get('/','AdminController@index')->name('dashboard');

});

