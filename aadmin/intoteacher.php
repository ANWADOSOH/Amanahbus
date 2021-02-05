<?php

include('header.php');
echo "\n";
// //สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
// $numrand = (mt_rand());

$TCH_ID=$_REQUEST['txttch_id'];
$F_NAME=$_REQUEST['txtfname'];
$LNAME=$_REQUEST['txtlname'];
$PHONE=$_REQUEST['txtphone'];
$SEX=$_REQUEST['txtsex'];
$ADDRES=$_REQUEST['txtaddres'];
$ID_NUMBER=$_REQUEST['txtid_number'];

$AGE=$_REQUEST['txtage'];
$B_DAY=$_REQUEST['txtb_day'];
$BUS_ID=$_REQUEST['txtBUS_ID'];
$P_TCH=$_REQUEST['P_TCH'];



 

$sql = "INSERT INTO teacher(TCH_ID,T_NAME,T_LNAME,T_PHONE,SEX,ADDRES,ID_NUMBER,P_TCH,AGE,B_DAY,BUS_ID)
VALUES ('$TCH_ID','$F_NAME','$LNAME','$PHONE','$SEX','$ADDRES','$ID_NUMBER','$P_TCH','$AGE','$B_DAY','$BUS_ID')";









 if (($conn->query($sql) === TRUE)  ) {
   //echo "Record updated successfully";

   $message = 'submit successfully';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"table_tch.php\");
     </SCRIPT>";




} else {
   echo "Error inputing record: " . $conn->error;
   $message = 'รหัสผู้ใช้งานนี้ นี้ได้ถูกใช้งานเเล้ว';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"fromteacher.php\");
     </SCRIPT>";
}


 ?>