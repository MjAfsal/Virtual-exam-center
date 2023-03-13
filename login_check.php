<?php

error_reporting(0);
session_start();

$host = "localhost";
$user = "root";
$passsword = "";
$db = "exam";

$data = mysqli_connect($host, $user, $password, $db);

if($data===false)
{
    die("Connection Error");
}

    if ($_SERVER["REQUEST_METHOD"]=="POST") {

    $name = $_POST['username'];

    $pass = $_POST['password'];

    $sql = "SELECT * FROM userlogin where username='" . $name . "' AND password = '" . $pass . "' ";

    $result = mysqli_query($data, $sql);

    $row = mysqli_fetch_array($result);


    if($row["usertype"]=="student")
    {
        $_SESSION['username'] = $name;

        $_SESSION['usertype'] = "student";

        header("location:student.php");
    }

    elseif($row["usertype"]=="lecture")
    {
        $_SESSION['username'] = $name;

        $_SESSION['usertype'] = "lecture";

        header("location:lecture.php");
    }

    elseif($row["usertype"]=="admin")
    {
        $_SESSION['username'] = $name;

        $_SESSION['usertype'] = "admin";

        header("location:admin.php");
    }

    else
    {
        echo "username or password do not match";
    }
}

?>