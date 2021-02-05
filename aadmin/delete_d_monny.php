<?php
session_start();
include 'header.php';
echo "\n";
$DM_ID=$_REQUEST['DM_ID'];
// sql to delete a record
$sql = "DELETE FROM detail_monny  WHERE DM_ID=$DM_ID";

if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
    //header(Location.show_employee.php)
    $message = 'Deleted successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"form_d_monny.php\");
      </SCRIPT>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>