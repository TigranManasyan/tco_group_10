<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .pagination {
            display: flex;
            justify-content: center;
            padding:15px;
        }

        .pagination> a {
            font:20px Tahoma;
            display: inline-block;
            padding:15px;
            color:darkblue;
            text-decoration: none;

        }
        .pagination> a:hover {
            background-color: silver;
        }

        .active {
            border-bottom:3px solid orangered;
        }
        .add {
            margin-top: 20px;
        }
        .input-group-lg{
            margin: 10px 0;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="pagination"></div>
<div class="table-data">
    <table border="1" bordercolor="aqua" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody id="result"></tbody>
    </table>
</div>


    <div class="mt-2 limit">
        <form action="lim.php" method="post">
        <label for="lmt">Limit Data: </label>
        <select name="limit_data"  id="lmt">
                <?php
                $lim = 5;
                for ($i=$lim; $i<=20; $i++){?>
            <option value="<?= $i;?>"><?= $i;}?></option>

        </select>
            <input type="submit" value="go!">
        </form>
    </div>


<div class="">
    <form action="addBook.php" method="get" class="col-3 mt-5">
        <div class="input-group input-group-lg">
            <span class="input-group-text" >Author name</span>
            <input type="text" class="form-control" name="author__">
        </div>

        <div class="input-group input-group-lg">
            <span class="input-group-text" >Title</span>
            <input type="text" class="form-control" name="title__">
        </div>

        <div class="input-group input-group-lg">
            <span class="input-group-text">Info</span>
            <input type="text" class="form-control" name="info__">
        </div>

        <input type="submit" value="Add!" class="btn btn-primary">
    </form>


</div>
</div>
</body>
</html>