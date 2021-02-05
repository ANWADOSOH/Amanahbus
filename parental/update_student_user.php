<?php
include 'user_header.php';




//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
$numrand = (mt_rand());
	
//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
	
	
    $STD_ID=$_REQUEST['STD_ID'];
$F_name=$_REQUEST['F_name'];
$LNAME=$_REQUEST['LNAME'];
$ID_NUMBER=$_REQUEST['ID_NUMBER'];
$B_DAY=$_REQUEST['B_DAY'];
$AGE=$_REQUEST['AGE'];
$SEX=$_REQUEST['SEX'];
$PHONE=$_REQUEST['PHONE'];
$DISEASE=$_REQUEST['DISEASE'];
$ADDRES=$_REQUEST['ADDRES'];

    $P_STD = (isset($_POST['P_STD']) ? $_POST['P_STD'] : '');
	$img2 = $_POST['img2'];
	$upload=$_FILES['P_STD']['name'];
	if($upload !='') { 
 
	//โฟลเดอร์ที่เก็บไฟล์
	$path="../p_img/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['P_STD']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname =$numrand.$date1.$type;
 
	$path_copy=$path.$newname;
	$path_link="../p_img/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['P_STD']['tmp_name'],$path_copy);  
		
	}else {
		$newname = $img2;
	
	}


echo "STD_ID:".$STD_ID;
$sql = "UPDATE students SET

 F_name ='$F_name',
 LNAME ='$LNAME',  
 LNAME ='$LNAME',
 ID_NUMBER ='$ID_NUMBER',
 B_DAY ='$B_DAY',
 AGE ='$AGE',
 SEX ='$SEX',
 PHONE ='$PHONE',
 DISEASE ='$DISEASE',
 ADDRES ='$ADDRES',
 P_STD ='$newname'
 
WHERE STD_ID='$STD_ID'";


if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
    $message = 'Update successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"user_show.php\");
      </SCRIPT>";




} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
