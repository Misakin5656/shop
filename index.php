<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>トップ画面</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="login_output.php" method="post">
        ログイン名<input type="text" name="login"><br>
        パスワード<input type="password" name="password"><br>
        <input type="submit" value="ログイン">
    </form>
    <?php require 'menu.php'; ?>
</body>

</html>