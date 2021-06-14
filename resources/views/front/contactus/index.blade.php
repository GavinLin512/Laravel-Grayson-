@extends('layouts.front')

@section('title', '聯絡我們')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<div class="container">
    <h1>聯絡我們</h1>


    {{-- 前端要把資料送到後端，必須用 Form 傳遞資料 --}}
    <form action="{{ '/contactus/send' }}" method="post">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">姓名</label>
            <input type="text" class="form-control" id="inputEmail4" name="name" required="required">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">E-mail</label>
            <input type="email" class="form-control" id="inputPassword4" name="email" required="required">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">電話</label>
          <input type="number" class="form-control" id="inputAddress" placeholder="0987-654321" name="phone" required="required">
        </div>
        <div class="form-group">
            <label for="content">內容</label>
            <textarea class="form-control" id="content" rows="3" name="content" required="required"></textarea>
          </div>
          {{-- button type 必須是 submit ， --}}
        <button type="submit" class="btn btn-primary">送出</button>
      </form>
</div>


@endsection
