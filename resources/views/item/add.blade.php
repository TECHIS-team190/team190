<!DOCTYPE html>
<html lang="ja">

<head>
    <title>商品登録画面/チーム開発</title>
    <meta name="description" content="会員登録画面です">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body class="signup m-4">
    <div class="row m-3">
        <div class="col-md-2 mt-2">
            <h3>商品管理システム</h3>
            <p class="text-left">商品一覧</p>
        </div>
        <div class="col-md-10">
            <div class="card card-primary p-3">
                <h3>商品登録</h3>
                <!-- バリデーションエラーの表示 -->
                @include('common.errors')
                <form action="/create" method="post" class="form">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">名前</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="名前">
                        </div>

                        <div class="form-group">
                            <label for="type">種別</label>
                            <select class="form-control" id="type" name="type_id" placeholder="種別">
                                <option disabled selected value>種別を選択してください</option>
                                @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                            <!-- <input type="text" class="form-control" id="type" name="type" placeholder="種別"> -->
                        </div>

                        <div class="form-group">
                            <label for="detail">詳細</label>
                            <input type="text" class="form-control" id="detail" name="detail" placeholder="詳細説明">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>