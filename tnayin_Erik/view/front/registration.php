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
<div class="container">
    <div class="col-3">
        <form>

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username">
            </div>

            <div class="mb-3">
                <label for="birthdate" class="form-label">Birth Date</label>
                <input type="date" class="form-control" id="birthdate" >
            </div>


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" >
            </div>


            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="btns d-flex justify-content-around">
                <a href="view/front/registration.php" class="btn btn-primary">Registration</a>
            </div>

        </form>
    </div>
</div>
</body>
</html>