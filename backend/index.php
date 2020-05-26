<?php

include "./db-config.php";

$name = $_POST['userName'];
$age = $_POST['userAge'];
$email = $_POST['userEmail'];
$contact = $_POST['userContact'];
$nic = $_POST['userNIC'];

$file = $_FILES['videoUpload']['name'];
$location = "../uploaded-videos/";
$file_tmp = $_FILES['videoUpload']['tmp_name'];
$newfilename = "$nic.mp4";

if(empty($name) or empty($age) or empty($email) or empty($contact) or empty($nic) or empty($file)){
    echo 2;
}else{
    $sql = 'INSERT INTO competitors(cname,cage,cemail,ccontact,cnic) VALUES(:cname,:cage,:cemail,:ccontact,:cnic)';
    $stmt = $con->prepare($sql);
    $stmt->execute(['cname'=>$name,'cage'=>$age,'cemail'=>$email,'ccontact'=>$contact,'cnic'=>$nic]);
    move_uploaded_file($file_tmp,$location.$newfilename);
    echo 1;
}

?>














