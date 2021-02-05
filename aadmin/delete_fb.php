<?php
session_start();
include 'header.php';
echo "\n";
$F_ID=$_REQUEST['F_ID'];
// sql to delete a record
$sql = "DELETE FROM feedback WHERE F_ID=$F_ID";

if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
    //header(Location.show_employee.php)
    $message = 'Deleted successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"table_feedback.php\");
      </SCRIPT>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>