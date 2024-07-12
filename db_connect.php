<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "careerconnect_db";

$con = mysqli_connect($host, $user, $password, $db);

if($con){
    ?>
        <script>
            alert("Connection Succesfull..");
        </script>
<?php
}
else{
?>
        <script>
            alert("Not Connected..");
        </script>
<?php   
}
?>