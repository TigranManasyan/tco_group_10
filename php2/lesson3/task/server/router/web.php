<?php
    require './../model/User.php';
    $action = '';
    if(isset($_POST['action'])) {
        $action = $_POST['action'];
    }

    if($action === 'sign_up') {
        if(isset($_POST['fullname'])
            && isset($_POST['age'])
            && isset($_POST['email'])
            && isset($_POST['password']) ) {
            if(!empty($_POST['fullname'])
                && !empty($_POST['age'])
                && !empty($_POST['email'])
                && !empty($_POST['password']) ) {
                $user = new User();
                $user->register($_POST['fullname'], $_POST['age'], $_POST['email'], $_POST['password']);
            }
        }
    } else if($action === 'sign_in') {
        if(isset($_POST['email'])
            && isset($_POST['password']) ) {
            if(!empty($_POST['email'])
                && !empty($_POST['password']) ) {
                $user = new User();
                if($user->login($_POST['email'], $_POST['password'])) {
                    header('location:./../../views/dashboard/profile.php');
                } else {
                    $_SESSION['msg'] = 'Incorrect email or password';
                    header('location:./../../index.php');
                    die;

                }
             } else {
                $_SESSION['msg'] = 'Enter all inputs';
                header('location:./../../index.php');
                die;
            }
        }
    }