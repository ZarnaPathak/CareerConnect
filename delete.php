<?php

include "db_connect.php";

$id = $_GET['id'];

$delete_query = "delete from create_applicant where id=$id";
$query = mysqli_query($con, $delete_query);

if($query){
    ?>
        <script>
            alert("Data Deleted Succesfull...");
        </script>
    <?php
        header('location:show.php');
    }
    else{
    ?>
        <script>
            alert("Data Not Deleted..");
        </script>
    <?php   
    }
    ?>
