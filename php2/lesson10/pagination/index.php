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
    </style>
</head>
<body>
    <div class="pagination"></div>
<div class="table-data">
    <table border="1" bordercolor="aqua" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody id="result"></tbody>
    </table>
</div>
</body>
</html>