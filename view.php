<?php include 'menu.php' ?>
<table border = 1px>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Phone Number</th>
        <th>User Role</th>
        <th>Delete</th>
    </tr>
<?php 

include 'co.php';

$sql =  "SELECT * FROM `admin`";

$status = mysqli_query($con,$sql);

// $status = mysqli_query($con,$sql);

// if($result = $mysqli->$query($query)){
while ($row = mysqli_fetch_assoc($status)) {

    echo " <tr> ";
    echo " <td> " . $row["ID"] . "</td>";
    echo " <td> " . $row["FirstName"] . "</td>";
    echo " <td> " . $row["LastName"] . "</td>";
    echo " <td> " . $row["Email"] . "</td>";
    echo " <td> " . $row["Password"] . "</td>";
    echo " <td> " . $row["PhoneNumber"] . "</td>";
    echo " <td> " . $row["UserRole"] . "</td>";
    echo"
        <td>
        <a href='delete.php?abcd=$row[ID]'>D</a>
        </td>";

    // $queue->free();

}

 ?>

</table>