<?php
session_start();
include 'header.php';
echo "\n";
$TCH_ID=$_REQUEST['TCH_ID'];
// sql to delete a record
$sql = "DELETE FROM teacher WHERE TCH_ID=$TCH_ID";

if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
    //header(Location.show_employee.php)
    $message = 'Deleted successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"table_tch.php\");
      </SCRIPT>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>