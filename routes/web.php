<?php

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

Route::get('/news', function () {
    //php變數
    $discount = 0.75;
    $total = 500 * $discount;
    $news = DB::table('news')->get();
    //同console.log，dump and die，丟出資料並停止的意思
    // dd($news);
    return view('front.news', ['name' => 'Grayson', 'price' => $total],compact('news'));
});

Route::get('/product', function () {
    return view('front.product');
});

Route::get('/front', function () {
    return view('layouts.front');
});
