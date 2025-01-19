<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>

    <!--bootstrap css-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!--font awesome css-->
    <link rel="stylesheet" href="../css/all.css">

    <!--animate css-->
    <link rel="stylesheet" href="../css/animate.css">

    <!--jquery js-->
    <script src="../js/jquery.js"></script>

    <!--bootstrap js-->
    <script src="../js/bootstrap.min.js"></script>

    <!--animate js-->
    <script src="../js/animate.js"></script>

    <!--Custom Style-->
    <style>
        .login_form{
            width: 90%;
            
            background: linear-gradient(195deg, blue, green);
            padding: 20px;
            margin: 20px auto 0;
            text-align: center;
            height: max-content;
            margin-top: 50px;
            border-radius: 5px;
            color: white;
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
    </style>
</head>
<body>
    
    <div class="login_form">

        <form class="form" action="" method="post">
            <p style="font-size: xx-large;">Enthulearners</p>
            <h3>Reset Password</h3><br><br>
            <i class="fa fa-lock"></i> New Password: <input type="password" placeholder="Enter new password" id="my_password" class="input-area my-2" name="new_password" required>
            <span class="eye" onclick="show_hide_password()">
                <i class="fa fa-eye" id="hide1" style="display: none;"></i>
                <i class="fa fa-eye-slash" id="hide2"></i>
            </span><br><br><br>
        
            <button type="submit" class="submit-btn" name="change">Change</button>
        </form><br><br>

    </div>

    <?php
    include '../phpfiles/dbcon.php';

    if(isset($_GET['token'])){

        $token = $_GET['token'];

        if(isset($_POST['change'])){
            $new_password = mysqli_real_escape_string($con, $_POST['new_password']);
            $encryption = sha1($new_password);

            $change_password = "UPDATE users SET password = '$encryption' where token = '$token'";
            $update_query = mysqli_query($con, $change_password);

            if($update_query){
                ?>
                <script>
                    alert('Your Password has been changed successfully..!! Please login now with new password.');
                    location.replace('../index.php');
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert('Your password has not been changed..!! Please try again in few minutes.');
                    location.replace('../index.php');
                </script>
                <?php
            }
    
        }
    }else{
        ?>
        <script>
            location.replace('../index.php');
        </script>
        <?php
    }

    ?>

    <!--show and hide new setting password-->
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

</body>
</html>