<?php
    $servername="localhost";
    $username ="root";
    $password ="";
    $database = "csdl_lego";

    $conn = mysqli_connect($servername,$username,$password,$database);
    mysqli_set_charset($conn,'UTF8');
?>