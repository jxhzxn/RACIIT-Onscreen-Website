<?php
session_start();

$password = $_POST['password'];
$key = 'ElonLaunchedFalcon9';

if($password==$key){
    $_SESSION['jx'] = $key;
    echo 1;
}else{
    echo 2;
}

?>