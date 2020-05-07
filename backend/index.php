<?php

include "./db-config.php";

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$theme = $_POST['theme'];

if(empty($name) or empty($age) or empty($email) or empty($contact) or empty($theme)){
    echo 2;
}else{
    $sql = 'INSERT INTO competitors(cname,cage,cemail,ccontact,ctheme) VALUES(:cname,:cage,:cemail,:ccontact,:ctheme)';
    $stmt = $con->prepare($sql);
    $stmt->execute(['cname'=>$name,'cage'=>$age,'cemail'=>$email,'ccontact'=>$contact,'ctheme'=>$theme]);
    echo 1;
}

// if(isset($_POST['check'])){

// }else{
    
// }









?>