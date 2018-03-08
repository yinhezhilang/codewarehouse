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

Route::get('/', function () {
    return view('welcome');
});

/**
 * 目录创建
 */
Route::get('/category/create', 'Code\CategoryController@create')
    ->name('category.create');
Route::post('/category/create', 'Code\CategoryController@save');

/**
 * 代码创建
 */
Route::get('/code/create', 'Code\CodeController@create')
    ->name('code.create');
Route::post('/code/create', 'Code\CodeController@save');

/**
 * 代码修改
 */
Route::get('/code/modify/{code_id}', 'Code\CodeController@modify')
    ->name('code.modify');
Route::post('/code/modify/{code_id}', 'Code\CodeController@update');

/**
 * 代码仓库首页、展示页
 */
Route::get('/code/index', 'Code\CodeController@index')
    ->name('code.index');
Route::get('/code/show/c{category_id}/{code_id?}', 'Code\CodeController@show')
    ->where(['category_id' => '[0-9]+', 'code_id' => '[0-9]+'])
    ->name('code.show');

/**
 * 操作结果展示
 */
Route::get('/code/success/{msg_id}', 'Code\ResultController@success')
    ->name('code.success');
Route::get('/code/error/{msg_id}', 'Code\ResultController@error')
    ->name('code.error');

