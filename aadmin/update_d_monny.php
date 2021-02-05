<?php
include 'header.php';


$date=date("Y-m-d");
date_default_timezone_set('Asia/Bangkok');

$DM_ID=$_REQUEST['DM_ID'];
$level=$_REQUEST['level'];
$DTS_monny=$_REQUEST['monny'];


$sql = "UPDATE detail_monny SET

 
dm_date ='$date',
level='$level',
DTS_monny =$DTS_monny

WHERE DM_ID='$DM_ID'";


if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
    $message = 'Update successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"form_d_monny.php\");
      </SCRIPT>";




} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
