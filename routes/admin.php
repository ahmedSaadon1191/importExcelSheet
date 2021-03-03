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

####################### Start Routes AdminPanel #######################

############  start  Route livesearch ############
Route::get('/live_search', 'LiveSearchController@index');
Route::get('/live_search/action', 'LiveSearchController@action')->name('live_search.action');

############  End Route livesearch ############

Route::prefix('admin')->namespace('Admin')->group(function () {

    ############  start Route ExcelController ############
    Route::get('uploaded_data', 'ExcelController@index')->name('upload_form');
    Route::any('delete/data/{test}', 'ExcelController@delete')->name('data_delete');

    Route::post('upload_data', 'ExcelController@importFile')->name('uploading_form');

    Route::any('delete', 'ExcelController@alldelete')->name('alldelete');
    ############  End Route ExcelController ############

    Route::resource('insure', 'InsureController');

});

####################### End Routes AdminPanel #######################
