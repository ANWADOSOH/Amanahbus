<?php

include('header.php');
echo "\n";
//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
$numrand = (mt_rand());


$DRV_ID=$_REQUEST['txtdrv_id'];
$D_NAME=$_REQUEST['txtfname'];
$D_LNAME=$_REQUEST['txtlname'];
$PHONE=$_REQUEST['txtphone'];
$SEX=$_REQUEST['txtsex'];
$ADDRES=$_REQUEST['txtaddres'];
$ID_NUMBER=$_REQUEST['txtid_number'];
$LICEN_ID=$_REQUEST['txtid_licen'];

$AGE=$_REQUEST['txtage'];
$B_DAY=$_REQUEST['txtb_day'];
$BUS_ID=$_REQUEST['txtBUS_ID'];

$newname=$_REQUEST['P_DRV'];
// $P_DRV = (isset($_POST['P_DRV']) ? $_POST['P_DRV'] : '');
// $img2 = $_POST['img2'];
// $upload=$_FILES['P_DRV']['name'];
// if($upload !='') { 

// //โฟลเดอร์ที่เก็บไฟล์
// $path="../p_img/";
// //ตัวขื่อกับนามสกุลภาพออกจากกัน
// $type = strrchr($_FILES['P_DRV']['name'],".");
// //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
// $newname =$numrand.$date1.$type;

// $path_copy=$path.$newname;
// $path_link="../p_img/".$newname;
// //คัดลอกไฟล์ไปยังโฟลเดอร์
// move_uploaded_file($_FILES['P_DRV']['tmp_name'],$path_copy);  
  
// }else {
//   $newname = $img2;

// }


 

$sql = "INSERT INTO driver(DRV_ID,D_NAME,D_LNAME,PHONE,SEX,ADDRES,ID_NUMBER,LICEN_ID,P_DRV,AGE,B_DAY,BUS_ID)
VALUES ('$DRV_ID','$D_NAME','$D_LNAME','$PHONE','$SEX','$ADDRES','$ID_NUMBER','$LICEN_ID','$newname','$AGE','$B_DAY','$BUS_ID')";









 if (($conn->query($sql) === TRUE)  ) {
   //echo "Record updated successfully";

   $message = 'submit successfully';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"table_driver.php\");
     </SCRIPT>";




} else {
   echo "Error inputing record: " . $conn->error;
   $message = 'รหัสผู้ใช้งาน นี้ได้ถูกใช้งานเเล้ว';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"fromdriver.php\");
     </SCRIPT>";
}



 ?>