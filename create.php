<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerConnect</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container p-3 d-flex justify-content-center">
  <a href="" class="btn btn-dark">Show Data</a>
</div>
<div class="container p-5">
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Your Name</label>
      <input type="text" class="form-control" name="Name">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label" name="Email">Your Email address</label>
      <input type="text" class="form-control">    
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label" name="Degree">Your Qualification Degree</label>
      <input type="text" class="form-control">  
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label" name="Mobile">Your Mobile Number</label>
      <input type="text" class="form-control">  
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label" name="Reference">Any Reference</label>
      <input type="text" class="form-control">  
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label" name="Language">Preffered Tech Language</label>
      <input type="text" class="form-control">   
    </div>
    <input type="submit" class="btn btn-primary" name="submit" value="Submit"/>
  </form>
</div>
</body>
</html>


