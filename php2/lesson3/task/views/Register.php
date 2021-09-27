<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
</head>
<body>
    <h2>Sign up</h2>
    <form action="./../server/router/web.php" method="post">
        <input type="text" name="fullname" placeholder="John Smith"> <br>
        <input type="number" name="age" placeholder="20" min="15" max="80"> <br>
        <input type="email" name="email" placeholder="example@mail.ru"> <br>
        <input type="password" name="password" placeholder="12345678"> <br>
        <button name="action" value="sign_up">Sign Up</button>
    </form>
</body>
</html>