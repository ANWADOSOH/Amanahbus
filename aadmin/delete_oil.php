<?php
session_start();
include 'header.php';
echo "\n";
$O_ID=$_REQUEST['O_ID'];
// sql to delete a record
$sql = "DELETE FROM oil WHERE O_ID=$O_ID";

if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
    //header(Location.show_employee.php)
    $message = 'Deleted successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"table_oil.php\");
      </SCRIPT>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>