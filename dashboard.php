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

      .input-question::-webkit-input-placeholder{
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

      .submit-answer{
            color: white;
            background: linear-gradient(195deg, blue, crimson);
            padding-left: 6px;
            padding-right: 6px;
            border: none;
            text-align: center;
            width: 80px;
            border-radius: 10px;
      }

      .submit-answer:hover{
        cursor: pointer;
        outline: none;
        background: linear-gradient(195deg, crimson, blue);
      }

      .readonly-display{
        background: transparent;
        color: whitesmoke;
        font-weight: bold;
        outline: none;
        width: fit-content;
        border: none;
      }

      .display_ques{
        width: 100%;
        height: max-content;
      }

      .ans::-webkit-input-placeholder{
        color: white;
        
      }
      .ans:hover{
        outline: none;
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

    <!--======================== WELCOME MODAL =========================-->
    <!--<div id="myModal" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" style="color: rgb(31, 128, 7);">Greetings</h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
            <div class="modal-body">
              <div style="font-family: cursive; color: blue; text-align: center; font-size: 40px;">Welcome</div>
              <div style="font-family: cursive; color: green; font-size: 30px; text-align: center;"><?php echo $_SESSION["firstname"]; ?></div>
            </div>
          </div>
      </div>
    </div>-->
    <!--==================================================================-->
    <p style="color: rgb(58, 14, 109); margin-left: 10%; font-size: 30px; font-weight: bold;" class="my-2">Post your question</p>
    <div class="question-poster my-1">
      <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
        <input type="text" placeholder="Type your question..." class="input-question" name="question_input" required>
        <input type="submit" value="Post" class="post-btn" name="post">
      </form>

      <?php
      //question posting code starts here--

      if(isset($_POST['post'])){
        $poster_username = $_SESSION["username"];
        $question_input = "Q. " . $_POST["question_input"];

        include 'phpfiles/dbcon.php';

        $question_query = "SELECT * FROM posts WHERE post = '$question_input' ";
        $query = mysqli_query($con, $question_query);

        $question_count = mysqli_num_rows($query);
        
        if($question_count > 0){
          echo "<script> alert('This question has already been asked..!!');</script>";
        }else{
          $insert_question = "INSERT INTO `posts`(`serial`, `userid`, `post`, `dateofpost`) VALUES (NULL, '$poster_username', '$question_input', current_timestamp())";
          $submit_question = mysqli_query($con, $insert_question);
          if($submit_question){
            echo "<script>alert('Your Question has been posted..!!');</script>";
          }else{
            echo "<script>alert('This Question cannot be posted..!!');</script>";
          }
        }
      }

      //question posting code ends here--

      ?>
      
    </div>

    <h2 style="margin-left: 8%; margin-top: 60px; margin-bottom: -40px; color: crimson; font-weight: bold;"> Recently asked questions </h2>
    <?php

    //show posted question code starts here--

    include 'phpfiles/dbcon.php';
    $get_post = "SELECT * FROM posts ORDER BY serial DESC";
    $post_query = mysqli_query($con, $get_post);

    $post_count = mysqli_num_rows($post_query);
    if ($post_count > 0) {  

      // Output data of each row
      $idarray= array();
      while($row = mysqli_fetch_assoc($post_query)) {
          echo "<br>";  
          
          // Create an array to store the
          // id of the blogs        
          array_push($idarray,$row['serial']); 
      } 
    }
    else {
      echo "0 results";
    }

    for($x = 0; $x < 6; $x++){
      if(isset($x)){
        $display_query = mysqli_query($con, "SELECT * FROM posts WHERE serial = '$idarray[$x]' ");
        $display_result = mysqli_fetch_array($display_query);

        $display_userid = $display_result['userid'];
        $display_question = $display_result['post'];
        $display_date = $display_result['dateofpost'];

        ?>
          <div style="border: 1px solid rgb(39, 39, 39); border-radius: 5px; background: linear-gradient(195deg, blue, green); color: whitesmoke; font-weight: bold; margin-left: 7%; margin-right: 7%; margin-top: 2%; padding-top: 1%; padding-bottom: 1%; padding-left: 15px; padding-right: 1%; margin-bottom: 2%;">
            
            

            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

              <div style="font-size: 12px; margin-bottom: -2%;">Posted by 
                <input type="text" value="<?php echo $display_userid; ?>" class="readonly-display" name="asker" readonly><br> 
                <?php echo '<span style=""> on ' . $display_date . '</span>'; ?>
              </div>

              <textarea style="margin-top: 5%;" rows="6" class="readonly-display display_ques" name="quest" readonly> <?php echo $display_question; ?> </textarea><br>
              <textarea placeholder="Type your answer..." class="ans" style="background: transparent; color: white; border: 3px dotted red; height: 200px; width: 70%; border-radius: 10px; margin-top: 5%;" name="answer-input" required></textarea><br>
              <button type="submit" class="submit-answer" name="submit-answer">Post</button>
            </form>


            <?php

            //submit answer code starts here--

            if(isset($_POST['submit-answer'])){
              $asker = $_POST["asker"];
              $asked_question = $_POST["quest"];
              $ans_poster_username = $_SESSION["username"];
              $answer_input = $_POST["answer-input"];
  
              include 'phpfiles/dbcon.php';
  
              $answer_query = "SELECT * FROM answers WHERE answer = '$answer_input' ";
              $query = mysqli_query($con, $answer_query);
  
              $answer_count = mysqli_num_rows($query);
          
              if($answer_count > 0){
                ?>
                <script>
                  alert('This answer has already been posted.');
                  location.replace('posts.php');
                </script>
                <?php
              }else{
                $insert_answer = "INSERT INTO `answers`(`serial`, `asker`, `question`, `answerer`, `answer`) VALUES (NULL, '$asker', '$asked_question', '$ans_poster_username', '$answer_input')";
                $submit_answer = mysqli_query($con, $insert_answer);
                if($submit_answer){
                  ?>
                  <script>
                    alert('Your answer has been posted..!!');
                    location.replace('posts.php');
                  </script>
                  <?php
                  
                }else{
                  echo "<script>alert('This answer cannot be posted..!!');</script>";
                }
              }
            }

            //submit answer code ends here--
            ?>

          </div>
    
        <?php
      }
    }
    //show posted question code ends here--
    ?>
    

    <!--<h3><?php echo $_SESSION["firstname"].'<span class="mx-1">'.$_SESSION["lastname"].'</span>'; ?></h3>-->

</body>
</html>