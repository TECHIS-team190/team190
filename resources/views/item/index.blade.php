@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row m-3">
        <div class="col-md-2 mt-2">
            <h3>商品管理システム</h3>
            <p class="text-left">商品一覧</p>
        </div>
        <div class="col-md-10 mt-2">
            <div class="card m-2">
                <div class="card-header">
                    <!-- <h3 class="card-title">商品一覧</h3> -->
                    <!-- <form action="{{ url('items/search') }}" method="GET" class="mb-2">
                        <input type="text" name="keyword" value="{{ $keyword }}">
                        <input type="submit" value="検索">
                    </form> -->
                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            <div class="input-group-append">
                                @can('admin-higher')　
                                <a href="{{ url('/add') }}" class="btn btn-primary">商品登録</a>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-2 text-center">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>名前</th>
                                <th>種別</th>
                                <th>詳細</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->type->name }}</td>
                                <td>{{ $item->detail }}</td>
                                <!-- TODO: 編集ボタン -->
                                <td>
                                    <div class="input-group-append">
                                        <a href="/edit/{{$item->id}}" class="btn btn-success">編集</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.content -->
@endsection