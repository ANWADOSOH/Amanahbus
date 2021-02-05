<?php

include('header.php');
echo "\n";

$STD_ID=$_REQUEST['txtstd_id'];
$F_name=$_REQUEST['txtfname'];
$LNAME=$_REQUEST['txtlname'];
$PHONE=$_REQUEST['txtphone'];
$SEX=$_REQUEST['txtsex'];
$ADDRES=$_REQUEST['txtaddres'];
$ID_NUMBER=$_REQUEST['txtid_number'];
$P_STD=$_REQUEST['txtp_std'];
$DISEASE=$_REQUEST['txtdisease'];
$AGE=$_REQUEST['txtage'];
$B_DAY=$_REQUEST['txtb_day'];




 

$sql = "INSERT INTO students(STD_ID,F_name,LNAME,PHONE,SEX,ADDRES,ID_NUMBER,P_STD,DISEASE,AGE,B_DAY)
VALUES ('$STD_ID','$F_name','$LNAME','$PHONE','$SEX','$ADDRES','$ID_NUMBER','$P_STD','$DISEASE','$AGE',
'$B_DAY')";
         
       
             $sql1 = "INSERT INTO userlogin (usernames,password,level)
             VALUES('$STD_ID','$ID_NUMBER','A')";



           


              if (($conn->query($sql) === TRUE) && ($conn->query($sql1) === TRUE) )  {
   //echo "Record updated successfully";

   $message = 'submit successfully';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"table_students.php\");
     </SCRIPT>";




} else {
   echo "Error inputing record: " . $conn->error;
   $message = 'หรัสผู้ใช้งาน นี้ได้ถูกใช้งานเเล้ว';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"fromstudent.php\");
     </SCRIPT>";
}



 ?>