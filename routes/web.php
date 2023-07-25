<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () { return view('welcome'); }); // Home
Route::get('/symlink', function () { return view('symlink'); }); // Generate symbolic link

// Administration
Route::middleware('auth')->group(function () {
    Route::get('/admin', 'App\Http\Controllers\Web\AdminController@index')->name('admin.home');

    Route::get('/account', 'App\Http\Controllers\Web\AdminController@account')->name('admin.account');
    Route::post('/account', 'App\Http\Controllers\Web\AdminController@updateAccount');

    Route::get('/message', 'App\Http\Controllers\Web\AdminController@message')->name('admin.message');
    Route::post('/message', 'App\Http\Controllers\Web\AdminController@sendMessage');

    Route::get('/project', 'App\Http\Controllers\Web\AdminController@project')->name('admin.project');
    Route::post('/project', 'App\Http\Controllers\Web\AdminController@addProject');

    Route::get('/team', 'App\Http\Controllers\Web\AdminController@team')->name('admin.team');
    Route::post('/team', 'App\Http\Controllers\Web\AdminController@addMember');
});

require __DIR__.'/auth.php';
