@extends('layouts.app')

@section('page_title', '新增產品資料頁面')

@section('nav-btn')
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/admin/product') }}">回產品管理</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </li>
@endsection

@section('h1_title', '新增產品資料')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

@section('content')
<div class="my-container">
    {{-- 前端要把資料送到後端，必須用 Form 傳遞資料 --}}
    <form action="{{ asset('/admin/product/new/send') }}" method="post">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">產品名稱</label>
            <input type="text" class="form-control" id="inputEmail4" name="name" required="required">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">產品圖片</label>
            <input type="url" class="form-control" id="inputEmail4" name="img" required="required">
          </div>
          {{-- <div class="form-group">
            <label for="exampleFormControlFile1">產品圖片</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img" required="required">
          </div> --}}
          <div class="form-group col-md-6">
            <label for="inputPassword4">產品價格</label>
            <input type="number" class="form-control" id="inputPassword4" name="price" required="required">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">產品折扣</label>
          <input type="number" class="form-control" id="inputAddress" name="discount" required="required" min="0.1" max="1" step="0.05" title="請填入介於0.1~1之間的折扣數字">
        </div>
        <div class="form-group">
            <label for="content">產品描述</label>
            <textarea class="form-control" id="content" rows="3" name="discript" required="required" ></textarea>
          </div>
          {{-- button type 必須是 submit ， --}}
        <button type="submit" class="btn btn-primary btn-sm">新增該筆資料</button>
      </form>
</div>
@endsection

@section('js')

@endsection
