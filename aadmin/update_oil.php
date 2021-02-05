<?php
include 'header.php';


//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
$numrand = (mt_rand());

$O_ID=$_REQUEST['O_ID'];
$date=$_REQUEST['txt_date'];
$BUS_ID=$_REQUEST['BUS_ID'];
$monny=$_REQUEST['txt_monny'];

$P_oil = (isset($_POST['P_oil']) ? $_POST['P_oil'] : '');
$img2 = $_POST['img2'];
$upload=$_FILES['P_oil']['name'];
if($upload !='') { 

//โฟลเดอร์ที่เก็บไฟล์
$path="../p_img/";
//ตัวขื่อกับนามสกุลภาพออกจากกัน
$type = strrchr($_FILES['P_oil']['name'],".");
//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
$newname =$numrand.$date1.$type;

$path_copy=$path.$newname;
$path_link="../p_img/".$newname;
//คัดลอกไฟล์ไปยังโฟลเดอร์
move_uploaded_file($_FILES['P_oil']['tmp_name'],$path_copy);  
  
}else {
  $newname = $img2;

}



echo "O_ID:".$O_ID;
$sql = "UPDATE oil SET

 
O_date ='$date',
O_monny='$monny',
BUS_ID='$BUS_ID',
P_oil ='$newname'

WHERE O_ID='$O_ID'";


if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
    $message = 'Update successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"table_oil.php\");
      </SCRIPT>";




} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
