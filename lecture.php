<?php
// echo "lecture page";
session_start();

    if(!isset($_SESSION['username']))
    {
    header("location:login.php");
    }

    elseif($_SESSION['usertype']=='student')
    {
    header("location:login.php");
    }

    elseif($_SESSION['usertype']=='admin')
    {
    header("location:login.php");
    }

?>
<a href="logout.php">logout</a>
<a href="view_page.php">view</a>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
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

  <section class="vh-100 bg-image" style="background-image:C:\wamp641\www\VEC\photo-1486312338219-ce68d2c6f44d.avif">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Add Exam Details</h2>


                <form action="" method="Post">
                  <div class="form row">
                    <div class="col">
                      Exam Title
                      <input type="text" class="form-control" name="examtitle">
                    </div>
                  </div>


                  <div class="form row" id="sd">
                    <label for="sd">Date</label>
                    <div class="col">
                      <input type="Date" class="form-control" name="date" placeholder="END DATE"> 
                    </div>
                    <label for="sd">Start Time</label>
                    <div class="col">
                      <input type="time" class="form-control" value="" step="" name="starttime">
                    </div>
                  </div>

                  <div class="form row" id="ed">
                    
                    <label for="ed">End Time</label>
                    <div class="col">
                      <input type="time" class="form-control" value="" step=""  name="endtime">
                    </div>
                  </div>
                  <br>

                  <div class="d-flex justify-content-center">
                    <input type="submit" value="Submit" name="submit"
                      class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">

                  </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="bootstrap.js">

  </script>


  </form>
  <?php

  @include'co.php';

if(isset($_POST['submit'])){

    $examtitle = $_POST["examtitle"];
    $date = $_POST["date"];
    $starttime = $_POST["starttime"];
    $endtime = $_POST["endtime"];
    
    

   
    

    $sql = "INSERT INTO `lecture`(`ExamTitle`, `StartDate`, `StartTime`, `EndTime`) VALUES  ('$examtitle','$date','$starttime','$endtime')";

    $status = mysqli_query($con,$sql);
    
    if($status){
        header('location:view_page.php');
    }else{
        echo "Error - Add";
   }
}

?>
</body>

</html>