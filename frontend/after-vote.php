<?php
 session_start();
 include "../backend/db-config.php";
 $voterid = $_SESSION["voter-id"];
?>


<html>
    <head>
        <title>Onscreen 2.0</title>

        <link rel="icon" href="../assets/images/wide-logo-1.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- comment -->

        <!-- External CSS -->
        <link rel="stylesheet" href="../css/after-vote.css">

        <!-- fontAwesome CDN -->
        <link rel="stylesheet" href="../css/all.min.css">

        <!-- Google Fonts -->
         <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

         <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


         <!-- SweetAlert CDN -->
         <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
         <script src="./js/anime.min.js"></script>
         <!-- <script src="./js/text-anime.js"></script> -->

         <script src="https://apis.google.com/js/platform.js" async defer></script>
         <meta name="google-signin-client_id" content="353080688198-q3p7nmtolhugt4bcberseb04hqqe7qlv.apps.googleusercontent.com">


    </head>
    <body>

    <?php

       

        $query = 'SELECT voter_name,voted FROM voters WHERE voter_id = ?';
        $stmt = $con -> prepare($query);
        $stmt->bindParam(1,$voterid);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $votername = $row['voter_name'];
        $cid = $row['voted'];

        $query1 = 'SELECT cname,cage,cemail,ccontact,cnic FROM competitors WHERE cid = ?';
        $stmt1 = $con -> prepare($query1);
        $stmt1->bindParam(1,$cid);
        $stmt1->execute();
        $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);

    ?>
     
    <div class="second-container">
        <div class="form-container">
            <div class="reg-head-container">
                <p id="reg-form" class="rules-text-name">Hi <span class="red"><?php echo $votername; ?></span></p>
                <p id="reg-form" class="rules-text-voted">You voted for <?php echo $row1['cname']; ?></p>

            </div>
            <div class="intro-form-container">
                    <div class="up-video">
                        <video class="video-view" controls muted>
                        <source src="../uploaded-videos/<?php echo $row1['cnic']; ?>.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                        </video>
                    </div>
            </div>
        </div>
    </div>


  
   
    </body>
   
    
</html>




