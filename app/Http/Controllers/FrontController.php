<?php

namespace App\Http\Controllers;

use App\Contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class FrontController extends Controller
{
    //
    public function news()
    {
        //php變數
        $discount = 0.75;
        $total = 500 * $discount;
        $news = DB::table('news')->get();
        //同console.log，dump and die，丟出資料並停止的意思
        // dd($news);
        return view('front.news.news', ['name' => 'Graysn', 'price' => $total], compact('news'));
    }

    public function newsDetail($id)
    {
        // dd($id);
        $record = DB::table('news')->find($id);
        // dd($record);
        return view('front.news.detail', compact('record'));
    }

    public function layout()
    {
        return view('layouts.front');
    }

    public function product()
    {
        $product = DB::table('products')->get();
        $discount = DB::table('products')->selectRaw('price * discount as priceDiscount')->get();
        // $discount 是物件（ gettype() ），直接用索引值會找不到 $key
        // 用 array_push 新增 value 到空陣列中，就可以透過foreach內索引值 key 的方式呼叫，因為key值相同
        $discountFinal = [];
        foreach ($discount as $key => $value) {
            # code...
            array_push($discountFinal, round($value->priceDiscount));
        }
        // dd($discount2);
        // $arrayDiscount = (array) $discount;

        // $discount2 = [];
        // array_merge($discount,$discount2);
        // $discountFinal = round($discount->priceDiscount);
        // $discountFinal = $discount ->priceDiscount;
        // dd($arrayDiscount);
        return view('front.product.product', compact('product', 'discount', 'discountFinal'));
    }

    public function productDetail($id)
    {
        $tabs = DB::table('products')->find($id);
        $discount = DB::table('products')->selectRaw('price * discount as priceDiscount')->find($id);
        $discountFinal = round($discount->priceDiscount);
        // dd($discountFinal);
        return view('front.product.detail', compact('tabs', "discount", 'discountFinal'));

        // $total = DB::table('products')->select('price')->get();
        // dd($total);
        // return ($total);
    }

    // public function productDetail($discount, $price){

    // }


    public function contactusSend(Request $request)
    {
        // dd($request ->all());

        Contactus::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'content' => $request->content

        ]);
        //messenge session
        return redirect('/contactus')->with('messenge', '成功聯絡我們！');

        // Contactus::insert([
        //     'name' => '123',
        //     'email' => '123@ijdied.com',
        //     'phone' => '091233456',
        //     'content' => 'qdweqdewqdfwfeqfewfwef'
        // ]);
    }

    public function change()
    {
        // //抓到要修改的資料
        // $old_record = Contactus::find(1);
        // // dd($old_record);
        // //修改資料欄位
        // $old_record ->name = 'grayson';
        // $old_record ->phone = '0931242344';
        // //改完後存檔
        // $old_record ->save();

        // $old_record = Contactus::find(1) ->update([
        //     'name' => 'eric'
        // ]);

        //where('欲搜尋的欄位名稱', '條件' )，找出來的資料都是陣列
        //first() 取第一筆資料
        //get() 取全部資料
        //好處是可以選多個資料
        $old_record = Contactus::where('name', 123)->get();
        foreach ($old_record as $key => $value) {
            # code...
            $value->name = 'grayson2';
            $value->phone = '099081323';
            $value->save();
        }
        // dd($old_record);
    }

    public function contactus()
    {
        return view('front.contactus.index');
    }
}
