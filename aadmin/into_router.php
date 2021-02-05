<?php

include('header.php');
echo "\n";


$R_name=$_REQUEST['router'];





 

$sql = "INSERT INTO router(R_name)
VALUES ('$R_name')";

if ($conn->query($sql) === TRUE) {
   //echo "Record updated successfully";

   $message = 'submit successfully';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"table_N_router.php\");
     </SCRIPT>";




} else {
   echo "Error inputing record: " . $conn->error;
}



 ?>