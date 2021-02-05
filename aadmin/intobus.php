<?php

include('header.php');
echo "\n";
// //สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
// $numrand = (mt_rand());


$BUS_ID=$_REQUEST['txtBUS_ID'];
$RIGIS_NUMBER=$_REQUEST['txtrgisid'];
$COLOR=$_REQUEST['txtfclr'];
$BRAND=$_REQUEST['txtbrname'];
$B_num=$_REQUEST['B_num'];
$newname = $_REQUEST['P_BUS'];;

// $P_BUS = (isset($_POST['P_BUS']) ? $_POST['P_BUS'] : '');
// $img2 = $_POST['img2'];
// $upload=$_FILES['P_BUS']['name'];
// if($upload !='') { 

// //โฟลเดอร์ที่เก็บไฟล์
// $path="../p_img/";
// //ตัวขื่อกับนามสกุลภาพออกจากกัน
// $type = strrchr($_FILES['P_BUS']['name'],".");
// //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
// $newname =$numrand.$date1.$type;

// $path_copy=$path.$newname;
// $path_link="../p_img/".$newname;
// //คัดลอกไฟล์ไปยังโฟลเดอร์
// move_uploaded_file($_FILES['P_BUS']['tmp_name'],$path_copy);  
  
// }else {
//   $newname = $img2;

// }




 

$sql = "INSERT INTO bus(BUS_ID,RIGIS_NUMBER,COLOR,BRAND,P_BUS,B_num)
VALUES ('$BUS_ID','$RIGIS_NUMBER','$COLOR','$BRAND','$newname','$B_num')";

if ($conn->query($sql) === TRUE) {
   //echo "Record updated successfully";

   $message = 'submit successfully';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"table_bus.php\");
     </SCRIPT>";




} else {
   echo "Error inputing record: " . $conn->error;
   $message = 'หมายเลขรถ นี้ได้ถูกใช้งานเเล้ว';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"frombus.php\");
     </SCRIPT>";

}



 ?>