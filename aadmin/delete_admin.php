<?php
session_start();
include 'header.php';
echo "\n";



$usernames=$_REQUEST['usernames'];
// sql to delete a record
$sql = "DELETE FROM userlogin WHERE usernames=$usernames";

if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
    //header(Location.show_employee.php)
    $message = 'Deleted successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"table_admin.php\");
      </SCRIPT>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>