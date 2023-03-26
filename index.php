<?php
session_start();
require 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Index File</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        /* th
        {
            border: 2px solid black;
        } */
        body
        {
            background-color: gray;
        }
    </style>
</head>
<body>
    
<div class="container mt-5">

    <?php include('message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card" style="border: 2px solid black;">
                <div class="card-header" style="border-bottom: 2px solid black;">
                    <h4>
                        Student Details
                        <a href="create.php" class="btn btn-primary float-right">Add Student</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="border: 2px solid black;">ID</th>
                                <th style="border: 2px solid black;">Name</th>
                                <th style="border: 2px solid black;">Email</th>
                                <th style="border: 2px solid black;">Phone</th>
                                <th style="border: 2px solid black;">Course</th>
                                <th style="border: 2px solid black;">Action</th>
                            </tr>
                        </thead>
                        <tbody style="border: 2px solid black;">
                            <?php
                                $query="select * from data";
                                $query_run=mysqli_query($con,$query);
                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $data)
                                    {
                                        ?>
                                        <tr>
                                            <td><?= $data['id']; ?></td>
                                            <td><?= $data['name']; ?></td>
                                            <td><?= $data['email']; ?></td>
                                            <td><?= $data['phone']; ?></td>
                                            <td><?= $data['course']; ?></td>
                                            <td>
                                                <a href="view.php?id=<?= $data['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                <a href="delete.php?id=<?= $data['id']; ?>" class="btn btn-danger btn-sm">Delete</a>

                                                <!-- Deleting the data -->
                                                <!-- <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete" value="" class="btn btn-danger btn-sm">Delete</button>
                                                </form> -->
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "<h5>No record found</h5>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>