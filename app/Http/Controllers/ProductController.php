<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        # code...
        $product_data = Product::orderBy('id')->get();
        return view('admin.product.index', compact('product_data'));
    }

    public function edit($id)
    {
        # code...
        $record = Product::find($id);
        return view('admin.product.edit', compact('record'));

    }

    public function update(Request $request , $id)
    {
        $old_record = Product::find($id);
        // dd($old_record);
        $old_record ->name = $request ->name;
        $old_record ->img = $request ->img;
        $old_record ->price = $request ->price;
        $old_record ->discount = $request ->discount;
        $old_record ->discript = $request ->discript;
        $old_record ->save();

        return redirect('/admin/product')->with('message', '成功修改產品資料！');
    }

    public function delete($id)
    {
        # code...
        $old_record = Product::find($id);
        $old_record ->delete();

        return redirect('admin/product')->with('message', '成功刪除該筆產品資料！');
    }

    public function new()
    {
        # code...
        return view('admin.product.new');
    }

    public function newSend(Request $request)
    {
        # code...
        Product::create([
            'name' => $request ->name,
            'img' => $request ->img,
            'price' => $request ->price,
            'discount' => $request ->discount,
            'discript' => $request ->discript
        ]);

        return redirect('/admin/product')->with('message', '成功新增一筆產品資料！');
    }
}
