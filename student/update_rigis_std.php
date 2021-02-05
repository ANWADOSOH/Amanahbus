<?php
include 'user_header.php';

$date=date("Y-m-d");
date_default_timezone_set('Asia/Bangkok');
$rigis_ID=$_REQUEST['rigis_ID'];
$BUS_ID=$_REQUEST['BUS_ID'];
$CLASS=$_REQUEST['CLASS'];
$ROOM=$_REQUEST['ROOM'];
$STDY_YR=$_REQUEST['STDY_YR'];


echo "rigis_ID:".$rigis_ID;
$sql = "UPDATE registration SET
rigis_ID='$rigis_ID',
date='$date',
 BUS_ID='$BUS_ID',
 CLASS='$CLASS',
 ROOM='$ROOM',
STDY_YR='$STDY_YR'

WHERE rigis_ID='$rigis_ID'";


if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
    $message = 'Update successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"user_table_rigis_std.php\");
      </SCRIPT>";




} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>