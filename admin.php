<?php
// echo "admin page";
session_start();

    if(!isset($_SESSION['username']))
    {
    header("location:login.php");
    }

    elseif($_SESSION['usertype']=='student')
    {
    header("location:login.php");
    }

    elseif($_SESSION['usertype']=='lecture')
    {
    header("location:login.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create record</title>
    <link rel="stylesheet" href="bootstrap.css">
        <style>

.gradient-custom-3 {

background: #84fab0;


background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));


background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}
.gradient-custom-4 {
background: #84fab0;

background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}
    
  
    </style>
</head>
<body>
    <?php include 'menu.php' ?> 
    

    <section class="vh-100 bg-image"
    style="background-image:`form image.webp`;">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
    <div class="card" style="border-radius: 15px;">
    <div class="card-body p-5">
    <h2 class="text-uppercase text-center mb-5">Virtual Exam Center</h2>
     

    <form method="post">

<div class="row">

  <div class="form row">
    <div class="col">
      <input type="text" class="form-control" placeholder="ID" name="ID"> <br>
    </div>
  </div>
  
<div>

<div class="form row">
<div class="col">
  <input type="text" class="form-control" placeholder="First Name" name="FirstName">
</div>

<div class="col">
<input type="text" class="form-control" placeholder="Last Name" name="LastName"> <br>

</div>
</div>
</div>

<div class="from row">
<div class="col">
  <input type="text" class="form-control" placeholder="Email" name="Email"> <br>
</div>

<div class="col">
  <input type="password" class="form-control" placeholder="Password" name="Password"> <br>
</div>
</div>

</div>

<div class="form row">
<div class="col">
  <input type="text" class="form-control" placeholder="Phone Number" name="PhoneNumber"> 
</div>

<div class="col">
  <input type="text" class="form-control" placeholder="User Role" name="UserRole">
</div>
</div>
<br>

  <div  class="d-flex justify-content-center">
  <input type="submit" name="submit" value="Submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
  

  </div>
  <a href="logout.php">logout</a>

</form>

</div>
</div>
</div>
</div>
</div>
</div>
</section>


   

    <?php 
    include 'co.php'; 

    if(isset($_POST['submit'])){
        $ID = $_POST['ID'];
        $firstName = $_POST['FirstName'];
        $lastName = $_POST['LastName'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        $phoneNumber = $_POST['PhoneNumber'];
        $userRole = $_POST['UserRole'];
       

       // $sample = "INSERT INTO `admin` (`ID`,`firstname`, `lastname`, `email`, `password`, `phonenumber`,`userrole`) VALUES ('$ID','$firstName', '$lastName', '$email', '$password',`$phoneNumber`,'$userRole')";*/
        $sample = "INSERT INTO `admin`(`ID`, `FirstName`, `LastName`, `Email`, `Password`, `PhoneNumber`, `UserRole`) VALUES ('$ID','$firstName','$lastName','$email','$password','$phoneNumber','$userRole')";
       
        $status = mysqli_query($con,$sample);

        if($sample){
            header("Location: view.php");
        }else{
            echo "Error - Add";
        }
    }

    ?>

<script src="bootstrap.js">

</script>

</body>
</html>