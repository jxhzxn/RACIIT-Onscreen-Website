<?php
session_start();
include "./db-config.php";

$name = $_POST['name'];
$email = $_POST['email'];

$sql1 = 'SELECT voter_email,voted FROM voters WHERE voter_email = ?';
$stmt1 = $con -> prepare($sql1);
$stmt1->bindParam(1,$email);
$stmt1->execute();
$row = $stmt1->fetch(PDO::FETCH_ASSOC);
$exist = $row['voter_email'];
$voted = $row['voted'];



if($email==$exist AND $voted!=0){
    $sql2 = 'SELECT voter_id FROM voters WHERE voter_email = ?';
    $stmt2 = $con -> prepare($sql2);
    $stmt2->bindParam(1,$email);
    $stmt2->execute();
    $row1 = $stmt2->fetch(PDO::FETCH_ASSOC);
    $voterid = $row1['voter_id'];
    $_SESSION["voter-id"] = $voterid;
    
    echo 1;
}else if($email==$exist AND $voted==0){
    $sql2 = 'SELECT voter_id FROM voters WHERE voter_email = ?';
    $stmt2 = $con -> prepare($sql2);
    $stmt2->bindParam(1,$email);
    $stmt2->execute();
    $row1 = $stmt2->fetch(PDO::FETCH_ASSOC);
    $voterid = $row1['voter_id'];
    $_SESSION["voter-id"] = $voterid;
    
    echo 2;
}else{
    $sql = 'INSERT INTO voters(voter_name,voter_email,voted) VALUES(:voter_name,:voter_email,:voted)';
    $stmt = $con->prepare($sql);
    $stmt->execute(['voter_name'=>$name,'voter_email'=>$email,'voted'=>0]);

    $sql2 = 'SELECT voter_id FROM voters WHERE voter_email = ?';
    $stmt2 = $con -> prepare($sql2);
    $stmt2->bindParam(1,$email);
    $stmt2->execute();
    $row1 = $stmt2->fetch(PDO::FETCH_ASSOC);
    $voterid = $row1['voter_id'];
    $_SESSION["voter-id"] = $voterid;

    echo 3;
}






?>