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

//Route::get('/', function () {
//    return view('welcome');
//});

/*
getで'/'にｱｸｾｽされたら、viewsﾌｫﾙﾀﾞ中のwelcome.blade.phpを実行するようにreturnする'
*/


//一番最初のアクセス
Route::get('/','TasksController@index');

/*下記７つの省略形*/
Route::resource('tasks','TasksController');


/*CRUD*/
//Route::get('tasks/{id}','TasksController@show');
/*ﾃｰﾌﾞﾙtasksのid番号にｱｸｾｽされたら、ﾌｧｲﾙTasskControllerのshowを呼び出せ*/
//Route::post('tasks','TasksController@store');
/*ﾃｰﾌﾞﾙtasksにpostされたら、ﾌｧｲﾙTasskControllerのstoreを呼び出せ、*/
//Route::put('tasks/{id}','TasksController@update');
//Route::delete('tasks/{id}','TasksController@destroy');
/*のこり３つ*/
//Route::get('tasks','TasksController@index');
//Route::get('tasks','TasksController@create');
//Route::get('tasks','TasksController@edit');




