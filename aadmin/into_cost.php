<?php

include('header.php');
echo "\n";
$date=date("Y-m-d");
date_default_timezone_set('Asia/Bangkok');
$STDY_YR=$_REQUEST['STDY_YR'];
$STD_ID=$_REQUEST['STD_ID'];
$mon=$_REQUEST['mon'];
$monny=$_REQUEST['C_monny'];



$sql = "INSERT INTO cost(STDY_YR,STD_ID,mon,C_date,monny)
VALUES ('$STDY_YR','$STD_ID','$mon','$date','$monny')";

if ($conn->query($sql) === TRUE) {
   //echo "Record updated successfully";

   $message = 'submit successfully';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"table_cost.php\");
     </SCRIPT>";




} else {
   echo "Error inputing record: " . $conn->error;
}



 ?>