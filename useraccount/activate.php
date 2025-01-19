<?php
session_start();

include '../phpfiles/dbcon.php';

if(isset($_GET['token'])){

    $token = $_GET['token'];

    $make_active = "UPDATE users SET status = 'active' where token = '$token'";
    $update_query = mysqli_query($con, $make_active);

    if($update_query){
        ?>

        <script>
          alert('Your account has been activated. Please login now.');
          location.replace('../index.php');
        </script>

        <?php
    }else{
        ?>

        <script>
          alert('Account activation failed. Please Sign Up again few minutes later..!!');
        </script>

        <?php
    }
}else{
    ?>
    <script>
      location.replace('../index.php');
    </script>
    <?php
}

?>