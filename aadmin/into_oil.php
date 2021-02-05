<?php

include('header.php');
echo "\n";
// //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
// date_default_timezone_set('Asia/Bangkok');
// 	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date1 = date("Ymd_His");
	// //สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	 $numrand = (mt_rand());
	//รับค่าไฟล์จากฟอร์ม

$BUS_ID=$_REQUEST['txtBUS_ID'];
$MONNY=$_REQUEST['txt_monny'];
$date = $_REQUEST['txt_date']; 
$newname = $_REQUEST['P_oil']; 

// $P_oil=(isset($_POST['P_oil']) ? $_POST['P_oil'] :'');
// //img
// 	$upload=$_FILES['P_oil'];
// 	if($upload <> '') {

// 	//โฟลเดอร์ที่เก็บไฟล์
// 	$path="../p_img";
// 	//ตัวขื่อกับนามสกุลภาพออกจากกัน
// 	$type = strrchr($_FILES['P_oil']['name'],".");
// 	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
// 	$newname ='P_oil'.$numrand.$date1.$type;
// 	$path_copy=$path.$newname;
// 	$path_link="../p_img".$newname;
// 	//คัดลอกไฟล์ไปยังโฟลเดอร์
// 	move_uploaded_file($_FILES['p_oil']['tmp_name'],$path_copy);
// 	}



 

$sql = "INSERT INTO oil(BUS_ID,O_monny,O_date,P_oil)
VALUES ('$BUS_ID','$MONNY','$date','$newname')";









 if (($conn->query($sql) === TRUE)  ) {
   //echo "Record updated successfully";

   $message = 'submit successfully';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"table_oil.php\");
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