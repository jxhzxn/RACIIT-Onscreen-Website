<html>
    <head>
        <title>Screen 2.0</title>
        <link rel="icon" href="./assets/images/wide-logo-1.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- comment -->

        <!-- External CSS -->
        <link rel="stylesheet" href="./css/index.css">

        <!-- fontAwesome CDN -->
        <link rel="stylesheet" href="./css/all.min.css">

        <!-- Google Fonts -->
         <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,800;1,700&display=swap" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

         <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


         <!-- SweetAlert CDN -->
         <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    </head>
    <body>
     

    <video class="second-video" autoplay muted loop>
        <source src="./assets/videos/Comp-1.mp4" type="video/mp4">
    </video>

    <div class="first-container">
            <div class="first-img-box">
                <img class="logo" src="./assets/images/wide-logo-1.png">
            </div>
            <div class="btn-container">
                <a href="#about"><button class="left-btn">About</button></a>
                <a href="#reg-form"><button class="left-btn">Register</button></a>
                <a href="#prizes"><button class="left-btn">Prizes</button></a>
                <a href="#deadline"><button class="left-btn">Deadline</button></a>
                <a href="#rules"><button class="left-btn">Rules</button></a>
                <a href="#committee"><button class="left-btn">Committee</button></a>
            </div>
          
    </div>
    <!-- <div class="sticky">I will stick to the screen when you reach my scroll position</div> -->
    <div class="fifth-container">
        <div class="about-container">
            <div id="about" class="about-heading-container">
                <p class="rules-text">About On Screen <span class="red">2.0</span></p>
            </div>
            <div class="about-other-container">
                <div class="about-logo-container">
                    <img class="rotaract-logo" src="./assets/images/rotaract-logo.png">
                    <img class="world-vision-logo" src="./assets/images/world-vision-logo.png">
                </div>
                <div class="about-text-container">
                    <p class="about-text">Project OnScreen 2.0 is an open competition for youth and children to showcase their talents on short film making. The Rotaract Club of IIT is conducting this project along with World Vision Lanka. This is the phase two of Project OnScreen '20.
                        Phase one was carried out as two workshops on movie-making to help the young generation to create short films to address real-life problems that they see in our world. 
                        This project is mainly focused on topics such as Child Rights, Agriculture, and Hygiene. TikTok will be used as the central platform to create short films. We hope to bring awareness and create an impact on society to change its perspective on real-life issues.
                        Since this the second phase as the third phase, we are expecting to conduct the "OnScreen - Short Film Festival." The ten best films from each thematic area will be selected and screened at the festival. </p>
                </div>
            </div>
        </div>
    </div>

    <div class="fourth-container">
        <div id="dead" class="countdown-container">
            <div id="deadline" class="timer-container">
                <p id="count-down" class="count-down"></p>
            </div>
        </div>
    </div>

    <div class="third-container">
        <div class="rules-container">
        <div class="rules-head-container">
                <p  id="prizes" class="rules-text">Prizes<span class="red">!</span></p>
            </div>
            <div class="rules-head-container">
                <p  id="rules" class="prize-text">Overall most Popular Video <br><span class="prize-red">25,000 LKR</span></p>
                <p  id="rules" class="prize-text">Overall most Creative Video <br><span class="prize-red">25,000 LKR</span></p>
                <p  id="rules" class="prize-text">Winner from each topic <br><span class="prize-red">10,000 LKR</span></p>
            </div>
        </div>
    </div>


    <div class="second-container">
        <div class="form-container">
            <div class="reg-head-container">
                <p id="reg-form" class="rules-text">Register Now<span class="red">!</span></p>
            </div>
            <div class="intro-form-container">
                    <form id="form-id" action="" method="" class="form-elements-container" required>
                        <input class="form-element" id="userName" type="text" placeholder="Full Name" required>
                        <input class="form-element" id="userAge" type="number" placeholder="Age" required>
                        <input class="form-element" id="userEmail" type="email" placeholder="Email ID" required>
                        <input class="form-element" id="userContact" type="number" placeholder="Contact Number" required>
                            <div class="checkbox-elements">
                                <input type="checkbox" id="checkBox" value=1>
                                <div class="checkbox-text">I have carefully read the <a href="#rules" class="check-rules"><b>Rules & Regulations</b></a></div><br>
                            </div>
                        <button type="submit" class="reg-btn" id="regbtn">Register</button>
                    </form>
            </div>
        </div>
    </div>


  

    <div class="third-container">
        <div class="rules-container">
            <div class="rules-head-container">
                <p  id="rules" class="rules-text">Rules <span class="red">&</span> Regulations</p>
            </div>
            <div class="rules-desc-container">
                <p class="rules-desc">
                    <ol class="rules-desc">
                        <li>This will be an open event for youth and children.</li>
                        <li>Applications will be called online and direct correspondence.</li>
                        <li>Movies have to be based on three thematic areas; </li>
                            <ul type="square">
                                <li>Nutrition during this time of crises </li>
                                <li>Importance of Hygiene </li>
                                <li>A violence free home for the children</li>
                                <li>Going green</li>
                                <li>Mental health</li>
                            </ul>
                        <li>Language – no restrictions.</li>
                        <li>Equipment to be used – mobile phones or entry-level video cameras are encouraged.</li>
                        <li>No humans or animals should be harmed during filming and also no environmental pollution at any cost.</li>
                        <li>TikTok will be used as the leading platform to create the movies.</li>
                    </ol>
                    </p>
            </div>
        </div>
    </div>

    <div class="sixth-container">
        <div class="committee-container">
            <div id="committee" class="committee-heading-container">
                <p class="rules-text">The <span class="red">OnScreen</span> Committee</p>
            </div>

            <div class="card-container">

            <!-- Start of Card -->
              <div class="card">
                <div class="img-box">
                    <div class="buy-btn-box">
                        <p class="buy-btn">Zuha Mursheed</p>
                    </div>
                    <img class="com-img" src="./assets/images/zuha.jpg" alt="pic">
                </div>
                <div class="item-desc">
                    <p class="item-desc-title">Project Chairperson</p>
                </div>
            </div>
            <!-- End of Card -->

               <!-- Start of Card -->
               <div class="card">
                <div class="img-box">
                    <div class="buy-btn-box">
                        <p class="buy-btn">Harivarshan Selvarajah</p>
                    </div>
                    <img class="com-img" src="./assets/images/harivarshan.jpg" alt="pic">
                </div>
                <div class="item-desc">
                    <p class="item-desc-title">Project Co -Chairperson</p>
                </div>
            </div>
            <!-- End of Card -->

            <!-- Start of Card -->
            <div class="card">
                <div class="img-box">
                    <div class="buy-btn-box">
                        <p class="buy-btn">Vivek Subendran</p>
                    </div>
                    <img class="com-img" src="./assets/images/vivek.jpg" alt="pic">
                </div>
                <div class="item-desc">
                    <p class="item-desc-title">Project Secretary</p>
                </div>
            </div>
            <!-- End of Card -->

            <!-- Start of Card -->
            <div class="card">
                <div class="img-box">
                    <div class="buy-btn-box">
                        <p class="buy-btn">Raneesh Fernando</p>
                    </div>
                    <img class="com-img" src="./assets/images/raneesh.jpg" alt="pic">
                </div>
                <div class="item-desc">
                    <p class="item-desc-title">Project Treasurer</p>
                </div>
            </div>
            <!-- End of Card -->

                        <!-- Start of Card -->
                        <div class="card">
                <div class="img-box">
                    <div class="buy-btn-box">
                        <p class="buy-btn">Shehan Saleem</p>
                    </div>
                    <img class="com-img" src="./assets/images/shehan.jpg" alt="pic">
                </div>
                <div class="item-desc">
                    <p class="item-desc-title">In Charge <br/> of PR</p>
                </div>
            </div>
            <!-- End of Card -->

            <!-- Start of Card -->
            <div class="card">
                <div class="img-box">
                    <div class="buy-btn-box">
                        <p class="buy-btn">Thanushi Ganegoda</p>
                    </div>
                    <img class="com-img" src="./assets/images/thanushi.JPG" alt="pic">
                </div>
                <div class="item-desc">
                    <p class="item-desc-title">Joint Professional <br/>Development Director</p>
                </div>
            </div>
            <!-- End of Card -->

            <div class="card">
                <div class="img-box">
                    <div class="buy-btn-box">
                        <p class="buy-btn">Wishva Ravindu</p>
                    </div>
                    <img class="com-img" src="./assets/images/wishva.JPG" alt="pic">
                </div>
                <div class="item-desc">
                    <p class="item-desc-title">Joint Professional <br/>Development Director</p>
                </div>
            </div>
            <!-- End of Card -->

            <!-- Start of Card -->
            <div class="card">
                <div class="img-box">
                    <div class="buy-btn-box">
                        <p class="buy-btn">Jahzan Ahamed</p>
                    </div>
                    <img class="com-img" src="./assets/images/jahzan.jpg" alt="pic">
                </div>
                <div class="item-desc">
                    <p class="item-desc-title">In Charge <br/>of IT</p>
                </div>
            </div>
            <!-- End of Card -->

            <!-- Start of Card -->
            <div class="card">
                <div class="img-box">
                    <div class="buy-btn-box">
                        <p class="buy-btn">Hashini Kodithuwaku</p>
                    </div>
                    <img class="com-img" src="./assets/images/hashini.jpg" alt="pic">
                </div>
                <div class="item-desc">
                    <p class="item-desc-title">Editor</p>
                </div>
            </div>
            <!-- End of Card -->

 

 

       



            
 



           

            </div>
        </div>
    </div>
 
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-elements">
                <div class="f-left">
                    <p class="footer-text">2020 © Copyrights Rotaract Club of IIT</p>
                </div>
                <div class="f-center footer-text">
                    <a href="#about" class="nav">About</a><p>&nbsp;|&nbsp;</p><a href="#reg-form" class="nav">Register</a><p>&nbsp;|&nbsp;</p><a href="#deadline" class="nav">Deadline</a><p>&nbsp;|&nbsp;</p><a href="#rules" class="nav">Rules</a><p>&nbsp;|&nbsp;</p><a href="#committee" class="nav">Committee</a>
                </div>
                <div class="f-right">
                    <a href="https://www.facebook.com/iitrotaract/"><i class="fab fa-facebook-f fb-icon"></i></a>&nbsp&nbsp<a href="https://twitter.com/IITRotaract"><i class="fab fa-twitter twitter-icon"></i></a>&nbsp&nbsp<a href="https://www.instagram.com/rotaract_iit/"><i class="fab fa-instagram ig-icon"></i></a>&nbsp&nbsp<a href="https://rciit.org/"><i class="fas fa-globe globe-icon"></i></a></p>
                </div>
            </div>
        </div>
    </footer>


    


    <script type="text/javascript">
        $("#regbtn").click(function(form){
            var name = $("#userName").val();
            var age = $("#userAge").val();
            var email = $("#userEmail").val();
            var contact = $("#userContact").val();

            $.ajax({
                method: "POST",
                url: "./backend/index.php",
                data: {
                    name : name,
                    age : age,
                    email : email,
                    contact : contact
                },

                success: function(data){
                    if($.trim(data)==1){
                        Swal.fire(
                          "<div>Registration Successful</div>",
                          "",
                          'success'
                        );
                        document.querySelector("#reg-form").outerHTML="<p id='reg-form' class='rules-text' hidden>Register Now<span class='red'>!</span></p>";
                        document.querySelector("#form-id").outerHTML="<p id='reg-form' class='rules-text'> Already Registered<span class='red'>!</span></p>"
                        // window.location.href="./index.php";
                    }else if($.trim(data)==2){
                        Swal.fire(
                          "<div class='red-alert'>Please fill up everything</div>",
                          "",
                          'error'
                        );
                    }
                },

                error: function(data){
                    alert("Some error has occured");
                }
            });
        });
        
    </script>

    <script>
        var countDownDate = new Date("May 10, 2020 00:00:00").getTime();

        var x = setInterval(function(){
            var now = new Date().getTime();
            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("count-down").innerHTML ="<span class='testing-head'>Registrati<span class='red-on'>on</span> closing in</span><br><br><span class='testing'>" +days+ "</span> <span class='day'>Days&nbsp&nbsp</span><span class='testing'>" + hours + "</span> <span class='day'>h&nbsp&nbsp</span><span class='testing'>" + minutes + "</span> <span class='day'>m&nbsp&nbsp</span><span class='testing'>" + seconds + "</span> <span class='day'>sec</span>";

            if (distance < 0) {
             clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
            }
        },1000);
    </script>
    
     
       
        
    </body>
   
    
</html>




