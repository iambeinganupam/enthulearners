<?php

session_start();

if(!isset($_SESSION["username"])){
    header('location:index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enthulearners- <?php echo $_SESSION["firstname"]; ?></title>

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

    <!--show modal-->
    <script>
      $(document).ready(function(){
        $("#myModal").modal('show');
      });
    </script>

    <style>
      .question-poster{
        text-align: center;
        background-color: rgb(0, 0, 0);
        width: 80%;
        border-radius: 5px;
        padding-left: 10px;
        padding-right: 10px;
        padding-bottom: 10px;
        padding-top: 10px;
        margin: 10%;
      }

      .input-question{
        border: none;
        outline: none;
        border-bottom: 1px solid rgb(255, 255, 255);
        width: 70%;
        background: transparent;
        color: white;
      }

      ::-webkit-input-placeholder{
        color: rgb(223, 223, 223);
      }

      .post-btn{
        margin-left: 12px;
        border: transparent;
        border-radius: 15px;
        background: linear-gradient(195deg, blue, green);
        color: white;
        padding: 5px;
      }

      .post-btn:hover{
        cursor: pointer;
        outline: none;
        background: linear-gradient(195deg, green, blue);
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
    <!--HEADER STARTS HERE-->
    
    <header class="navbar navbar-expand-lg sticky-top" style="background: linear-gradient(195deg, blue, green); height: 80px;">
      <div class="sidbtn">
        <span class="fas fa-bars"></span>
      </div>
      <h3 style="color: white; margin-left: 20%;">Enthulearners</h3>
    </header>

    

    <!--Code for Sidebar Menu-->
    <nav class="sidebar">
        <div class="text"><?php echo $_SESSION["firstname"]; ?></div>
        <ul>

            <li>
              <a href="dashboard.php"><i class="fab fa-phoenix-framework"></i> Dashboard</a>
            </li>

            <li>
              <a href="posts.php"><i class="fab fa-hubspot"></i> Answered Posts</a>
            </li>
  
            <li>
              <a href="profile.php"><i class="fa fa-user"></i> Profile</a>
            </li>
  
            <li>
              <a href="phpfiles/logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
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
    <div style="border: 1px solid rgb(0, 0, 0); color: white; border-radius: 10px; background: linear-gradient(195deg, blue, green); margin-top: 5%; margin-left: 7%; margin-right: 7%; padding-top: 1%; padding-bottom: 1%; padding-left: 15px; padding-right: 1%; line-height: 50px;">
        Username :
        <span style="margin-left: 5%;"><?php echo $_SESSION["username"]; ?></span>
    </div>

    <div style="border: 1px solid rgb(0, 0, 0); color: white; border-radius: 10px; background: linear-gradient(195deg, blue, green); margin-top: 2%; margin-left: 7%; margin-right: 7%; padding-top: 1%; padding-bottom: 1%; padding-left: 15px; padding-right: 1%; line-height: 50px;">
        Firstname :
        <span style="margin-left: 5%;"><?php echo $_SESSION["firstname"]; ?></span>
    </div>

    <div style="border: 1px solid rgb(0, 0, 0); color: white; border-radius: 10px; background: linear-gradient(195deg, blue, green); margin-top: 2%; margin-left: 7%; margin-right: 7%; padding-top: 1%; padding-bottom: 1%; padding-left: 15px; padding-right: 1%; line-height: 50px;">
        Lastname :
        <span style="margin-left: 5%;"><?php echo $_SESSION["lastname"]; ?></span>
    </div>

    <div style="border: 1px solid rgb(0, 0, 0); color: white; border-radius: 10px; background: linear-gradient(195deg, blue, green); margin-top: 2%; margin-left: 7%; margin-right: 7%; padding-top: 1%; padding-bottom: 1%; padding-left: 15px; padding-right: 1%; line-height: 50px;">
        Email :
        <span style="margin-left: 5%;"><?php echo $_SESSION["email"]; ?></span>
    </div>

    <div style="border: 1px solid rgb(0, 0, 0); color: white; border-radius: 10px; background: linear-gradient(195deg, blue, green); margin-top: 2%; margin-bottom: 5%; margin-left: 7%; margin-right: 7%; padding-top: 1%; padding-bottom: 1%; padding-left: 15px; padding-right: 1%; line-height: 50px;">
        Phone :
        <span style="margin-left: 5%;"><?php echo $_SESSION["phone"]; ?></span>
    </div>
    <!--CONTENT AREA ENDS HERE-->
</body>
</html>