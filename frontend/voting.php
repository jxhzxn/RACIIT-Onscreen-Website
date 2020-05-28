<html>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167892687-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-167892687-1');
        </script>

        <title>Vote</title>
        <link rel="icon" href="../assets/images/wide-logo-1.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- External CSS -->
        <link rel="stylesheet" href="../css/voting.css">

        <!-- fontAwesome CDN -->
        <link rel="stylesheet" href="../css/all.min.css">

        <!-- Google Fonts -->
         <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

         <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

         <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


         <!-- SweetAlert CDN -->
         <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    </head>
    <body>

    <?php
        session_start();
        include "../backend/db-config.php";

        $voterid = $_SESSION["voter-id"];

        $query = 'SELECT cid,cname,cage,cemail,ccontact,cnic FROM competitors';
        $stmt = $con -> prepare($query);
        $stmt->execute();
        $row = $stmt->fetchAll();
        $rc = $stmt->rowCount();

        
    ?>
     

    <div class="second-container">
        <div class="form-container">
            <div class="reg-head-container">
                <p class="rules-text">Vote - <span class="red"><?php echo $rc; ?></span></p>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="intro-form-container">

            <?php
                $i=1;
                foreach($row as $competitors){

            ?>

                    <div class="reg-element">
                    <p class="num"><?php echo $i?>.</p>
                        <p class="name"><?php echo $competitors['cname'] ?></p>
                    <div class="up-video">
                        <video class="video-view" controls muted>
                        <source src="../uploaded-videos/<?php echo $competitors['cnic'] ?>.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                        </video>
                    </div>
                    
                    <input type="submit" name="<?php echo $competitors['cid'] ?>" class="reg-btn" id="regbtn" value="Vote">

                        <!-- <p class="num"><?php echo $i?>.</p>        
                        <p class="name"><?php echo $competitors['cname'] ?></p>
                        <p class="nic"><?php echo $competitors['cnic'] ?></p>
                        <p class="age"><?php echo $competitors['cage'] ?></p>
                        <p class="phone"><?php echo $competitors['ccontact'] ?></p>
                        <p class="email"><?php echo $competitors['cemail'] ?></p> -->
                    </div>

            <?php
             if(isset($_POST[$competitors['cid']])){
                 
                $query1 = 'UPDATE voters SET voted = ? WHERE voter_id = ?';
                $stmt1 = $con -> prepare($query1);
                $stmt1->bindParam(1,$competitors['cid']);
                $stmt1->bindParam(2,$voterid);
                $stmt1->execute();
                echo '<script> window.location.href = "./after-vote.php" </script>';
            }
                $i++;
                }
            ?>           

                  </form>  
            </div>
        </div>
    </div>

  





  
    </body>
   
    
</html>














































 
  
 










  



   
        
    

 
    
     
       
        
    </body>
   
    
</html>




