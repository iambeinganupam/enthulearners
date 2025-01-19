<?php

session_start();

if(isset($_SESSION["username"])){
    header('location:dashboard.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A growing learning platform for those who want to share their questions and answer other's questions.">
    <meta name="keywords" content="enthulearners, enthulearner, q and a website, educational website, learning website, elearning">
    <title>Enthulearners</title>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M6Z3Z87');</script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MC9D23J1ZH"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-MC9D23J1ZH');
    </script>
    

    <!--favicon-->
    <link rel="shortcut icon" href="images/logo.ico">

    <!--bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--font awesome css-->
    <link rel="stylesheet" href="css/all.css">

    <!--animate css-->
    <link rel="stylesheet" href="css/animate.css">

    <!--jquery js-->
    <script src="js/jquery.js"></script>

    <!--bootstrap js-->
    <script src="js/bootstrap.min.js"></script>

    <!--animate js-->
    <script src="js/animate.js"></script>


    <!--Custom Style-->
    <style>

       .ask-btn{
           position: fixed;
           width: 50px;
           height: 50px;
           bottom: 15px;
           left: 25px;
           padding-top: 12px;
           text-align: center;
           color: blanchedalmond;
           background: linear-gradient(195deg, blue, green);
           border-radius: 100px;
        }

        .ask-btn:hover{
            text-decoration: none;
            font: bolder;
            color: blanchedalmond;
        }

        .top-para-1{
            margin-top: 90px;
            color: blue;
            font-size: 38px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .top-para-2{
            margin-top: -10px;
            color: green;
            font-size: 38px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .developer-hover{
            color: rgb(0, 255, 242);
        }

        .developer-hover:hover{
            color: crimson;
            text-decoration: none;
        }

        .login_form{
            width: 100%;
            box-shadow: 0 0 3px 0 rgba(0,0,0,0.3);
            background: linear-gradient(195deg, blue, green);
            padding: 20px;
            margin: 8% auto 0;
            text-align: center;
            height: max-content;
            margin-top: -5px;
            border-radius: 5px;
        }

        .input-area{
            border: transparent;
            background: transparent;
            outline: none;
            width: 150px;
            border-bottom: 1px solid white;
            color: #fff;
        }

        ::-webkit-input-placeholder{
            color: rgb(192, 192, 192);
        }

        .submit-btn{
            color: white;
            background: crimson;
            padding-top: 2px;
            padding-bottom: 2px;
            padding-left: 6px;
            padding-right: 6px;
            border: none;
            text-align: center;
            width: 80px;
            border-radius: 10px;
        }

        .submit-btn:hover{
            cursor: pointer;
        }

        .sign-up-link{
            font-size: 20px;
            font-weight: bold;
            color: white;
        }

        .sign-up-link:hover{
            color: crimson;
            text-decoration: none;
        }

        /*==================================================================================*/
      /*============================ sidebar-menu style starts here ==============================*/

      .sidbtn{
        position: absolute;
        top: 15px;
        left: 15px;
        height: 45px;
        width: 45px;
        text-align: center;
        background: #1b1b1b;
        border-radius: 3px;
        cursor: pointer;
        transition: left 0.4s ease;
      }
      .sidbtn.click{
        left: 75%;   
      }
      .sidbtn span{
        color: white;
        font-size: 28px;
        line-height: 45px;
      }
      .sidbtn.click span:before{
        content: '\f00d';
      }
      .sidebar{
        position: fixed;
        width: 250px;
        height: 100%;
        right: -250px;
        background: #1b1b1b;
        transition: left 0.4s ease;
      }
      .sidebar.show{
        left: 0px; 
      }
      .sidebar .text{
        color: white;
        font-size: 25px;
        font-weight: 600;
        line-height: 65px;
        text-align: center;
        background: #lelele;
        letter-spacing: 1px;
      }

      nav ul{
        background: rgb(5, 5, 5);
        height: 100%;
        width: 100%;
        list-style: none;
      }
      nav ul li{
        line-height: 60px;
        border-bottom: 1px solid rgb(122, 117, 117);
        margin-left: -40px;
      }
      nav ul li:last-child{
        border-bottom: 1px solid rgb(255, 255, 255);
      }
      nav ul li a{
        position: relative;
        color: rgb(240, 240, 240);
        text-decoration: none;
        font-size: 18px;
        padding-left: 40px;
        font-weight: 500;
        display: block;
        width: 100%;
        border-left: 10px solid transparent;
      }
      nav ul li:hover a{
        color: cyan;
        background: #lelele;
        border-left-color: cyan;
        text-decoration: none;
      }
      /*=================== sidebar-menu style ends here ====================*/
    </style>

</head>
<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6Z3Z87"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!--HEADER STARTS HERE-->
    
    <header class="navbar navbar-expand-lg sticky-top" style="background: linear-gradient(195deg, blue, green); height: 80px;">
      <div class="sidbtn">
        <span class="fas fa-bars"></span>
      </div>
      <h3 style="color: white; margin-left: 20%;">Enthulearners</h3>
    </header>

    <!--Code for Sidebar Menu-->
    <nav class="sidebar">
    <div class="text">Enthulearners</div>
      <ul>

        <li>
          <a href="#" data-toggle="modal" data-target="#signupformModalCenter"><i class="fa fa-user"></i> Sign Up</a>
        </li>

        <li>
          <a href="#" data-toggle="modal" data-target="#loginformModalCenter"><i class="fa fa-sign-in-alt"></i> Login</a>
        </li>

        <li>
          <a href="https://enthulearners.in/questions/if-40-men-can-finish-a-piece-of-work-in-60-days,-in-how-many-days-will-75-men-finish-the-same-work.php"><i class="fa fa-blog"></i> Recently Answered</a>
        </li>
        
      </ul>

    </nav>

    <!--JavaScript code for sidebar menu-->
    <script>
      $('.sidbtn').click(function(){
          $(this).toggleClass("click");
          $('.sidebar').toggleClass("show");
      });
      
      $('nav ul li').click(function(){
          $(this).addClass("active").siblings().removeClass("active");
      });
    </script>
    <!--=====================================================================================-->

    <!--HEADER ENDS HERE-->

    <!--CONTENT AREA STARTS HERE-->

        <div class="container">
            <a href="#" class="ask-btn" data-toggle="modal" data-target="#loginformModalCenter">Ask</a>
            
            <p class="text-center" style="color: rgb(0, 183, 255); font-size: 38px; margin-top: 20px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Welcome to Enthulearners</p>

            <p class="text-center" style="color: crimson; font-size: 30px;">A growing platform providing solutions to one who asks and questions to one who like to be asked.</p>

            <p class="text-center top-para-1">Better preparation</p>

            <p class="text-center top-para-2">Better future</p>

            <p style="color: rgb(14, 117, 201); margin-top: 50px; font-size: large; text-align: center; font-weight: bold;">"Make your tommorow best by doing your best today."</p>

            <p style="color: rgb(199, 53, 8); font-size: 30px;">A learning platform providing knowledge free of cost to
                students who can't afford paid teachings. This has came up with a view to make child knowledgeable regarding what
                they want. Start your preparation now to make your future bright.<br><br>
            </p>
            <p style="color: rgb(199, 53, 8); font-size: 20px;">You can click on ask to ask your doubt.</p>
            
            <p class="text-center" style="font-size: 39px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: rgb(45, 0, 151);">Our Aim</p>

            <p style="color: indigo; font-size: 20px;">1. To provide knowledge free of cost.<br>
               2. To provide knowledge all over the globe.<br>
               3. To clear all your doubts.<br>
               4. To answer all the questions in this universe.<br>
               5. To be available to everyone easily.<br>
            </p>
        </div><br><br>

        <!--Modals-->

        <!--login form modal-->

        <div class="modal fade" id="loginformModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <div class="login_form">

                    <form class="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                        <fieldset style="color: white">
                            <legend><h3>Login</h3></legend>
                            <i class="fa fa-user"></i> Username: <input type="text" placeholder="Enter your username" class="input-area my-2" name="login_username" required><br><br>
                            <i class="fa fa-lock"></i> Password: <input type="password" placeholder="Enter password" class="input-area my-2" id="my_password" name="login_password" required>
                            <span class="eye" onclick="show_hide_password()">
                              <i class="fa fa-eye" id="hide1" style="display: none;"></i>
                              <i class="fa fa-eye-slash" id="hide2"></i>
                            </span><br>
                            <a href="#" data-toggle="modal" data-target="#recoverformModalCenter" style="color: cyan;">Forgot Password ?</a><br><br>
                    
                            <button type="submit" class="submit-btn" name="login">Login</button>
                    
                        </fieldset>
                    </form>

                    <p style="color: white;" class="mt-3">Don't have an account yet ?<br><a href="#" class="sign-up-link" data-toggle="modal" data-target="#signupformModalCenter">Sign Up</a></p>

                </div>
                
              </div>
              
            </div>
          </div>
        </div>



        <!--SignUp form modal-->

        <div class="modal fade" id="signupformModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  
                  <div class="login_form">
  
                      <form class="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                            <fieldset style="color: white">
                              <legend><h3>Sign Up</h3></legend>
                              <i class="fa fa-user-circle"></i> First Name: <input type="text" placeholder="First Name" class="input-area my-3" name="firstname" required><br>
                              <i class="far fa-user-circle"></i> Last Name: <input type="text" placeholder="Last Name" class="input-area my-3" name="lastname" required><br>
                              <i class="fa fa-phone"></i> Phone: <input type="tel" placeholder="Phone Number" class="input-area my-3" name="phone" required pattern="[0-9]{3}[0-9]{3}[0-9]{4}"><br>
                              <i class="fa fa-envelope"></i> Email: <input type="email" placeholder="Email" class="input-area my-3" name="email" required><br>
                              <i class="fa fa-user"></i> Username: <input type="text" placeholder="Create your username" class="input-area my-3" name="username" required><br>
                              <i class="fa fa-lock"></i> Password: <input type="password" placeholder="Create your password" id="mysignup_password" class="input-area my-3" name="password" required>
                              <span class="eye" onclick="showsignup_hide_password()">
                                <i class="fa fa-eye" id="hide3" style="display: none;"></i>
                                <i class="fa fa-eye-slash" id="hide4"></i>
                              </span><br>
                              <button type="submit" class="submit-btn" name="signup">Sign Up</button>
                      
                            </fieldset>
                      </form>
  
                      <p style="color: white;" class="mt-3">Already have an account ?<br><a href="#" class="sign-up-link" data-dismiss="modal">Login</a></p>
  
                  </div>
                                    
                </div>
                
              </div>
            </div>
        </div>

        <!--Recover Account Form Modal-->
        <div class="modal fade" id="recoverformModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <div class="login_form">

                    <form class="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                        <fieldset style="color: white">
                            <legend><h3>Recover your Account</h3></legend>
                            <i class="fa fa-user"></i> Username: <input type="text" placeholder="Enter your username" class="input-area my-2" name="recover_username" required><br><br>
                    
                            <button type="submit" class="submit-btn" name="next">Next</button>
                    
                        </fieldset>
                    </form>

                </div>
                
              </div>
              
            </div>
          </div>
        </div>


        <?php

        include 'phpfiles/dbcon.php';

        //submit user data code starts here--

        if(isset($_POST['signup'])){
            $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
            $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
            $phone = mysqli_real_escape_string($con, $_POST['phone']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $username = mysqli_real_escape_string($con, $_POST['username']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
            
            $token = bin2hex(random_bytes(15));

            $username_query = "select * from users where username='$username' ";
            $query = mysqli_query($con, $username_query);

            $username_count = mysqli_num_rows($query);

            if($username_count > 0){
                ?>
                <script>
                    alert('User with this username already exists..!!');
                </script>
                <?php
            }else{
                $encrypt_password = sha1($password);
                $insert_query = "INSERT INTO users (serial, firstname, lastname, phone, email, username, password, token, status, dateofsignup) VALUES (NULL, '$firstname', '$lastname', '$phone', '$email', '$username', '$encrypt_password', '$token', 'inactive', current_timestamp())";
                $submit_user_data = mysqli_query($con, $insert_query);

                #below is the code for email verification when working on real server

                #if($submit_user_data){

                #    $subject = "Account activation..!!" ;
                 #   $body =  "Hi $username,
                  #  Below is the link to activate your account on ENTHULEARNERS.
                   # NEVER SHARE THIS LINK WITH ANYONE ELSE, IF YOU SHARE IT WE DO NOT TAKE ANY RESPONSIBILITY.
                    #Click here-- http://localhost/my%20own%20work/enthulearners/useraccount/activate.php?token=$token";

                    #$headers = "From: help.enthulearners@gmail.com" ;

                    #$send_mail = mail($email, $subject, $body, $headers);

                    #if($send_mail){
                      ?>

                      <!--<script>
                        alert('We have sent you an email. Check your email inbox to activate your account. If you could not find it in inbox then please check it in spam.');
                      </script>-->

                      <?php
                    #}else{
                     # ?>

                      <!--<script>
                        alert('Email verification failed');
                      </script>-->

                      <?php
                   # }

               # }else{
                    ?>

                <!--    <script>
                        alert('Failed to Sign Up...!!');
                    </script>-->

                    <?php
                #}
              }


        }

        //submit user data code ends here--

        //login with user data code starts here--

        if(isset($_POST['login'])){

            $login_username = $_POST['login_username'];
            $login_password = sha1($_POST['login_password']);
        
            $login_details_search = "SELECT * FROM users WHERE username = '$login_username' AND password = '$login_password' AND status = 'active' ";
            $result = mysqli_query($con, $login_details_search);

            $login_username_count = mysqli_num_rows($result);

            if($login_username_count > 0){
                while($row = mysqli_fetch_assoc($result)){
                    session_start();
                    $_SESSION["username"] = $row["username"];
                    $_SESSION["firstname"] = $row["firstname"];
                    $_SESSION["lastname"] = $row["lastname"];
                    $_SESSION["email"] = $row["email"];
                    $_SESSION["phone"] = $row["phone"];
                    ?>
                    <script>
                        location.replace('dashboard.php');
                    </script>
                    <?php
                }
            
            }else{
                ?>

                <script>
                    alert("Incorrect username or password..!!");
                </script>
                <?php
                //echo '<div class="alert alert-danger"> Incorrect registration number or password </div>';
            }

        }
        //login with user data code ends here--
            ?>

        
        <?php
        //recover account code starts here--

        if(isset($_POST['next'])){
          $recover_username = mysqli_real_escape_string($con, $_POST['recover_username']);

          $recover_username_query = "select * from users where username='$recover_username' ";
          $recover_query = mysqli_query($con, $recover_username_query);

          $recover_username_count = mysqli_num_rows($recover_query);

          if($recover_username_count > 0){

            $fetch = mysqli_fetch_assoc($recover_query);

            $recovery_email = $fetch["email"];
            $recovery_token = $fetch["token"];

            $subject = "Account Recovery..!!";

            $body = "Hi $recover_username,
            Click on below link to set your new password on ENTHULEARNERS.
            NEVER SHARE THIS LINK AS THIS CAN LEAD TO ACCESS YOUR ACCOUNT TO THAT PERSON.
            Click here:- http://localhost/my%20own%20work/enthulearners/useraccount/recover.php?token=$recovery_token
            
            IF YOU DID NOT REQUESTED TO CHANGE YOUR PASSWORD ON ENTHULEARNERS, PLEASE DON'T CLICK ON THE LINK.";

            $headers = "From: help.enthulearners@gmail.com";

            $send_mail = mail($recovery_email, $subject, $body, $headers);

            if($send_mail){
              ?>
              <script>
                alert('We have sent you an email. Check your email inbox to reset your password. If you could not find it in inbox then please check it in spam.');
              </script>
              <?php
            }else{
              ?>
              <script>
                alert('Cannot reset password now. Please try few minutes later..!!');
              </script>
              <?php
            }

          }else{
            ?>
            <script>
              alert('User with this username NOT FOUND.');
            </script>
            <?php
          }
        }

        //recover account code ends here--
        ?>



    <!--CONTENT AREA ENDS HERE-->

    <!--=============== FOOTER STARTS HERE ====================-->
    <div style="background: black;">
        <div class="ml-5" style="color: rgb(79, 248, 0); font-size: 20px; font-weight: bold;">Prepare yourself today to make your tomorrow better.</div><br><br>
        <hr color="white">
        <div class="rights text-center" style="color: white;">Copyright ©2021 <a href="https://enthulearners.in/" class="developer-hover">Enthulearners</a>.<br>
            Developed and Designed by <a href="https://www.instagram.com/thisis_anupam/" class="developer-hover">Anupam Raj</a>
        </div><br>
    </div>
    <!--=============== FOOTER ENDS HERE ====================-->

    

    <script>
        AOS.init({
          offset: 140,
          duration: 1000,
        });
    </script>

    <!--show and hide login password-->
    <script>
      function show_hide_password(){
        var pass = document.getElementById("my_password");
        var hide1 = document.getElementById("hide1");
        var hide2 = document.getElementById("hide2");

        if(pass.type === 'password'){
          pass.type = "text";
          hide1.style.display = "block";
          hide2.style.display = "none";
        }else{
          pass.type = "password";
          hide1.style.display = "none";
          hide2.style.display = "block";
        }

      }
    </script>

    <!--show and hide signup password-->
    <script>
      function showsignup_hide_password(){
        var pass = document.getElementById("mysignup_password");
        var hide1 = document.getElementById("hide3");
        var hide2 = document.getElementById("hide4");

        if(pass.type === 'password'){
          pass.type = "text";
          hide1.style.display = "block";
          hide2.style.display = "none";
        }else{
          pass.type = "password";
          hide1.style.display = "none";
          hide2.style.display = "block";
        }

      }
    </script>

</body>
</html>