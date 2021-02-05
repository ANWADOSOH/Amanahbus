<?php

include('header.php');
echo "\n";
// //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
// date_default_timezone_set('Asia/Bangkok');
// 	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
// 	$date1 = date("Ymd_His");
// 	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
// 	$numrand = (mt_rand());
// 	//รับค่าไฟล์จากฟอร์ม

$STD_ID=$_REQUEST['txtstd_id'];
$F_name=$_REQUEST['txtfname'];
$LNAME=$_REQUEST['txtlname'];
$PHONE=$_REQUEST['txtphone'];
$SEX=$_REQUEST['txtsex'];
$ADDRES=$_REQUEST['txtaddres'];
$ID_NUMBER=$_REQUEST['txtid_number'];

$DISEASE=$_REQUEST['txtdisease'];
$AGE=$_REQUEST['txtage'];
$B_DAY=$_REQUEST['txtb_day'];

$P_name=$_REQUEST['P_name'];
$P_lname=$_REQUEST['P_lname'];
$P_ID=$_REQUEST['P_ID'];

$newname=$_REQUEST['P_STD'];


// $P_STD =(isset($_REQUEST['P_STD']) ? $_REQUEST['P_STD'] :'');
// //img
// 	$upload=$_FILES['P_STD'];
// 	if($upload <> '') {

// 	//โฟลเดอร์ที่เก็บไฟล์
// 	$path="../p_img";
// 	//ตัวขื่อกับนามสกุลภาพออกจากกัน
// 	$type = strrchr($_FILES['P_STD']['name'],".");
// 	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
// 	$newname ='P_STD'.$numrand.$date1.$type;
// 	$path_copy=$path.$newname;
// 	$path_link="../p_img".$newname;
// 	//คัดลอกไฟล์ไปยังโฟลเดอร์
// 	move_uploaded_file($_FILES['P_STD']['tmp_name'],$path_copy);
// 	}
// 	// เพิ่มไฟล์เข้าไปในตาราง uploadfile


 

$sql = "INSERT INTO students(STD_ID,F_name,LNAME,PHONE,SEX,ADDRES,ID_NUMBER,P_STD,DISEASE,AGE,B_DAY,P_name,P_lname,P_ID)
VALUES ('$STD_ID','$F_name','$LNAME','$PHONE','$SEX','$ADDRES','$ID_NUMBER','$newname','$DISEASE','$AGE',
'$B_DAY','$P_name','$P_lname','$P_ID')";
         
       
           


           


              if (($conn->query($sql) === TRUE)  )  {
   //echo "Record updated successfully";

   $message = 'submit successfully';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"table_students.php\");
     </SCRIPT>";




} else {
   echo "Error inputing record: " . $conn->error;
   $message = 'ตรวจสอบข้อมูลอีกครั้ง';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"fromstudent.php\");
     </SCRIPT>";
}



 ?>