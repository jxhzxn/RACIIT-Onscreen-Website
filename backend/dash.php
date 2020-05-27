<?php
session_start();

$password = $_POST['password'];
$key = 'Hidden@IIT_World&&';

if($password==$key){
    $_SESSION['jx'] = $key;
    echo 1;
}else{
    echo 2;
}

?>