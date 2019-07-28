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

// 表示処理の作成
Route::get('/', function () {
    return view('task');
});

Route::post('/tasks', function (Request $request) {
    //
});

// 削除処理の作成
Route::post('/task/{task}', function (Task $task) {
    //
});
