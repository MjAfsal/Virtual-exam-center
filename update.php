<?php

include 'co.php';

// $id = $_GET['id'];


$id = isset($_GET['ID']) ? $_GET['ID'] : '';

$sql = "SELECT * FROM exam WHERE ID = $id";

$status = mysqli_query($con, $sql);

while($sql = mysqli_fetch_array($conn, $result)) {
    
    $ID = $row['ID'];
    $firstName = $row['FirstName'];
    $lastName = $row['LastName'];
    $email = $row['Email'];
    $password = $row['Password'];
    $phoneNumber = $row['PhoneNumber'];
    $userRole = $row['UserRole'];
}

?>

<form action="" method="post">
    <input type="text" name="ID" value="<?php echo $ID ?>"> <br>
    <input type="text" name="FirstName" value="<?php echo $firstName ?>"> <br>
    <input type="text" name="LastName" value="<?php echo $lastName ?>"><br>
    <input type="text" name="Email" value="<?php echo $email ?>"><br>
    <input type="text" name="Password" value="<?php echo $password ?>"><br>
    <input type="text" name="PhoneNumber" value="<?php echo $phoneNumber ?>"> <br>
    <input type="text" name="UserRole" value="<?php echo $userRole ?>"> <br>

    <input type="submit" name="btnsave" value="Save">
</form>

<?php

    if(isset($_POST['btnsave'])){
        $ID = $_POST['ID'];
        $firstName = $_POST['FirstName'];
        $lastName = $_POST['LastName'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        $phoneNumber = $_POST['PhoneNumber'];
        $userRole = $_POST['UserRole'];
        

        $sql2 = "UPDATE `admin` SET `FirstName` = '$firstName',`LastName` = '$lastName',`Email` = '$email',`Password`= '$password', `PhoneNumber` = '$phoneNumber',`UserRole` = '$userRole' WHERE `admin`.`ID` = $ID";

        $status2 = mysqli_query($con,$sql2);

        if($status2){
            header("Location: view.php");
        }else{
            echo "Error!";
        }

        

    }

?>