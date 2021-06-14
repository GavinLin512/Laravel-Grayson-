@extends('layouts.app')


@section('page_title', '管理員首頁')


@section('css')

@endsection

@section('nav-btn')
    <li class="nav-item active">
        <a class="nav-link" href="{{ asset('/admin/contactus') }}">聯絡我們<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ asset('/admin/product') }}">產品管理</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
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


@section('h1_title', '儀表板')



@section('content')

@endsection


@section('js')

@endsection
