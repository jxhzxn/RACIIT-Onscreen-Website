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

        <title>Onscreen 2.0</title>

        <meta property="og:url"                content="http://onscreen.lk" />
        <meta property="og:type"               content="Entertainment" />
        <meta property="og:title"              content="Onscreen 2.0" />
        <meta property="og:description"        content="Rotaract Club of IIT along with World Vision Lanka is back at it again with Project Onscreen 2.0!" />
        <meta property="og:image"              content="https://scontent.fcmb1-1.fna.fbcdn.net/v/t1.0-9/p843x403/100997203_3172003166177606_239436837544787968_o.jpg?_nc_cat=100&_nc_sid=730e14&_nc_oc=AQk89RikLaQ8YBc5fg2d1VmvILlzf0JrQiIzzOWaARuFsI_jEKi4PkckrCzgQPl53ao&_nc_ht=scontent.fcmb1-1.fna&_nc_tp=6&oh=e9612afa5a5be1375b9652af51238067&oe=5EF3D3E1" />

        <link rel="icon" href="../assets/images/wide-logo-1.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- comment -->

        <!-- External CSS -->
        <link rel="stylesheet" href="../css/index.css">

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

         <style>
             body{
                 background-color: #1f1f1f;
             }
        </style>

    </head>
    <body>
     
    <div class="second-container">
        <div class="form-container">
            <div class="reg-head-container">
                <p id="reg-form" class="rules-text">Sign in to Vote</p>
            </div>
            <div class="intro-form-container">
                    <form id="form-id" class="form-elements-container">
                        <div id="logbtn" class="g-signin2" data-onsuccess="onSignIn"  data-width="350" data-height="70" data-longtitle="true"></div>
                    </form>
            </div>
        </div>
    </div>

    <script>

function onSignIn(googleUser) {
      var profile = googleUser.getBasicProfile();

      var name = profile.getName();
      var email = profile.getEmail();

      $.ajax({
              method: "POST",
              url: "../backend/vote.php",
              data: {
                  name : name,
                  email : email
              },
              success: function(data){
                  if($.trim(data)==1){
                    window.location.href="./after-vote.php";
                  }else{
                    window.location.href="./voting.php";
                  }
              },
              error: function(){
                  alert("Some error has occured");
              }
      });
}
            

    </script>

    
  
 










  



   
        
    

 
    
     
       
        
    </body>
   
    
</html>




