<?php

session_start();
require 'connection.php';


// Deletion of data
// if(isset($_POST['delete']))
// {
//     $id = $_POST['id'];

//     $query = "delete from data where id='$id' ";
//     $query_run = mysqli_query($con, $query);
    
//     if($query_run)
//     {
//         $_SESSION['message'] = "Data deleted successfully 😊😊";  // To give a message
//         header("Location: index.php");
//         exit(0);
//     }
//     else
//     {
//         $_SESSION['message'] = "Data not updated";  // To give a message
//         header("Location: index.php");
//         exit(0);
//     }
// }


// To update(edit) details
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $course=$_POST['course'];

    $query = "update data set name='$name', email='$email', phone='$phone', course='$course' where id='$id'";
    $query_run = mysqli_query($con,$query);
    
    if($query_run)
    {
        $_SESSION['message'] = "Data updated successfully 😊😊";  // To give a message
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Data not updated";  // To give a message
        header("Location: index.php");
        exit(0);
    }
}



// To add Details

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $course=$_POST['course'];
}

$query = "insert into data (name, email, phone, course) values ('$name','$email','$phone','$course')";

$query_run = mysqli_query($con,$query);

if($query_run)
{
    $_SESSION['message'] = "Data inserted successfully 😊😊";  // To give a message
    header("Location: create.php");
    exit(0);
}
else
{
    $_SESSION['message'] = "Data not inserted";  // To give a message
    header("Location: create.php");
    exit(0);
}

?>