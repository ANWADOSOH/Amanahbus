<?php

  include('user_header1.php'); //เชื่อม Data Base

  $STATUS=$_REQUEST['status'];
  $STD_ID=$_REQUEST['STD_ID'];
  $DAY=date("Y-m-d");
  date_default_timezone_set('Asia/Bangkok');

$number = $_REQUEST['id'];
if($number > 0)
    {
        for($i=0; $i<$number; $i++)
        {
            
            if(trim($_POST["id"][$i]) != '')
            {

              $sql1 = "INSERT INTO updown
              (
                STD_ID,DAY,STATUS
              ) 
          VALUES (
                  '".mysqli_real_escape_string($conn, $_POST["STD_ID"][$i])."',
                  '".mysqli_real_escape_string($conn, $_POST["DAY"])."',
                  '".mysqli_real_escape_string($conn, $_POST["status"][$i])."'
              )";
  mysqli_query($conn, $sql1); 

                }
            }
            echo 'Data Inserted';
            // header( "location: booking_show.php" );
          }
          else
          {
              echo "Enter erre";
          }
    ?>
















