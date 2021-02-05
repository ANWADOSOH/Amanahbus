<?php
session_start();
include 'header.php';
echo "\n";
$STD_ID=$_REQUEST['STD_ID'];
// sql to delete a record
$sql = "DELETE FROM students WHERE STD_ID=$STD_ID";


if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
    //header(Location.show_employee.php) 
    $message = 'Deleted successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"table_students.php\");
      </SCRIPT>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>