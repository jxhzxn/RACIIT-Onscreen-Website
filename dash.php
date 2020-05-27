<html>
    <head>
        <title>Registered List</title>
        <link rel="icon" href="./assets/images/wide-logo-1.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- External CSS -->
        <link rel="stylesheet" href="./css/dash.css">

        <!-- fontAwesome CDN -->
        <link rel="stylesheet" href="./css/all.min.css">

        <!-- Google Fonts -->
         <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

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
                <p id="reg-form" class="rules-text">Dashboard Login</p>
            </div>
            <div class="intro-form-container">
                    <form id="form-id" action="" method="POST" class="form-elements-container">
                        <input class="form-element" id="password" name="password" type="password" placeholder="Password">
                        <button type="submit" class="reg-btn" id="regbtn">Login</button>
                    </form>

                   
            </div>
        </div>
    </div>

    <script>
        $("#regbtn").click(function(event){
            var password = $("#password").val();
            event.preventDefault();

            $.ajax({
                method: "POST",
                url: "./backend/dash.php",
                data: {
                    password: password
                },

                success: function(data){
                    if($.trim(data)==1){
                        Swal.fire({
                        icon: 'success',
                        title: 'Login Successful!',
                        showConfirmButton: false,
                        timer: 2000
                        }).then((result) => {
                            // Reload the Page
                            window.location.href="./backend/dash-select.php";
                        });
                    }else if($.trim(data)==2){
                        Swal.fire(
                          "<div>Password is Wrong</div>",
                          "",
                          'error'
                        ).then((result) => {
                            // Reload the Page
                            location.reload();
                            });
                    }
                },

                error: function(data){
                    alert("error");
                }
            });
        });
    </script>

  





  
    </body>
   
    
</html>




