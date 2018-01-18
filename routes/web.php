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

Route::group(['prefix' => 'admin'], function(){

    Route::get('dashboard', function() {
        return view('admin.index');
    })->name('admin.index');

});
