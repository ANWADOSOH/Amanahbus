<?php
session_start();
include 'header.php';
echo "\n";
$DRV_ID=$_REQUEST['DRV_ID'];
// sql to delete a record
$sql = "DELETE FROM driver WHERE DRV_ID=$DRV_ID";

if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
    //header(Location.show_employee.php)
    $message = 'Deleted successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"table_driver.php\");
      </SCRIPT>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>