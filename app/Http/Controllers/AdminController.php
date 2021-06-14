<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function admin()
    {
        # code...
        return view('admin.index');
    }
}
