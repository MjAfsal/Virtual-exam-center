<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

$con = mysqli_connect($server,$username,$password,$dbname);

if($con){
    // echo "Successfully Connected!";
}else{
    echo "Error!";
}