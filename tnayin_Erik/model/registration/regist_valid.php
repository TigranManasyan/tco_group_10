<?php
$username = $_POST['username__reg'];
$birth_date = $_POST['birthdate__reg'];
$email = $_POST['email__reg'];
$password = $_POST['password__reg'];

if (!isset($username) || strlen($username) < 6 || strlen($username) > 20){
    echo "Uncorrect username".'<br>';
    die('<a href="../../index.php">Back to login!</a>');
};

function getAge($date) {
    return intval(date('Y', time() - strtotime($date))) - 1970;
}
$birth_date = getAge($birth_date);

if ($birth_date < 1 || $birth_date > 120){
    echo "Uncorrect birth date".'<br>';
    die('<a href="../../index.php">Back to login!</a>');
}

if (!isset($password) || strlen($password) < 6 || strlen($password) > 20){
    echo "Uncorrect Password".'<br>';
    die('<a href="../../index.php">Back to login!</a>');
};
?>

