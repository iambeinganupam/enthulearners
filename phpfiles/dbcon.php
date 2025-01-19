<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "enthulearners";

$con = mysqli_connect($server,$user,$password,$db);

if(!$con){
    ?>

    <script>
        alert("Connection error");
    </script>
    <?php

}

?>