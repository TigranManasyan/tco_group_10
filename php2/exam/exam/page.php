<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Document</title>
    <script src="main.js" ></script>
</head>
<body>
    <h2>PAGE</h2>
        <div class="post">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col"><?= require "posts.php";
                        $post = new Posts();
                        echo "<pre>";
                        echo json_encode($post->get()) . "<br>";
                        ?></th>


                </tr>

                </thead>

            </table>

        </div>

    <form action="Crud.php" method="post">
        <input name="id" type="text">
        <input name="text" type="text">
        <button type="submit" name="insert" >insert</button>
        <button type="submit" name="delete">delete</button>
        <button type="submit" name="update" >update</button>
    </form>
</body>
</html>