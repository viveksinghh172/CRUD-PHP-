<?php

session_start();
require'connection.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>View Details</title>
    <style>
        /* body,.container,form,.card-body,.card-header{
            background-image: url('background.avif');
            background-size: cover;
            color: white;
        } */
        body
        {
            background-color: gray;
        }
    </style>
  </head>
  <body>
    

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card" style="border: 2px solid black;">
                    <div class="card-header" style="border-bottom: 2px solid black;">
                        <h4>All Details
                            <a href="index.php" class="btn btn-primary float-right">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body mt-2">
                        <?php
                            if(isset($_GET['id']))
                            {
                               $id = $_GET['id'];
                               $query="select * from data where id='$id'";
                               $query_run = mysqli_query($con,$query);

                               if(mysqli_num_rows($query_run) > 0)
                               {
                                $data = mysqli_fetch_array($query_run);
                                ?>
        
                                    <div class="mb-3">
                                        <label for="name"><h5>Name:</h5></label>
                                        <p>
                                            <?= $data['name']; ?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email"><h5>Email:</h5></label>
                                        <p>
                                            <?= $data['email']; ?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone"><h5>Mobile:</h5></label>
                                        <p>
                                            <?= $data['phone']; ?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="course"><h5>Course:</h5></label>
                                        <p>
                                            <?= $data['course']; ?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <a href="index.php" class="btn btn-primary">Back</a>
                                    </div>

                                <?php
                               }
                               else 
                               {
                                echo "<h4>No such id found</h4>";
                               }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>