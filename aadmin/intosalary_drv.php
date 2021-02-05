<?php

include('header.php');
echo "\n";

$S_date=date("Y-m-d");
date_default_timezone_set('Asia/Bangkok');
$DRV_ID=$_REQUEST['DRV_ID'];
$SALARY_NUM=$_REQUEST['SALARY_NUM'];
$mon=$_REQUEST['mon'];
 
echo $mon;
$sql = "INSERT INTO salary(DRV_ID,SALARY_NUM,S_date,mon)
VALUES ('$DRV_ID','$SALARY_NUM','$S_date','$mon')";

if ($conn->query($sql) === TRUE) {
   //echo "Record updated successfully";

   $message = 'submit successfully';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"table_work_drv.php\");
     </SCRIPT>";




} else {
   echo "Error inputing record: " . $conn->error;
}



 ?>