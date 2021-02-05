<?php
include 'header.php';

$ROU_ID=$_REQUEST['ROU_ID'];
$R_ID=$_REQUEST['R_ID'];
$BUS_ID=$_REQUEST['BUS_ID'];
$place1=$_REQUEST['txtp1'];
$place2=$_REQUEST['txtp2'];
$place3=$_REQUEST['txtp3'];

echo "ROU_ID:".$ROU_ID;

$sql = "UPDATE detail_router SET

R_ID ='$R_ID', 
BUS_ID='$BUS_ID',
place1 ='$place1',  
place2 ='$place2',
place3 ='$place3'
 
 
 
WHERE ROU_ID='$ROU_ID'";


if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
    $message = 'Update successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"table_router.php\");
      </SCRIPT>";




} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
