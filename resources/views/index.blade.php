<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>商品一覧 管理画面編 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
<body>
    <header>
      <h1>商品管理システム</h1>
    </header>
  
    <sidebar>
      <h2>商品一覧</h2>
    </sidebar>

<main class="container-fluid">

  <br>
    <div class="search-area">
      <form class="d-flex" role="search" action="{{ route('product.search') }}" method="get">
      <input class="text form-control me-2" type="search" placeholder="キーワード検索" aria-label="Search"name="search">
      <button class="btn btn-outline-success" type="submit">検索</button>
      </form>
    </div>

    <div class="area1">
      <form action="####" method="post">
      <button class="btn btn-secondary btn btn-primary btn-lg " type="button w-100 btn btn-lg">登録</button>
      </form>
    </div>
  <br>

    <table class="table table-bordered border-dark">
      <thead>
        <tr class="table table-primary">
          <th>ID</th>
          <th>名前</th>
          <th>種別</th>
          <th>詳細</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($products as $product)
        <tr>
          <td>{{ $product->id }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->type }}</td>
          <td>{{ $product->detail }}</td>
        </tr>
      @endforeach
      </tbody>
    </table>

</main>

  </body>
</html>

