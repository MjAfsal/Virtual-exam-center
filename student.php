<?php
// echo "Student page";
session_start();

    if(!isset($_SESSION['username']))
    {
    header("location:login.php");
    }

    elseif($_SESSION['usertype']=='lecture')
    {
    header("location:login.php");
    }

    elseif($_SESSION['usertype']=='admin')
    {
    header("location:login.php");
    }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>helooo  STUDENT</title>
    
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
    <style>
        .btna:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid green;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: green;
  color: white;
}
    </style>
     

</head>
<body>
    <?php
    include("view_page.php");
    ?>
    
    <div class="container">

        <div class="content">
        
            <!-- <a href="view_page.php" class="btn">view</a> -->
            <a href="logout.php">logout</a>
            
        </div>
         


    </div>

</body>
</html>