<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="./server/router/web.php" method="post">
    <input type="email" name="email" placeholder="example@mail.ru"> <br>
    <input type="password" name="password" placeholder="12345678"> <br>
    <button name="action" value="sign_in">Sign In</button>
</form>
<a href="./views/Register.php"> Create account?</a>
<?php
    session_start();
    if(isset($_SESSION['msg'])) {
        echo '<p>' . $_SESSION['msg'] . '</p>';
    }
    unset($_SESSION['msg']);
?>
</body>
</html>