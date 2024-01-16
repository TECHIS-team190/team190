<!DOCTYPE html>
<html lang="ja">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>ホーム画面</title>
    <meta name="description" content="ホーム画面です">
</head>
 
<body class="home">
    <div class="container">
        <div class="side">
            <div class="side-header">
                <h1>商品管理システム</h1>
            </div>
            <div class="side-inner">
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="home.php" class="nav-link">商品一覧</a></li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="text-end">
                <form action="{{ route('logout') }}" method="post">
                @csrf
                <input type="submit" value="ログアウト">
                </form>
            </div>
            <div class="main-header">
                <h2>ホーム画面へようこそ</h2>
            </div>
        </div>
    </div>

</body>
 
</html>