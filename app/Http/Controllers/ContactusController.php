<?php

namespace App\Http\Controllers;

use App\Contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    //
    public function index()
    {
        $list = Contactus::orderBy('id')->get();
        //用sortBy會比較慢
        // $list = Contactus::get()->sortBy('id');
        return view('admin.contactus.index', compact('list'));
    }

    public function edit($id)
    {
        $record = Contactus::find($id);
        return view('admin.contactus.edit', compact('record'));
    }



    public function update(Request $request , $id)
    {
        $old_record = Contactus::find($id);
        // dd($old_record);
        $old_record ->name = $request ->name;
        $old_record ->email = $request ->email;
        $old_record ->phone = $request ->phone;
        $old_record ->content = $request ->content;
        $old_record ->save();

        return redirect('/admin/contactus')->with('message', '成功修改聯絡我們！');
    }

    // public function editSend(Request $request)
    // {
    //     Contactus::where('id', $request->id)
    //     ->update([
    //         'name' => $request ->name,
    //         'email' => $request ->email,
    //         'phone' => $request ->phone,
    //         'content' => $request ->content
    //     ]);


    public function delete($id)
    {
        # code...
        $old_record = Contactus::find($id);
        $old_record ->delete();

        return redirect('/admin/contactus')->with('message', '成功刪除該筆聯絡我們資料！');

    }







    //     return redirect('/admin/contactus')->with('messenge', '成功修改資料！');
    // }
}
