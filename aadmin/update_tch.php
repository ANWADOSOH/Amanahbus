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
$TCH_ID=$_REQUEST['TCH_ID'];
$F_NAME=$_REQUEST['F_NAME'];
$LNAME=$_REQUEST['LNAME'];
$ID_NUMBER=$_REQUEST['ID_NUMBER'];
$B_DAY=$_REQUEST['B_DAY'];
$AGE=$_REQUEST['AGE'];
$SEX=$_REQUEST['SEX'];
$PHONE=$_REQUEST['PHONE'];
$ADDRES=$_REQUEST['ADDRES'];
// $P_TCH=$_REQUEST['P_TCH'];
$BUS_ID=$_REQUEST['BUS_ID'];

$P_TCH = (isset($_POST['P_TCH']) ? $_POST['P_TCH'] : '');
$img2 = $_POST['img2'];
$upload=$_FILES['P_TCH']['name'];
if($upload !='') { 

//โฟลเดอร์ที่เก็บไฟล์
$path="../p_img/";
//ตัวขื่อกับนามสกุลภาพออกจากกัน
$type = strrchr($_FILES['P_TCH']['name'],".");
//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
$newname =$numrand.$date1.$type;

$path_copy=$path.$newname;
$path_link="../p_img/".$newname;
//คัดลอกไฟล์ไปยังโฟลเดอร์
move_uploaded_file($_FILES['P_TCH']['tmp_name'],$path_copy);  
    
}else {
    $newname = $img2;

}

$sql = "UPDATE teacher SET

 T_NAME ='$F_NAME',
 T_LNAME ='$LNAME',  

 ID_NUMBER ='$ID_NUMBER',
 B_DAY ='$B_DAY',
 AGE ='$AGE',
 SEX ='$SEX',
 T_PHONE ='$PHONE',
 ADDRES ='$ADDRES',
 P_TCH ='$newname',
 BUS_ID='$BUS_ID'

WHERE TCH_ID='$TCH_ID'";


if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
    $message = 'Update successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"table_tch.php\");
      </SCRIPT>";




} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
