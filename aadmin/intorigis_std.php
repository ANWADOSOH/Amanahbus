<?php

include('header.php');
echo "\n";

$date=date("Y-m-d");
date_default_timezone_set('Asia/Bangkok');
$size=1;
$STD_ID=$_REQUEST['txtstd_id'];
$BUS_ID=$_REQUEST['txtBUS_ID'];
$STDY_YR=$_REQUEST['txtSTD_YR'];
$CLASS=$_REQUEST['txtCLASS'];
$ROOM=$_REQUEST['txtROOM'];
$zone=$_REQUEST['txtzone'];

$i=0;

if($_REQUEST['txtBUS_ID']){

  $sql3 = "SELECT * FROM bus
  where BUS_ID='$BUS_ID'
and B_num='$i' ";
$result = $conn->query($sql3);



} if ($result->num_rows > 0) {


  echo "รถเต็วเเล้ว";
  echo "Error inputing record: " . $conn->error;
  $message = 'หรัสผู้ใช้งาน นี้ได้ถูกใช้งานเเล้ว';
  echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"table_students.php\");
      </SCRIPT>";

    
}  else{


$sql = "INSERT INTO registration(date,STD_ID,BUS_ID,STDY_YR,CLASS,ROOM,zone)
VALUES ('$date','$STD_ID','$BUS_ID','$STDY_YR','$CLASS','$ROOM',$zone)";





// ลดจำนวนนักเรียนในคลาส

$sql2 = "UPDATE  bus
SET      B_num = B_num-$size   -- pro_amount ในตาราง product   amount ในตารางขาย
WHERE bus.BUS_ID = $BUS_ID ";

$query2 = mysqli_query($conn, $sql2);







if ($conn->query($sql) === TRUE) {
   //echo "Record updated successfully";

   $message = 'submit successfully';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     
     window.location.replace(\"table_rigis_std.php\");
     </SCRIPT>";

    

} else {
   echo "Error inputing record: " . $conn->error;
   $message = 'หรัสผู้ใช้งาน นี้ได้ถูกใช้งานเเล้ว';
   echo "<SCRIPT type='text/javascript'> //not showing me this
     alert('$message');
     window.location.replace(\"table_students.php\");
     </SCRIPT>";
}





}

 ?>