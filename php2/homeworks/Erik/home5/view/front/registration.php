<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require '../links/bootstrap.php';
    ?>
    <link rel="stylesheet" href="../css/style.css">
    <title>Registration</title>
</head>
<body>
<div class="container mt-5">
    <div class="col-3">
        <form action="../../model/registration/regist_valid.php" method="post">

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username__reg">
            </div>

            <div class="mb-3">
                <label for="birthdate" class="form-label">Birth Date</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate__reg" >
            </div>


            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email__reg" >
            </div>


            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password__reg">
            </div>

            <div class="btn d-flex justify-content-around">
                <input type="submit" class="btn btn-primary" value="Regist">
            </div>

        </form>
    </div>
</div>
</body>
</html>