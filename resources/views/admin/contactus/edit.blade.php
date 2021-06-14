@extends('layouts.app')

@section('page_title', '修改聯絡我們資料頁面')

@section('h1_title', '聯絡我們資料修改')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

@section('content')
<div class="container">
    {{-- 前端要把資料送到後端，必須用 Form 傳遞資料 --}}
    <form action="{{ asset('/admin/contactus/update') }}/{{ $record ->id }}" method="post">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">姓名</label>
            <input type="text" class="form-control" id="inputEmail4" name="name" required value="{{ $record ->name }}">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">E-mail</label>
            <input type="email" class="form-control" id="inputPassword4" name="email" required value="{{ $record ->email }}">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">電話</label>
          <input type="number" class="form-control" id="inputAddress" placeholder="0987-654321" name="phone" required value="{{ $record ->phone }}">
        </div>
        <div class="form-group">
            <label for="content">內容</label>
            <textarea class="form-control" id="content" rows="3" name="content" required >{{ $record ->content }}</textarea>
          </div>
          {{-- button type 必須是 submit ， --}}
        <button type="submit" class="btn btn-primary btn-sm">編輯</button>
      </form>
</div>


@endsection
