<?php
// セッションスタート
session_start();

// 0.外部ファイル読み込み
include(dirname(__FILE__) . "/../main/functions.php");

// ログイン状態のチェック
checkSessionId();

// ヘッダー呼び出し
$menu_user = menu_user();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ユーザー登録</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">ユーザー登録</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?= $menu_user ?>
                </ul>
            </div>
        </nav>
    </header>

    <form method="post" action="user_insert.php">
        <div class="form-group">
            <label for="name">UserName</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="lid">LoginId</label>
            <input type="text" class="form-control" id="lid" name="lid">
        </div>
        <div class="form-group">
            <label for="lpw">LoginPassWord</label>
            <input type="text" class="form-control" id="lpw" name="lpw">
        </div>
        <div class="form-group">
            <label for="kanri_flg">UserAdmin</label>
            <select required class="form-control" id="kanri_flg" name="kanri_flg">
                <option value="" hidden>フラグを選択</option>
                <option value="0">0：一般</option>
                <option value="1">1：管理者</option>
            </select>
        </div>
        <div class="form-group">
            <label for="life_flg">Active</label>
            <select required class="form-control" id="life_flg" name="life_flg">
                <option value="" hidden>フラグを選択</option>
                <option value="0">0：アクティブ</option>
                <option value="1">1：非アクティブ</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

</body>

</html>