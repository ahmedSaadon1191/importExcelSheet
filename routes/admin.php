<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

####################### Start Routes AdminPanel #######################

############  start  Route livesearch ############
Route::get('/live_search', 'LiveSearchController@index');
Route::get('/live_search/action', 'LiveSearchController@action')->name('live_search.action');

############  End Route livesearch ############



Route::prefix('admin')->namespace('Admin')->group(function () {

    ############  start Route ExcelController ############
    Route::get('uploaded_data', 'ExcelController@index')->name('upload_form');
    Route::post('upload_data', 'ExcelController@importFile')->name('uploading_form');
    Route::get('export_excel', 'ExcelController@exportexcel');
    Route::get('export_csv', 'ExcelController@exportcsv');
    ############  End Route ExcelController ############

});


Route::get('test/upload_form', 'Test\UploadController@index');
Route::post('test/uploading', 'Test\UploadController@import')->name('uploading_test');
####################### End Routes AdminPanel #######################
