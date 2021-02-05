<?php
include 'user_header2.php';

//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
$numrand = (mt_rand());
	
//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม

$DRV_ID=$_REQUEST['DRV_ID'];
$D_NAME=$_REQUEST['D_NAME'];
$D_LNAME=$_REQUEST['D_LNAME'];
$ID_NUMBER=$_REQUEST['ID_NUMBER'];
$LICEN_ID=$_REQUEST['LICEN_ID'];
$B_DAY=$_REQUEST['B_DAY'];
$AGE=$_REQUEST['AGE'];
$SEX=$_REQUEST['SEX'];
$PHONE=$_REQUEST['PHONE'];
$ADDRES=$_REQUEST['ADDRES'];
$BUS_ID=$_REQUEST['BUS_ID'];

$P_DRV = (isset($_POST['P_DRV']) ? $_POST['P_DRV'] : '');
$img2 = $_POST['img2'];
$upload=$_FILES['P_DRV']['name'];
if($upload !='') { 

//โฟลเดอร์ที่เก็บไฟล์
$path="../p_img/";
//ตัวขื่อกับนามสกุลภาพออกจากกัน
$type = strrchr($_FILES['P_DRV']['name'],".");
//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
$newname =$numrand.$date1.$type;

$path_copy=$path.$newname;
$path_link="../p_img/".$newname;
//คัดลอกไฟล์ไปยังโฟลเดอร์
move_uploaded_file($_FILES['P_DRV']['tmp_name'],$path_copy);  
    
}else {
    $newname = $img2;

}


echo "DRV_ID:".$DRV_ID;
$sql = "UPDATE driver SET

 D_NAME ='$D_NAME',
 D_LNAME ='$D_LNAME',  
 ID_NUMBER ='$ID_NUMBER',
 LICEN_ID ='$LICEN_ID',
 B_DAY ='$B_DAY',
 AGE ='$AGE',
 SEX ='$SEX',
 PHONE ='$PHONE',
 ADDRES ='$ADDRES',
 P_DRV ='$newname',
 BUS_ID='$BUS_ID'

WHERE DRV_ID='$DRV_ID'";


if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
    $message = 'Update successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"user_show2.php\");
      </SCRIPT>";




} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
