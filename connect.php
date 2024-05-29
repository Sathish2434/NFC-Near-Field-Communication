<?php
error_reporting(0);
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "details";

    $con = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
        echo "Connection ok";
    }
    else
    {
        echo "Connection Failed".mysqli_connect_error();
    }

?>