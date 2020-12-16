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
Route::get('/expload','AdminController@expload')->name('exploadss');
Auth::routes();
Route::group(['prefix'=>'admin','middleware'=>['admin']],function(){
    Route::get('/loc_del/{id?}','AdminController@loc_del')->name('loc_del');
    Route::get('/','AdminController@index')->name('admin');
    // translate
    Route::post('/onlineTrans','AdminController@onlineTrans')->name('onlineTrans');
    // product
    Route::get('/product','AdminController@product')->name('product_view');
    Route::get('/product/noll','AdminController@product_noll')->name('product_noll');
    Route::get('/product/dis','AdminController@product_dis')->name('product_dis');
    Route::get('/product/dis/{id}','AdminController@product_dis')->name('product_dis');
    Route::get('/product/act/{id}','AdminController@product_active')->name('product_active');
    Route::get('/product/del/{id}','AdminController@product_del')->name('product_del');
    Route::get('/product/add','AdminController@product_add')->name('product_add');
    Route::get('/product/edit/{id}','AdminController@product_edit')->name('product_edit');
    Route::post('/product/add_info_logic','AdminController@add_info_logic')->name('add_info_logic');
    Route::post('/product/edit_info_logic','AdminController@edit_info_logic')->name('edit_info_logic');
    
Route::get('/active_zakaz/{id}','AdminController@active_zakaz')->name('active_zakaz');
Route::get('/disable_zakaz/{id}','AdminController@disable_zakaz')->name('disable_zakaz');
// end product
    Route::get('/users_orders','AdminController@users_orders')->name('users_orders');
    Route::get('/zakaz/{id?}','AdminController@zakaz')->name('zakaz');
    Route::get('/rasrochka','AdminController@rasrochka')->name('rasrochka');
    Route::get('/connect','AdminController@connect')->name('connect');
    Route::get('/connect/del/{id}','AdminController@header_menu_del')->name('header_menu_del');
    Route::get('/connect/del_sub/{id}/{hid}','AdminController@header_menu_sub_del')->name('header_menu_sub_del');
    Route::post('/connect/header_menu_add','AdminController@header_menu_add')->name('header_menu_add');
    Route::post('/connect/sub_sub_add','AdminController@sub_sub_add')->name('sub_sub_add');
    Route::post('/connect/add_product_menu','AdminController@add_product_menu')->name('add_product_menu');

    Route::get('/connect/view_sub_sub/{id}','AdminController@view_sub_sub')->name('view_sub_sub');

    Route::post('/connect/view_sub_sub','AdminController@view_sub_sub')->name('view_sub_sub');
    
    Route::post('/connect/del_sub_menu','AdminController@del_sub_menu')->name('del_sub_menu');

    Route::post('/connect/header_menu_edit','AdminController@header_menu_edit')->name('header_menu_edit');
    Route::post('/connect/header_sub_menu_edit','AdminController@header_sub_menu_edit')->name('header_sub_menu_edit');
    Route::get('/connect/view_header_menu/{id}/{sid?}','AdminController@view_header_menu')->name('view_header_menu');
    Route::get('/connect/view_header_sub_menu/{mid}/{id}','AdminController@view_header_sub_menu')->name('view_header_sub_menu');
    Route::post('/connect/header_sub_menu_add','AdminController@header_sub_menu_add')->name('header_sub_menu_add');
//    expload
    Route::get('/connect/expload','AdminController@expload')->name('expload');
    Route::get('/localiz','AdminController@localiz')->name('localiz');
    Route::post('/changeLoc','AdminController@changeLoc')->name('changeLoc');
    Route::post('/addLoc','AdminController@addLoc')->name('addLoc');
});

Route::get('/manager','ManagerController@index')->name('manager')->middleware('manager');
Route::get('/user','UserController@index')->name('user')->middleware('user');
Route::get('/home', 'HomeController@index')->name('home');

Route::post('/ru/search','Controller@search')->name('searchs');
Route::post('/uz/search','Controller@search')->name('searchs');
Route::post('/en/search','Controller@search')->name('searchs');
Route::group(['prefix'=>'{lang?}'],function(){
    
Route::get('/','Controller@load')->name('load');

Route::get('/view_product/{id}','Controller@view_product')->name('view_product');
Route::get('/coteg/{id}','Controller@coteg')->name('coteg');
Route::post('pay','Controller@pay')->name('pay');
Route::get('pay','Controller@pay')->name('pay');
Route::get('/getInfo','Controller@getInfo')->name('getInfo');
Route::post('/card','Controller@card')->name('card');
Route::post('/action_pay','Controller@action_pay')->name('action_pay');
Route::get('/card_back/{id?}','Controller@card_back')->name('card_back');
Route::get('/medic','Controller@medic')->name('medic');
Route::get('/sport','Controller@sport')->name('sport');
Route::get('/moto','Controller@moto')->name('moto');
Route::get('/lac','Controller@test')->name('test');
Route::get('/maps','Controller@map')->name('map');
Route::get('/telegram','Controller@telegram')->name('telegram');
Route::get('/view_zakaz/{id}','Controller@view_zakaz')->name('view_zakaz');

Route::post('/one_click','Controller@one_click')->name('one_click');
});