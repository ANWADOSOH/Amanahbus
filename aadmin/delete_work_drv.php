<?php
session_start();
include 'header.php';
echo "\n";
$W_ID=$_REQUEST['W_ID'];
// sql to delete a record
$sql = "DELETE FROM worktimedrv WHERE W_ID=$W_ID";

if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
    //header(Location.show_employee.php)
    $message = 'Deleted successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"table_work_drv.php\");
      </SCRIPT>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>