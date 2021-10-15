<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require 'links/links.php'?>
    <script src="js/main.js"></script>
    <title>Login</title>
</head>
<body>
<div class="container col-2">
<form action="./../controller/login.php" method="post">
    <div class="mb-3">
        <label for="login" class="form-label">Login</label>
        <input type="text" class="form-control" id="login" name="login">

    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="btns d-flex justify-content-between">
    <button type="submit" class="btn btn-primary">Submit</button>
        <a href="reg.php" class="btn btn-primary">Registration</a>
    </div>
</form>
</div>

</body>
</html>