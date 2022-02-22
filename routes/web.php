<?php

use Illuminate\Support\Facades\Route;

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
Route::view('/welcome', 'welcome')->name('landing');

Route::view('/', 'admin.landing')->name('admin_landing');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware'=>"auth"],function(){
    Route::get('/office365', "WebController@office365")->name('office');
    Route::get('model', "WebController@model")->name('model');
    Route::get('/result', "WebController@result")->name('result');
    Route::get('/المدينه الجامعيه', "WebController@studentPlace")->name('studentPlace');
    Route::get('/tableLec/{year_id}/{department_id}/{faculty_id}',"WebController@tableLec")->name('tableLec');
    Route::get('/tableExam/{year_id}/{department_id}/{faculty_id}',"WebController@tableExam")->name('tableExam');
    Route::get('/complain',"WebController@complain")->name('complain');
    Route::get('/storeComplain',"WebController@storeComplain")->name('storeComplain');
    Route::get('/clinic',"WebController@clinic")->name('clinic');
    Route::get('/storeClinic','WebController@storeClinic')->name('storeClinic');
    Route::get('/news','WebController@news')->name('news');
    Route::get('/lastExam/{year_id}/{department_id}/{faculty_id}','WebController@lastExam')->name('lastExam');
    Route::get('/phoneDownload', "WebController@phoneDownload")->name('phoneDownload');

    



});

Route::get('/htmlPdf', 'HTMLPDFController@htmlPdf')->name('htmlPdf');


