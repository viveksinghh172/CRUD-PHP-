<?php

$con = new mysqli("localhost","root","","crud");

if(!$con)
{
    die("Connection Failed".mysqli_connect_error());
}

?>