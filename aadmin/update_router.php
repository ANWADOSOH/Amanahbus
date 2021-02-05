<?php
include 'header.php';


$R_ID=$_REQUEST['R_ID'];
$R_name=$_REQUEST['R_name'];




$sql = "UPDATE router SET

R_ID ='$R_ID', 
R_name='$R_name'

 
 
 
WHERE R_ID='$R_ID'";


if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
    $message = 'Update successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"table_N_router.php\");
      </SCRIPT>";




} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
