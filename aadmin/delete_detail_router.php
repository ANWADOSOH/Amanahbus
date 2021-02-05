<?php
session_start();
include 'header.php';
echo "\n";
$ROU_ID=$_REQUEST['ROU_ID'];
// sql to delete a record
$sql = "DELETE FROM detail_router WHERE ROU_ID=$ROU_ID";

if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
    //header(Location.show_employee.php)
    $message = 'Deleted successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"table_router.php\");
      </SCRIPT>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>