<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','klinikController@index');
//Route::resource('index','klinikController');
Route::get('tambah','klinikController@create');
Route::post('insert','klinikController@store');
Route::post('ubahdata/{h}','klinikController@update');
Route::get('update/{h}','klinikController@edit');

Route::get('hapus/{a}','klinikController@destroy');

?>
