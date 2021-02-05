<?php
session_start();
include 'user_header.php';
echo "\n";
$rigis_ID=$_REQUEST['rigis_ID'];
// sql to delete a record
$sql = "DELETE FROM registration WHERE rigis_ID=$rigis_ID";


if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
    //header(Location.show_employee.php) 
    $message = 'Deleted successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"user_table_rigis_std.php\");
      </SCRIPT>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>