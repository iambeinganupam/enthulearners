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

      .post_box{
        background: linear-gradient(195deg, blue, crimson);
        padding-top: 10px;
        padding-bottom: 10px;
      }

      .post_box_container{
        margin-left: 7%;
        margin-right: 7%;
        margin-bottom: 2%;
        color: whitesmoke;
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

    <h3 style="color: crimson; margin-bottom: -10px; text-align: center;" class="pt-5">Recently Answered posts</h3>

    <?php

    //show posted answer code starts here--

    include 'phpfiles/dbcon.php';
    $get_answer_post = "SELECT * FROM answers ORDER BY serial DESC";
    $answer_post_query = mysqli_query($con, $get_answer_post);

    $answer_post_count = mysqli_num_rows($answer_post_query);
    if ($answer_post_count > 0) {  

      // Output data of each row
      $post_array= array();
      while($post_row = mysqli_fetch_assoc($answer_post_query)) {
          echo "<br>";  
          
          // Create an array to store the
          // id of the blogs        
          array_push($post_array,$post_row['serial']); 
      } 
    }
    else {
      echo "0 results";
    }

    for($ans = 0; $ans < 5; $ans++){
      if(isset($ans)){
        $display_post_query = mysqli_query($con, "SELECT * FROM answers WHERE serial = '$post_array[$ans]' ");
        $display_post_result = mysqli_fetch_array($display_post_query);

        $display_asker = $display_post_result['asker'];
        $display_post_ques = $display_post_result['question'];
        $display_answerer = $display_post_result['answerer'];
        $display_post_ans = $display_post_result['answer'];

        ?>
        
        <div class="post_box_container">
          <div style="background: black;" class="pl-3">
            <span>Asked by <?php echo $display_asker; ?></span><br>
            <span>Answered by <?php echo $display_answerer; ?></span><br>
          </div>
          <div class="post_box pl-3"><br>
            <span style="font-size: 22px;"><?php echo $display_post_ques; ?></span><br><br>
            <span class="mt-3">Ans. <?php echo $display_post_ans; ?></span><br><br>
          </div>
        </div>

        <?php
      }
    }
    //show posted answer code ends here--
    ?>

    <!--CONTENT AREA ENDS HERE-->

</body>
</html>