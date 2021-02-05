<?php
include 'header.php';

//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
$numrand = (mt_rand());
	
//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม

$BUS_ID=$_REQUEST['BUS_ID'];
$BRAND=$_REQUEST['BRAND'];
$RIGIS_NUMBER=$_REQUEST['RIGIS_NUMBER'];
$COLOR=$_REQUEST['COLOR'];
$B_num=$_REQUEST['B_num'];
// $P_BUS=$_REQUEST['P_BUS'];

$P_BUS = (isset($_POST['P_BUS']) ? $_POST['P_BUS'] : '');
$img2 = $_POST['img2'];
$upload=$_FILES['P_BUS']['name'];
if($upload !='') { 

//โฟลเดอร์ที่เก็บไฟล์
$path="../p_img/";
//ตัวขื่อกับนามสกุลภาพออกจากกัน
$type = strrchr($_FILES['P_BUS']['name'],".");
//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
$newname =$numrand.$date1.$type;

$path_copy=$path.$newname;
$path_link="../p_img/".$newname;
//คัดลอกไฟล์ไปยังโฟลเดอร์
move_uploaded_file($_FILES['P_BUS']['tmp_name'],$path_copy);  
    
}else {
    $newname = $img2;

}

$sql = "UPDATE bus SET

 
 BRAND ='$BRAND',  
 RIGIS_NUMBER ='$RIGIS_NUMBER',
 COLOR ='$COLOR',
 P_BUS ='$newname',
 B_num='$B_num'
 
 
WHERE BUS_ID='$BUS_ID'";


if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
    $message = 'Update successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"table_bus.php\");
      </SCRIPT>";




} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
