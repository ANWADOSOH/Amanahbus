<!-- http://fordev22.com/ -->
<?php include ("head.php"); ?>


<?php $servername = "localhost";
$username = "root";
$password = "";
$dbname = "amanahbus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
   echo ". "; 
}  ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed text-sm">
<!-- Site wrapper -->
<div class="wrapper">
  
  
  <?php include ("homenavbar.php"); ?>
  <?php include ("homesidebar.php"); ?>

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">