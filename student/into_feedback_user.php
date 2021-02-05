<?php

include('user_header.php');
echo "\n";
$date=date("Y-m-d");
date_default_timezone_set('Asia/Bangkok');
$BUS_ID=$_REQUEST['txtBUS_ID'];

$FEEDBACK=$_REQUEST['txtfeedback'];
$STDY_YR=$_REQUEST['STDY_YR'];
$level=$_REQUEST['level'];


 

$sql = "INSERT INTO feedback(BUS_ID,date,FEEDBACK,STDY_YR,level)
VALUES ('$BUS_ID','$date','$FEEDBACK','$STDY_YR','$level')";

if ($conn->query($sql) === TRUE) {
   //echo "Record updated successfully";

   $message = 'submit successfully';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"user_feedback.php\");
     </SCRIPT>";




} else {
   echo "Error inputing record: " . $conn->error;
}



 ?>