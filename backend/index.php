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

if(empty($name) or empty($age) or empty($email) or empty($contact)){
    echo 2;
}else{
    $sql = 'INSERT INTO competitors(cname,cage,cemail,ccontact,cnic) VALUES(:cname,:cage,:cemail,:ccontact,:cnic)';
    $stmt = $con->prepare($sql);
    $stmt->execute(['cname'=>$name,'cage'=>$age,'cemail'=>$email,'ccontact'=>$contact,'cnic'=>$nic]);
    move_uploaded_file($file_tmp,$location.$newfilename);
    // echo "uploaded";
}

?>

<html>
    <head>
        <title>Registered List</title>
        <link rel="icon" href="../assets/images/wide-logo-1.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- External CSS -->
        <link rel="stylesheet" href="../css/backend.css">

        <!-- fontAwesome CDN -->
        <link rel="stylesheet" href="../css/all.min.css">

        <!-- Google Fonts -->
         <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,800;1,700&display=swap" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

         <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


         <!-- SweetAlert CDN -->
         <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    </head>
    <body>
     

    <div class="second-container">
        <div class="form-container">
            <div class="reg-head-container">
                <p class="rules-text">Registration Successful<span class='red'>!</span></p>
                <a href="../index.php"><button type="button" class="reg-btn">Back to Home</button></a>
            </div>
        </div>
    </div>

  





  
    </body>
   
    
</html>












