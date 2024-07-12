<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Applicant</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container p-3 d-flex justify-content-center">
        <div class="card w-75">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Degree</th>
                            <th scope="col" colspan="2">Operation</th>
                        </tr>
                    </thead>
                    <?php

                    include "db_connect.php";

                    $select_query = "select * from create_applicant";
                    $query = mysqli_query($con, $select_query);

                    while($result = mysqli_fetch_assoc($query)){
                        ?>
                            <tbody>
                                <tr>
                                    <th scope="row"><?php echo $result['id']; ?></th>
                                    <td><?php echo $result['name']; ?></td>
                                    <td><?php echo $result['email']; ?></td>
                                    <td><?php echo $result['degree']; ?></td>
                                    <td>&nbsp; <a href=""> <i class="fa fa-edit text-success"></i> </a> </td>
                                    <td><a href=""> <i class="fa fa-trash text-danger" aria-hidden="true"></i> </a> </td>
                                </tr>
                            </tbody>
                        <?php
                        }

                        ?>
                    
                </table>
            </div>
        </div>
    </div>
</body>
</html>