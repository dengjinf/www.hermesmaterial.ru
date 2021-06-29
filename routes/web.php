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

//Route::get('/', function () {
//    return view('welcome');
//});

//前台路由
Route::group(['namespace' => 'Home'],function (){

    //首页
    Route::get('/','IndexController@index');
    Route::get('oneshop','OneShopController@index');
    Route::get('customize','CustomizeController@index');
    Route::get('project','ProjectController@index');
    Route::get('furniture','FurnitureController@index');
    Route::get('faq','FaqController@index');
    Route::get('contact','ContactController@index');
});
