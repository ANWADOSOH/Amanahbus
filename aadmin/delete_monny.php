<?php
session_start();
include 'header.php';
echo "\n";
$MNY_ID=$_REQUEST['MNY_ID'];
// sql to delete a record
$sql = "DELETE FROM monny WHERE MNY_ID=$MNY_ID";

if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
    //header(Location.show_employee.php)
    $message = 'Deleted successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"monny.php\");
      </SCRIPT>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>