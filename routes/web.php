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


//postsにGETリクエストが来たらPostControllerのindexメソッドを実行する
Route::get('/', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show');
?>

//Controllerでデータを取得し、Controllerからデータを受け渡す形でViewを呼び出す
Route::get('/', 'PostController@index');

Route::post('/posts', 'PostController@store');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show');
=======

