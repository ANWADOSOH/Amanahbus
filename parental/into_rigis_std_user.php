<?php

include('user_header.php');
echo "\n";

$date=date("Y-m-d");
date_default_timezone_set('Asia/Bangkok');

$STD_ID=$_REQUEST['txtstd_id'];
$BUS_ID=$_REQUEST['txtBUS_ID'];
$STDY_YR=$_REQUEST['txtSTD_YR'];
$CLASS=$_REQUEST['txtCLASS'];
$ROOM=$_REQUEST['txtROOM'];
$zone=$_REQUEST['txtzone'];




 

$sql = "INSERT INTO registration(date,STD_ID,BUS_ID,STDY_YR,CLASS,ROOM,zone)
VALUES ('$date','$STD_ID','$BUS_ID','$STDY_YR','$CLASS','$ROOM',$zone)";






if ($conn->query($sql) === TRUE) {
   //echo "Record updated successfully";

   $message = 'submit successfully';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     
     window.location.replace(\"user_table_rigis_std.php\");
     </SCRIPT>";

    

} else {
   echo "Error inputing record: " . $conn->error;
   $message = 'หรัสผู้ใช้งาน นี้ได้ถูกใช้งานเเล้ว';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"table_students.php\");
     </SCRIPT>";
}



 ?>