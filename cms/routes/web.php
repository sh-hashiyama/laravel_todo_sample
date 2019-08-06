<?php

use App\Task;
use Illuminate\Http\Request;

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

// 表示処理
Route::get('/', 'TasksController@index');

// 登録処理
Route::post('/tasks', 'TasksController@store');

// 削除処理
Route::post('/task/{task}', 'TasksController@destroy');

//更新画面
Route::post('/tasksedit/{task}', 'TasksController@edit');

//更新処理
Route::post('/tasks/update', 'TasksController@update');

//apiページ表示処理
Route::get('/api_ajax', 'TasksController@api_ajax');

Auth::routes();

Route::get('/home', 'TasksController@index')->name('home');
