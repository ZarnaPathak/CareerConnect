<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Applicant</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container p-3 d-flex justify-content-center">
  <a href="show.php" class="btn btn-dark">Show Data</a>
</div>
<div class="container p-5 bg-light border border-secondary rounded">
  <form action="" method="POST">
  <?php

    include 'db_connect.php';

    $id = $_GET['id'];

    $select_query = "select * from create_applicant where id=$id";
    $query = mysqli_query($con, $select_query);

    $result = mysqli_fetch_assoc($query);

    if(isset($_POST['submit'])){
    $name = $_POST['Name'];
    $Email = $_POST['email'];
    $Degree = $_POST['degree'];

    $update_query = "UPDATE create_applicant SET id=$id,name='$name', email='$Email', degree='$Degree' WHERE id='$id'";

    $query = mysqli_query($con, $update_query);

    if($query){
        ?>
            <script>
                alert("Data Updated Succesfull...");
            </script>
    <?php
    }
    else{
    ?>
            <script>
                alert("Data Not Updated..");
            </script>
    <?php   
    }
    }
    ?>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Your Name</label>
      <input type="text" class="form-control" name="Name" value="<?php echo $result['name']; ?>">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Your Email address</label>
      <input type="text" class="form-control" name="email" value="<?php echo $result['email']; ?>">    
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Your Qualification Degree</label>
      <input type="text" class="form-control" name="degree" value="<?php echo $result['degree']; ?>">  
    </div>
    <input type="submit" class="btn btn-primary" name="submit" value="Update"/>
  </form>
</div>
</body>
</html>