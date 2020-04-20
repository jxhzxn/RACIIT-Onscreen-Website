<?php

include "./db-config.php";

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$check = $_POST['check'];

if(empty($name) or empty($age) or empty($email) or empty($contact) or empty($check)){
    echo 2;
}else{
    $sql = 'INSERT INTO competitors(cname,cage,cemail,ccontact) VALUES(:cname,:cage,:cemail,:ccontact)';
    $stmt = $con->prepare($sql);
    $stmt->execute(['cname'=>$name,'cage'=>$age,'cemail'=>$email,'ccontact'=>$contact]);
    echo 1;
}

// if(isset($_POST['check'])){

// }else{
    
// }









?>