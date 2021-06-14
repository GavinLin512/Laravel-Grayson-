@extends('layouts.front')

@section('title', '產品介紹-內頁')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<div class="container">
    <h1 class="mt-5 mb-4">最新消息-內頁</h1>
    <h2 class="title">產品名稱：{{ $tabs ->name }}</h2>
    <p>產品原價：<b>{{ $tabs ->price }}</b></p>
    <p>產品售價：<b>{{ $discountFinal }}</b></p>
    <p>產品介紹：<b>{{ $tabs ->discript }}</b></p>
</div>
@endsection



