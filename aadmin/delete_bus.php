<?php
session_start();
include 'header.php';
echo "\n";
$BUS_ID=$_REQUEST['BUS_ID'];
// sql to delete a record
$sql = "DELETE FROM bus WHERE BUS_ID=$BUS_ID";

if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
    //header(Location.show_employee.php)
    $message = 'Deleted successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"table_bus.php\");
      </SCRIPT>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>