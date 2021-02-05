<?php
session_start();
include 'header.php';
echo "\n";
$rigis_ID=$_REQUEST['rigis_ID'];





$sql3 = "SELECT * FROM registration
WHERE rigis_ID ='$rigis_ID'

 ";
$result = $conn->query($sql3);
while ($row = $result->fetch_assoc()) { 
  
$BUS_ID= $row["BUS_ID"];
}




$size=1;
$sql2 = "UPDATE  bus
SET      B_num = B_num+$size   

WHERE BUS_ID = $BUS_ID ";
$query2 = mysqli_query($conn, $sql2);




// sql to delete a record
$sql = "DELETE FROM registration WHERE rigis_ID=$rigis_ID";






if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
    //header(Location.show_employee.php) 
    $message = 'Deleted successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"table_rigis_std.php\");
      </SCRIPT>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>