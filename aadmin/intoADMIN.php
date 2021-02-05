<?php

include('header.php');
echo "\n";

$user=$_REQUEST['user'];
$A_name=$_REQUEST['name'];
$A_lname=$_REQUEST['lname'];
$pass=$_REQUEST['pass'];



$sql = "INSERT INTO userlogin (usernames,password,A_name,A_lname)
VALUES('$user','$pass','$A_name','$A_lname')";






 if (($conn->query($sql) === TRUE)  ) {
   //echo "Record updated successfully";

   $message = 'submit successfully';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"table_admin.php\");
     </SCRIPT>";




} else {
   echo "Error inputing record: " . $conn->error;
   $message = 'โปรดตรวจสอบข้อมูล';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"formADMIN.php\");
     </SCRIPT>";
}



 ?>