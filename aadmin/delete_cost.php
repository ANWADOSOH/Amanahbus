<?php
session_start();
include 'header.php';
echo "\n";
$COS_ID=$_REQUEST['COS_ID'];
// sql to delete a record
$sql = "DELETE FROM cost WHERE COS_ID=$COS_ID";

if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
    //header(Location.show_employee.php)
    $message = 'Deleted successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"table_cost.php\");
      </SCRIPT>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>