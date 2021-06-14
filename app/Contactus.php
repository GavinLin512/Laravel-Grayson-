<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    //有寫進 fillable 的欄位，才能被資料庫儲存/修改/刪除，保護資料庫
    //id不用寫進 fillable fillable類似白名單功能，有寫在裡面材進得去資料庫
    protected $fillable = ['name', 'email', 'phone', 'content', 'created_at','updated_at'];
    
    //類似黑名單 寫在裡面的都進不去資料庫
    // protected $guarded =[];


}
