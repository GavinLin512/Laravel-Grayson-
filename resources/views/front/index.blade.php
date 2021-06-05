@extends('layouts.front')

@section('title', '首頁')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    <div id="block1" class="bgimg-1 para" style="background-image: url(https://d39l2hkdp2esp1.cloudfront.net/img/photo/180587/180587_00_2x.jpg?20190816053448);">
        <div class="mask">
            <div class="center_text bg_color">SCROLL DOWN</div>
        </div>
    </div>
    <div class="text1">
        <h3 style="font-size: 20px; margin: 20px;">PARALLAX DEMO</h3>
        <p style="text-align: justify; font-size: 15px;">Parallax scrolling is a web site trend where the background
            content is moved at a different speed than the foreground content while scrolling. Nascetur per nec
            posuere
            turpis, lectus nec libero turpis nunc at, sed posuere mollis ullamcorper libero ante lectus, blandit
            pellentesque a, magna turpis est sapien duis blandit dignissim. Viverra interdum mi magna mi, morbi
            sociis.
            Condimentum dui ipsum consequat morbi, curabitur aliquam pede, nullam vitae eu placerat eget et
            vehicula.
            Varius quisque non molestie dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris
            ullamcorper,
            dapibus pulvinar, in in neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend,
            aenean
            maecenas vulputate, non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit proin magna
            cras
            vel, non sit platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.</p>
    </div>
    <div id="block2" class="bgimg-2 para" style="background-image: url('https://image.freepik.com/free-photo/rear-view-young-woman-standing-room-suffering-from-back-pain-free-space-text_275234-949.jpg');">
        <div class="mask">
            <div class="center_text">LESS HEIGHT</div>
        </div>
    </div>
    <div class="text2">
        <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
    </div>
    <div id="block3" class="bgimg-2 para" style="background-image: url('https://freerangestock.com:443/sample/128339/back-side-view-of-blonde-woman.jpg');">
        <div class="mask">
            <div class="center_text">SCROLL UP</div>
        </div>
    </div>
    <div class="text2">
        <p>Scroll up and down to really get the feeling of how Parallax Scrolling works.</p>
    </div>
    <div id="block4" class="bgimg-1 para">
        <div class="mask">
            <div class="center_text bg_color">COOL!</div>
        </div>
    </div>
@endsection
