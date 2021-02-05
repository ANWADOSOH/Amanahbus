<?php

include('header.php');
echo "\n";
$date=date("Y-m-d");
date_default_timezone_set('Asia/Bangkok');

$level=$_REQUEST['level'];
$monny=$_REQUEST['monny'];




$sql = "INSERT INTO detail_monny(level,DTS_monny,dm_date)
VALUES ('$level','$monny','$date')";

if ($conn->query($sql) === TRUE) {
   //echo "Record updated successfully";

   $message = 'submit successfully';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"form_d_monny.php\");
     </SCRIPT>";




} else {
   echo "Error inputing record: " . $conn->error;
}



 ?>