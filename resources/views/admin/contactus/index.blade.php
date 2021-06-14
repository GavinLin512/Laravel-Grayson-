@extends('layouts.app')

@section('page_title', '管理聯絡我們')

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

@section('h1_title', '管理聯絡我們')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@section('content')
    <table id="my-datatable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Content</th>
                {{-- <th>Created at</th>
                <th>Updated at</th> --}}
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->content }}</td>
                    {{-- <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td> --}}
                    <td>
                        <a href="{{ asset('/admin/contactus/edit') }}/{{ $item ->id }}" class="btn btn-primary btn-sm">編輯</a>
                        {{--  form 只是拿來觸發 Route 用的，接受 delete 方法 --}}
                        <form style="display: inline-block" action="{{ asset('/admin/contactus/delete') }}/{{ $item ->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn badge-danger btn-sm">刪除</button>
                        </form>
                        {{-- 用 a 連結會出錯， delete 不會走 --}}
                        {{-- <a href="{{ asset('/admin/contactus/delete') }}/{{ $item ->id }}" class="btn badge-danger btn-sm">刪除</a> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Content</th>
                {{-- <th>Created at</th>
                <th>Updated at</th> --}}
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
