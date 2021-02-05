

<?php

  include('user_header1.php'); //เชื่อม Data Base


  $STATUS=$_REQUEST['status'];
  $STD_ID=$_REQUEST['STD_ID'];
  $DAY=date("Y-m-d");
  date_default_timezone_set('Asia/Bangkok');



  $sql = "INSERT INTO updown (STATUS,STD_ID,DAY)
  VALUES (' $STATUS','$STD_ID','$DAY')";
  
  
  
  
  
  
  if ($conn->query($sql) === TRUE) {
     //echo "Record updated successfully";
  
     $message = 'submit successfully';
     echo "<SCRIPT type='text/javascript'> //not showing me this
       alert('$message');
       
       window.location.replace(\"up_doun.php\");
       </SCRIPT>";
  
      








      
  
  } else {
     echo "Error inputing record: " . $conn->error;
     $message = 'กรุณาตรวจสอบข้อมูล อีกรอบ';
     echo "<SCRIPT type='text/javascript'> //not showing me this
       alert('$message');
       window.location.replace(\".php\");
       </SCRIPT>";
  }
  
  
  
   ?>










