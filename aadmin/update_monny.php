<?php
include 'header.php';


$date=date("Y-m-d");
date_default_timezone_set('Asia/Bangkok');


$MNY_ID=$_REQUEST['MNY_ID'];
$mon=$_REQUEST['mon'];
$STDY_YR=$_REQUEST['STDY_YR'];
$day=$_REQUEST['day'];



echo "MNY_ID:".$MNY_ID;
$sql = "UPDATE monny SET

 
date ='$date',

mon='$mon',
STDY_YR ='$STDY_YR',
day='$day'
WHERE MNY_ID='$MNY_ID'";


if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
    $message = 'Update successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"monny.php\");
      </SCRIPT>";




} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
