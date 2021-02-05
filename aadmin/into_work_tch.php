<?php
include('header.php');
echo "\n";
$TCH_ID= $_REQUEST['txttchid'];
$date = date('Y-m-d'); //เป็นการบันทึกวันที่ อัตโนมัติ ของ php

$status = 1;
$sql2 = "SELECT * FROM worktimedrv WHERE TCH_ID = '$TCH_ID'";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
  while($row2 = $result2->fetch_assoc()) {
    if($date==$row2['date']){
     $status = 0;
     break;
    }else {
         $status = 1;
    }
}
} else {
//echo "0 results";
}

//echo "status:".$status."<br>date:".$date;
if($status == 1 ){
  //echo "dont have";
$sql = "INSERT INTO worktimedrv(TCH_ID,date)
VALUES ('$TCH_ID', '$date')";
if ($conn->query($sql) === TRUE) {
     //echo "New record created successfully";
      //header('Location:show_workTime.php');
    
      $message = 'submit successfully';
      echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('$message');
        window.location.replace(\"table_work_tch.php\");
        </SCRIPT>";


    // '
    // <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    // <script src="../../vendor/jquery-3.2.1.min.js"></script>
    // <script type="text/javascript">
    // $(document).ready(function(){
    // console.log("gg backend");
    //     swal({
    //       title: "แจ้งเตือน!",
    //       text: "บันทึกการทำงานสำเร็จ",
    //       icon: "success",
    //   button : {
    //     visible: true,
    //     closeModal: true,
    //   }
    // })
    // .then(() => {
    //   window.location.assign("form_insert_workTime.php")
    // })
    // });
    // </script>
    // ';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}else if($status == 0 ){
  

  echo "Error inputing record: " . $conn->error;
  $message = 'รหัสผู้ใช้งานนี้ นี้ได้ถูกใช้งานเเล้ว';
  echo "<SCRIPT type='text/javascript'> //not showing me this
    alert('$message');
    window.location.replace(\"form_woketime_tch.php\");
    </SCRIPT>";

//   '
//   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
//   <script src="../../vendor/jquery-3.2.1.min.js"></script>
//   <script type="text/javascript">
//   $(document).ready(function(){
//   console.log("gg backend");
//       swal({
//         title: "แจ้งเตือน!",
//         text: "สมาชิกได้ทำการเช็คชื่อเเล้ว วันนี้",
//         icon: "warning",
//     button : {
//       visible: true,
//       closeModal: true,
//     }
//   })
//   .then(() => {
//     window.location.assign("form_insert_workTime.php")
//   })
//   });
//   </script>
//   ';
  //header( "refresh:3;url=../sale/form_insert_sale.php" );


}

?>