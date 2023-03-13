<?php

include `co.php`;

$ID = $_POST[`abcd`];

$sql = "DELETE FROM `admin` WHERE ID=$ID";

$status = mysqli_query($conn,$sql);

if($status){
    header("Location: view.php");
}else{
    echo"Error - Delete!";
}

?>