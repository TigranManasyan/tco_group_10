<?php
    require_once './../controllers/BookController.php';
    $action = '';



    if(isset($_GET['action'])) {
        $action = $_GET['action'];
        if($action === 'all-books') {
            $books = new BookController();
            echo $books->index();
        } else if($action === 'filter') {
            $books = new BookController();
            echo $books->filter($_GET['search_value']);
        } else if($action === 'delete'){
            $books = new BookController();
            echo $books->destroy($_GET['row_id']);
        }else if($action === 'update'){
            $books = new BookController();
            echo $books->updateBook($_GET['row_id'], $_GET['name'], $_GET['author']);
        }
    } else if(isset($_POST['action'])) {
        $books = new BookController();
        echo $books->store($_POST['name'],$_POST['author']);
    }