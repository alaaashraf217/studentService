<?php

use Illuminate\Support\Facades\Route;

/* Dashboard Routes */
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['admin']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::group(['namespace' => 'Admin', 'prefix' => 'dashboard', 'as' => 'admin.', 'middleware' => ['admin']], function () {
    Route::name('dashboard')->get('/', 'HomeController@index');
    // Sections
    Route::resource('services', 'ServicesController', ['except' => 'show']);
    // Articles
    Route::resource('posts', 'PostsController');
    Route::resource('tables', 'TablesController');
    Route::resource('exams', 'ExamsController');
    Route::resource('lastexams', 'LastexamsController');


    Route::post('posts/{post}/photos', 'ImagesController@store')->name('store_photo');
    Route::delete('photos/{photo}', 'ImagesController@destroy')->name('destroy_photo');
    // Contacts
    Route::resource('contacts', 'ContactsController', ['only' => ['index', 'show', 'destroy']]);
    /* ====== About =======*/
    Route::name('abouts.edit')->get('abouts/edit', 'AboutsController@edit');
    Route::name('abouts.update')->patch('abouts/edit', 'AboutsController@update');
    /* ====== Settings =======*/
    Route::name('settings.edit')->get('settings/edit', 'SettingsController@edit');
    Route::name('settings.update')->patch('settings/edit', 'SettingsController@update');
});

Route::group(['namespace' => 'Admin'], function () {
    Route::get('dashboard_login', 'AuthController@loginForm')->name('login_form');
    Route::post('dashboard_logged', 'AuthController@login')->name('admin_logged');
    Route::post('dashboard_logout', 'AuthController@logout')->name('admin_logout');
});

Route::group(['namespace' => 'Admin','prefix' => 'dashboard'], function () {
    Route::get('tables.create','TablesController@create') ->name('tables.create');
    Route::post('tables.store','TablesController@store') ->name('tables.store');
    Route::post('tables.index','TablesController@index') ->name('tables.index');
    Route::get('tables.show','TablesController@show') ->name('tables.show');
    Route::get('tables.edit','TablesController@edit') ->name('tables.edit');
    Route::get('tables.destroy','TablesController@delete') ->name ('tables.destroy');

});

Route::group(['namespace' => 'Admin','prefix' => 'dashboard'], function () {
    Route::get('exams.create','ExamsController@create') ->name('exams.create');
    Route::post('exams.store','ExamsController@store') ->name('exams.store');
    Route::post('exams.index','ExamsController@index') ->name('exams.index');
    Route::get('exams.show','ExamsController@show') ->name('exams.show');
    Route::get('exams.edit','ExamsController@edit') ->name('exams.edit');
    Route::get('exams.destroy','ExamsController@delete') ->name ('exams.destroy');

});

Route::group(['namespace' => 'Admin','prefix' => 'dashboard'], function () {
    Route::get('lastexams.create','LastexamsController@create') ->name('lastexams.create');
    Route::post('lastexams.store','LastexamsController@store') ->name('lastexams.store');
    Route::post('lastexams.index','LastexamsController@index') ->name('lastexams.index');
    Route::get('exams.show','ExamsController@show') ->name('exams.show');
    Route::get('lastexams.edit','LastexamsController@edit') ->name('lastexams.edit');
    Route::get('lastexams.destroy','LastexamsController@delete') ->name ('lastexams.destroy');

});
