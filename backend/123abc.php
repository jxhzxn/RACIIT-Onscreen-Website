<html>
    <head>
        <title>Registered List</title>
        <link rel="icon" href="../assets/images/wide-logo-1.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- External CSS -->
        <link rel="stylesheet" href="../css/123abc.css">

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

    <?php
        include "./db-config.php";

        $query = 'SELECT cid,cname,cage,cemail,ccontact,ctheme FROM competitors';
        $stmt = $con -> prepare($query);
        $stmt->execute();
        $row = $stmt->fetchAll();
        $rc = $stmt->rowCount();
    ?>
     

    <div class="second-container">
        <div class="form-container">
            <div class="reg-head-container">
                <p class="rules-text">Registered List - <span class="red"><?php echo $rc; ?></span></p>
            </div>
            <div class="intro-form-container">

            <?php
                $i=1;
                foreach($row as $competitors){

            ?>

                    <div class="reg-element">
                        <p class="num"><?php echo $i?>.</p>
                        <p class="name"><?php echo $competitors['cname'] ?></p>
                        <p class="age"><?php echo $competitors['cage'] ?></p>
                        <p class="theme"><?php echo $competitors['ctheme'] ?></p>
                        <p class="email"><?php echo $competitors['cemail'] ?></p>
                        <p class="phone"><?php echo $competitors['ccontact'] ?></p>
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




