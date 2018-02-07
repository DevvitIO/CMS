<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('pub.index');
})->name('pub.index');

Route::get('recent', function () {
    return view('pub.recent');
})->name('pub.recent');

Route::get('trending', function () {
    return view('pub.trending');
})->name('pub.trending');

Route::get('browse', function () {
    return view('pub.browse');
})->name('pub.browse');

Route::get('signup', function () {
    return view('pub.signup');
})->name('pub.signup');

Route::get('signin', function () {
    return view('pub.signin');
})->name('pub.signin');

Route::get('more', function () {
    return view('pub.more');
})->name('pub.more');


Route::group(['prefix' => 'admin'], function(){

    Route::get('dashboard', function() {
        return view('admin.index');
    })->name('admin.index');

	Route::get('categories', function() {
        return view('admin.categories');
    })->name('admin.categories');



});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::get('/', 'AdminController@index');
    Route::get('/login', 'AdminLoginController@showLoginForm');
    Route::post('/login', 'AdminLoginController@login');
    Route::get('/logout', 'AdminLoginController@logout');

	Route::get('users', 'UserController@index');

	
	Route::get('create', 'PostController@createIndex');
	Route::get('posts/{id}/edit', 'PostController@editIndex');

	Route::get('posts', 'PostController@index');
	Route::post('post', 'PostController@post');
	Route::delete('post/{id}', 'PostController@delete');	
	Route::patch('post/{id}', 'PostController@update');
	



	

});



