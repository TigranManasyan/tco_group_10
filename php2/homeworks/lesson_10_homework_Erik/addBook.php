<?php
require './db.php';
    $author = $_GET['author__'];
    $title = $_GET['title__'];
    $info = $_GET['info__'];
    if ($author && $info && $title)
    {
        $sql = "INSERT INTO `posts`(`id`, `title`, `author`, `info`) VALUES ('','$title','$author','$info')";
        mysqli_query($conn, $sql);
        header('location: index.php');
    }else{
        echo "Uncorrect".'<br>';
        echo '<a href="index.php">Back</a>';
    }
