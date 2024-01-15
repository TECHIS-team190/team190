<!DOCTYPE html>
<html lang="ja">
 
<head>
    <title>アカウント登録画面</title>
    <link rel="stylesheet" href="style.css">
    <meta name="description" content="会員登録画面です">
</head>
 
<body class="signup text-center">
    <main class="form-signup">
        <form action="sign-up.php" method="post">
            <h1>商品管理システム</h1>
            <p>メールアドレス<br>
            <input type="email" class="form-control" name="email" placeholder="" maxlength="254" required>
            <p>パスワード<br>
            <input type="password" class="form-control" name="password" placeholder="" minlength="4" maxlength="128" required>
            <p>パスワード（確認）<br>
            <input type="password" class="form-control" name="password" placeholder="" minlength="4" maxlength="128" required>
            <button class="w-100 btn btn-lg" type="submit">アカウント登録</button>
            <p class="mt-3 mb-2"><a href="sign-in.php">ログインする</a></p>
        </form>
    </main>
</body>
 
</html>
