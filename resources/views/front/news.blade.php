@extends('layouts.front')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
<div>test</div>
<h1>最新消息</h1>
{{ $name }}
價格：{{ $price }}
{{-- @foreach ($news as $item)
{{ $item ->title }}
@endforeach --}}
<div class="row">
    @foreach ($news as $item)
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/600x400.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $item ->title }}</h5>
                <p class="card-text">
                    {{ $item ->content }}
                </p>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection
p
