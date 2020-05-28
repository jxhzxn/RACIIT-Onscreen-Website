<?php
session_start();
$jx = $_SESSION['jx'];
if(empty($jx)){
    echo 'Stop';
}else{
?>
<html>
    <head>
        <title>Registrations</title>
        <link rel="icon" href="../assets/images/wide-logo-1.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- External CSS -->
        <link rel="stylesheet" href="../css/123abc.css">

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
        include "./db-config.php";

        $query = 'SELECT cid,cname,cage,cemail,ccontact,cnic FROM competitors';
        $stmt = $con -> prepare($query);
        $stmt->execute();
        $row = $stmt->fetchAll();
        $rc = $stmt->rowCount();
    ?>
     

    <div class="second-container">
        <div class="form-container">
            <div class="reg-head-container">
                <p class="rules-text">Registrations - <span class="red"><?php echo $rc; ?></span></p>
            </div>
            <div class="intro-form-container">

            <?php
                $i=1;
                foreach($row as $competitors){

                    $query1 = 'SELECT * FROM voters WHERE voted = ?';
                    $stmt1 = $con -> prepare($query1);
                    $stmt1->bindParam(1,$competitors['cid']);
                    $stmt1->execute();
                    $row1 = $stmt1->fetchAll();
                    $rc1 = $stmt1->rowCount();

            ?>

                    <div class="reg-element">
                        <p class="num"><?php echo $i?>.</p>
                        <p class="name"><?php echo $competitors['cname'] ?></p>
                        <p class="votes">Votes -&nbsp;<span class="red-on"><?php echo $rc1 ?></span></p>
                        <p class="nic"><?php echo $competitors['cnic'] ?></p>
                        <p class="age"><?php echo $competitors['cage'] ?></p>
                        <p class="phone"><?php echo $competitors['ccontact'] ?></p>
                        <p class="email"><?php echo $competitors['cemail'] ?></p>
                    </div>

            <?php
                $i++;
                }
            ?>           

                    
            </div>
        </div>
    </div>

  





  
    </body>
   
    
</html>

<?php
}
?>




