@extends('layouts.app')

@section('page_title', '產品管理頁面')

@section('nav-btn')
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

@section('h1_title', '管理產品資料')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

@section('content')
    <table id="my-datatable" class="display" style="width:100%">
        <thead>
            <a href="{{ asset('/admin/product/new') }}" class="btn btn-primary btn-lg">新增產品資料</a>
            <tr>
                <th>產品名稱</th>
                <th>產品圖片</th>
                <th>產品價格</th>
                <th>產品折扣</th>
                <th>產品描述</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product_data as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td><img style="width: 300px; height:200px " src="{{ $item->img }}" alt=""></td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->discount }}</td>
                    <td>{{ $item->discript }}</td>
                    <td>
                        <a href="{{ asset('/admin/product/edit') }}/{{ $item ->id }}" class="btn btn-primary btn-sm">編輯</a>
                        {{-- form 只是拿來觸發 Route 用的，接受 delete 方法 --}}
                        <form style="display: inline-block" action="{{ asset('/admin/product/delete') }}/{{ $item ->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn badge-danger btn-sm">刪除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>產品名稱</th>
                <th>產品圖片</th>
                <th>產品價格</th>
                <th>產品折扣</th>
                <th>產品描述</th>
            </tr>
        </tfoot>
    </table>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#my-datatable').DataTable({
                "ordering": false,
            });
        });

    </script>
@endsection
