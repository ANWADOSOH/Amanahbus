
<?php
session_start();
include('header.php');
$User = $_REQUEST['user'];
$passwd = $_REQUEST['pass'];

$sql = "SELECT * FROM driver where DRV_ID = '$User' and ID_NUMBER='$passwd'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "first name :" . $row["Fname"]. " last name: " . $row["Lname"]. " user :" . $row["user"]. "<br>";
        $_SESSION["DRV_ID"] = $User;
        $_SESSION["pas"] = $passwd;
       
     	echo "<script type='text/javascript'>";
		echo "alert('ยินดีตอนรับเข้าสู่ระบบ');";
		echo "window.location='../driver/user_home2.php';";
		echo "</script>";
		echo "<script>";
    }
} else {
	 echo "<script>";
     echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
     echo "window.history.back()";
     echo "</script>";
    //echo "0 results";
}

 ?>