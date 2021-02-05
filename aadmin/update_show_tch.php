<?php
include 'user_header1.php';
$TCH_ID=$_REQUEST['TCH_ID'];
$F_NAME=$_REQUEST['F_NAME'];
$LNAME=$_REQUEST['LNAME'];
$ID_NUMBER=$_REQUEST['ID_NUMBER'];
$B_DAY=$_REQUEST['B_DAY'];
$AGE=$_REQUEST['AGE'];
$SEX=$_REQUEST['SEX'];
$PHONE=$_REQUEST['PHONE'];
$ADDRES=$_REQUEST['ADDRES'];
$P_TCH=$_REQUEST['P_TCH'];
$BUS_ID=$_REQUEST['BUS_ID'];


echo "TCH_ID:".$TCH_ID;
$sql = "UPDATE teacher SET

 F_NAME ='$F_NAME',
 LNAME ='$LNAME',  
 LNAME ='$LNAME',
 ID_NUMBER ='$ID_NUMBER',
 B_DAY ='$B_DAY',
 AGE ='$AGE',
 SEX ='$SEX',
 PHONE ='$PHONE',
 ADDRES ='$ADDRES',
 P_TCH ='$P_TCH',
 BUS_ID='$BUS_ID'

WHERE TCH_ID='$TCH_ID'";


if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
    $message = 'Update successfully';
    echo "<SCRIPT type='text/javascript'> //not showing me this
      alert('$message');
      window.location.replace(\"user_show1.php\");
      </SCRIPT>";




} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
