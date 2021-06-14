<?php

use Facade\Ignition\Exceptions\ViewException;
use Illuminate\Support\Facades\DB;
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

//Route::要做什麼('網址路徑名稱', '寫 Function 做什麼事'）
Route::get('/', function () {
    return view('welcome');
});

//Route::要做什麼('網址/parallax', '呼叫view內front資料夾的parallax'）
//網址路徑'/'可加可不加
Route::get('/index', function () {
    //php陣列：['key' => 'value']
    return view('front.index', ['name' => 'Grayson']);
});

Route::get('/news', 'FrontController@news');
Route::get('/news/{id}', 'FrontController@newsDetail');
Route::get('/product', 'FrontController@product');
Route::get('/product/{id}', 'FrontController@productDetail');
Route::get('/front', 'FrontController@layout');
Route::get('/contactus', 'FrontController@contactus');
Route::post('/contactus/send', 'FrontController@contactusSend');
Route::get('/change', 'FrontController@change');


Route::get('/admin', 'AdminController@admin');


Route::get('/admin/contactus', 'ContactusController@index');
Route::get('/admin/contactus/edit/{id}', 'ContactusController@edit');
Route::post('/admin/contactus/update/{id}', 'ContactusController@update');
//get也可以直接刪除
Route::delete('/admin/contactus/delete/{id}', 'ContactusController@delete');


Route::get('/admin/product', 'ProductController@index');
Route::get('/admin/product/edit/{id}', 'ProductController@edit');
Route::post('/admin/product/update/{id}', 'ProductController@update');
Route::delete('/admin/product/delete/{id}', 'ProductController@delete');
Route::get('/admin/product/new', 'ProductController@new');
Route::post('/admin/product/new/send', 'ProductController@newSend');














