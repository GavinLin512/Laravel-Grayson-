@extends('layouts.front')

@section('title', '消息公告')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')

<h1>最新消息-內頁</h1>

<div class="container">
    <h2 class="title">{{ $record->title }}</h2>
    <p>{{ $record->content }}</p>
</div>


@endsection

