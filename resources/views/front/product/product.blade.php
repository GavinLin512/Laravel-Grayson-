@extends('layouts.front')

@section('title', '產品介紹')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1>產品介紹</h1>
        <div class="row no-gutters">
            @foreach ($product as $key => $item)
                <div class="col-xl-3 col-lg-4 col-md-6 d-flex justify-content-center">
                    <div class="card mb-5 mx-sm-2" style="width: 18rem;">
                        <img src="{{ $item ->img }}" class="card-img-top" style="height:190px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text mb-2">
                                產品原價：<b>{{ $item->price }}</b>
                            <p class="mt-0 mb-4">產品折扣：<b>{{ $item->discount }}</b></p>
                            {{-- <p class="mt-0">產品介紹：<b>{{ $item->discript }}</b></p> --}}
                            </p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#productModal{{ $key }}">
                                查看更多
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <!-- Modal -->
        @foreach ($product as $key => $item)
            <div class="modal fade" id="productModal{{ $key }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ $item->name }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            產品介紹：{{ $item->discript }}
                        </div>
                        <div class="modal-footer">
                            折扣後售價：{{ $discountFinal[$key] }}
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
