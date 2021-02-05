<?php

include('header.php');
echo "\n";

$BUS_ID=$_REQUEST['BUS_ID'];
$R_ID=$_REQUEST['R_ID'];
$place1=$_REQUEST['txtp1'];
$place2=$_REQUEST['txtp2'];
$place3=$_REQUEST['txtp3'];




 

$sql = "INSERT INTO detail_router(BUS_ID,R_ID,place1,place2,place3)
VALUES ('$BUS_ID','$R_ID','$place1','$place2','$place3')";

if ($conn->query($sql) === TRUE) {
   //echo "Record updated successfully";

   $message = 'submit successfully';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"table_router.php\");
     </SCRIPT>";




} else {
   echo "Error inputing record: " . $conn->error;
}



 ?>