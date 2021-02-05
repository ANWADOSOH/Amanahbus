<?php

include('header.php');
echo "\n";
$date=date("Y-m-d");
date_default_timezone_set('Asia/Bangkok');
$STDY_YR=$_REQUEST['STDY_YR'];
$day=$_REQUEST['day'];
$mon=$_REQUEST['mon'];




$sql = "INSERT INTO monny(STDY_YR,mon,date,day)
VALUES ('$STDY_YR','$mon','$date','$day')";

if ($conn->query($sql) === TRUE) {
   //echo "Record updated successfully";

   $message = 'submit successfully';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"monny.php\");
     </SCRIPT>";




} else {
   echo "Error inputing record: " . $conn->error;
}



 ?>