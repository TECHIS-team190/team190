<!DOCTYPE html>
<html lang="ja">
 
<head>
    <title>ログイン画面</title>
    <link rel="stylesheet" href="style.css">
    <meta name="description" content="ログイン画面です">
</head>
 
<body class="signup text-center">
    <main class="form-signup">
        <form action="sign-in.php" method="post">
            <h1>商品管理システム</h1>
 
            <?php if (isset($view_try_login_result) && $view_try_login_result === false) : ?>
                <div class="alert alert-warning text-sm" role="alert">
                    ログインに失敗しました。メールアドレス、パスワードが正しいかご確認ください。
                </div>
            <?php endif; ?>
 
            <p>メールアドレス<br>
            <input type="email" class="form-control" name="email" placeholder="" required autofocus>
            <p>パスワード<br>
            <input type="password" class="form-control" name="password" placeholder="" required>
            <button class="w-100 btn btn-lg" type="submit">ログイン</button>
            <p class="mt-3 mb-2"><a href="sign-up.php">会員登録する</a></p>
        </form>
    </main>
</body>
 
</html>