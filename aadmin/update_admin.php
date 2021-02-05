<?php
include 'header.php';



$usernames=$_REQUEST['user'];
$password=$_REQUEST['pass'];
$A_name=$_REQUEST['name'];
$A_lname=$_REQUEST['lname'];





$sql = "UPDATE userlogin SET

A_name ='$A_name',
A_lname ='$A_lname',  
password ='$password'

 
WHERE usernames='$usernames'";


if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
    $message = 'Update successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"table_admin.php\");
      </SCRIPT>";




} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
