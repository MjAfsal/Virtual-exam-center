<table border = 1px>
    <tr>
        <th>START TIME</th>
        <th>DATE</th>
        <th>START TIME</th>
        <th>END TIME</th>
        <th>Delete</th>
        
        
    </tr>
<?php 

include 'co.php';

$sql =  "SELECT * FROM `lecture` ";

$status = mysqli_query($con,$sql);

// $status = mysqli_query($con,$sql);

// if($result = $mysqli->$query($query)){
while ($row = mysqli_fetch_assoc($status)) {

    echo " <tr> ";
    echo " <td> " . $row["ExamTitle"] . "</td>";
    echo " <td> " . $row["StartDate"] . "</td>";
    echo " <td> " . $row["StartTime"] . "</td>";
    echo " <td> " . $row["EndTime"] . "</td>";
    echo"
        <td>
        <a href='delete.php?abcd=$row[ExamTitle]'>Delete</a>
        </td>";
    
    // $queue->free();

}

// ?>
// <?php




?>
</table>