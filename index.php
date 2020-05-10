<html>
    <head>
        <title>Onscreen'20</title>
        <link rel="icon" href="./assets/images/wide-logo-1.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- comment -->

        <!-- External CSS -->
        <link rel="stylesheet" href="./css/index.css">

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
     

    <video class="second-video" autoplay muted loop>
        <source src="./assets/videos/intro-video.mp4" type="video/mp4">
    </video>

    <!-- <div class="load">
        <img src="./assets/images/spinner-bg.gif">
    </div> -->

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
                <a href="#committee"><button class="left-btn">Contact Us</button></a>
            </div>
          
    </div>
    <!-- <div class="sticky">I will stick to the screen when you reach my scroll position</div> -->
    <div class="fifth-container">
        <div class="about-container">
            <div id="about" class="about-heading-container">
                <p class="rules-text">About OnScreen <span class="red">2.0</span></p>
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
                <p  id="prizes" class="rules-text">Prizes</p>
                <p  class="rules-text-desc">The Winners of Onscreen will Receive Cash Prizes as Follows</p>
            </div>
            <div class="prize-text-container">
                <div class="prize-box">
                    <p  id="prizes" class="prize-text"><span class="prize-red-lkr">LKR</span><span class="prize-red"> <br>25,000<br></span>Overall most <br>Popular Video</p>
                </div>
                <div class="prize-box">
                    <p  id="prizes" class="prize-text"><span class="prize-red-lkr">LKR</span><span class="prize-red"> <br>25,000<br></span>Overall most <br>Creative Video</p>
                </div>
                <div class="prize-box">
                    <p  id="prizes" class="prize-text"><span class="prize-red-lkr">LKR</span><span class="prize-red"> <br>10,000<br></span>Winner from <br>each topic</p>
                </div>
            </div>
        </div>
    </div>


    <div class="second-container">
        <div class="form-container">
            <div class="reg-head-container">
                <p id="reg-form" class="rules-text">Register Now</p>
            </div>
            <div class="intro-form-container">
                    <form id="form-id" action="./backend/index.php" method="POST" class="form-elements-container" required enctype="multipart/form-data">
                        <input class="form-element" name="userName" type="text" placeholder="Full Name" required>
                        <input class="form-element" name="userNIC" type="text" placeholder="NIC no." required>
                        <input class="form-element" name="userAge" type="number" placeholder="Age" required>
                        <select class="form-element" name="userTheme" required>
                            <option value="" disabled selected hidden>Select the Theme</option>
                            <option value="Nutrition during crises">Nutrition during this time of crises</option>
                            <option value="Importance of Hygiene">Importance of Hygiene</option>
                            <option value="Violence free home">A violence free home for the children</option>
                            <option value="Going green">Going green</option>
                            <option value="Mental health">Mental health</option>
                        </select>
                        <input class="form-element" name="userEmail" type="email" placeholder="Email Address" required>
                        <input class="form-element" name="userContact" type="number" placeholder="Contact Number" required>
                        <!-- <label class="custom-file-upload">
                        <i class="fas fa-video"></i> Upload Video
                            <input type="file" name="videoUpload" id="videoUpload" required>
                        </label> -->

                        <div class="file-upload">
                            <input class="file-upload__input" type="file" name="videoUpload" id="myFile" required>
                            <div class="up-label">
                            <span class="file-upload__label"></span>
                            </div>
                            <button class="file-upload__button" type="button"><i class="fas fa-video"></i> Upload Video</button>
                        </div>

                            <div class="checkbox-elements">
                                <input type="checkbox" id="checkBox" value=1 required>
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
                <p class="rules-text">Contact Us</p>
            </div>
            <div class="com-mem-container">
                <div class="com-mem">
                    <p class="com-mem-name">Arshad Najudeen</p>
                    <p class="com-post">Communications Coordinator, <br>World Vision Lanka</p>
                    <p class="com-mail"><i class="fas fa-envelope"></i>&nbsp;&nbsp;Arshad_Najumudeen@wvi.org</p>
                    <p class="com-phone"><i class="fas fa-phone-square-alt"></i>&nbsp;&nbsp;077 957 2295</p>
                </div>
                <div class="com-mem">
                    <p class="com-mem-name">Zuha Mursheed</p>
                    <p class="com-post">Project Chairperson, <br>IIT</p>
                    <p class="com-mail"><i class="fas fa-envelope"></i>&nbsp;&nbsp;zuha.2018105@iit.ac.lk</p>
                    <p class="com-phone"><i class="fas fa-phone-square-alt"></i>&nbsp;&nbsp;076 693 4555</p>
                </div>
            </div>

           

        </div>
    </div>

    <a class="go-to-top-btn" href="#"><i class="fas fa-chevron-circle-up"></i></a>
 
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-elements">
                <div class="f-left">
                    <p class="footer-text">2020 © Copyrights Rotaract Club of IIT</p>
                </div>
                <div class="f-center footer-text">
                    <a href="#about" class="nav">About</a><p>&nbsp;|&nbsp;</p><a href="#reg-form" class="nav">Register</a><p>&nbsp;|&nbsp;</p><a href="#deadline" class="nav">Deadline</a><p>&nbsp;|&nbsp;</p><a href="#rules" class="nav">Rules</a><p>&nbsp;|&nbsp;</p><a href="#committee" class="nav">Contact Us</a>
                </div>
                <div class="f-right">
                    <a href="https://www.facebook.com/iitrotaract/"><i class="fab fa-facebook-f fb-icon"></i></a>&nbsp&nbsp<a href="https://twitter.com/IITRotaract"><i class="fab fa-twitter twitter-icon"></i></a>&nbsp&nbsp<a href="https://www.instagram.com/rotaract_iit/"><i class="fab fa-instagram ig-icon"></i></a>&nbsp&nbsp<a href="https://rciit.org/"><i class="fas fa-globe globe-icon"></i></a></p>
                </div>
            </div>
        </div>
    </footer>


    <script>

Array.prototype.forEach.call(
  document.querySelectorAll(".file-upload__button"),
  function(button) {
    const hiddenInput = button.parentElement.querySelector(
      ".file-upload__input"
    );
    const label = button.parentElement.querySelector(".file-upload__label");
    const defaultLabelText = "No file(s) selected";

    // Set default text for label
    label.textContent = defaultLabelText;
    label.title = defaultLabelText;

    button.addEventListener("click", function() {
      hiddenInput.click();
    });

    hiddenInput.addEventListener("change", function() {
      const filenameList = Array.prototype.map.call(hiddenInput.files, function(
        file
      ) {
        return file.name;
      });

      label.textContent = filenameList.join(", ") || defaultLabelText;
      label.title = label.textContent;
    });
  }
);


    </script>


  


    <!-- <script type="text/javascript">
        $("#regbtn").click(function(form){
            var name = $("#userName").val();
            var age = $("#userAge").val();
            var email = $("#userEmail").val();
            var contact = $("#userContact").val();
            var theme = $("#theme").val();

            $.ajax({
                method: "POST",
                url: "./backend/index.php",
                data: {
                    name : name,
                    age : age,
                    email : email,
                    contact : contact,
                    theme : theme
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
        
    </script> -->

    <script>
        var countDownDate = new Date("May 30, 2020 00:00:00").getTime();

        var x = setInterval(function(){
            var now = new Date().getTime();
            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("count-down").innerHTML ="<span class='testing-head'>Registration <span class='red-on'>cl<img class='spinner' src='./assets/images/spinner-sm.gif'><div class='for-spinner'>sing</span></div></span>  in <br><br><div class='idk'><span class='testing'>" +days+ "</span> <span class='day'>D&nbsp&nbsp</span><span class='testing'>" + hours + "</span> <span class='day'>h&nbsp&nbsp</span><span class='testing'>" + minutes + "</span> <span class='day'>m&nbsp&nbsp</span><span class='testing'>" + seconds + "</span> <span class='day'>s</span></div>";

            if (distance < 0) {
             clearInterval(x);
            document.getElementById("demo").innerHTML = "Registraion is closed :/";
            }
        },1000);
    </script>
    
     
       
        
    </body>
   
    
</html>




