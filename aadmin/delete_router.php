<?php
session_start();
include 'header.php';
echo "\n";
$R_ID=$_REQUEST['R_ID'];
// sql to delete a record
$sql = "DELETE FROM router WHERE R_ID=$R_ID";

if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
    //header(Location.show_employee.php)
    $message = 'Deleted successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"table_N_router.php\");
      </SCRIPT>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>