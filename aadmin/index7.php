<?php

$menu = "index5";

?>


<?php include("header.php"); $sql = "SELECT * FROM students";
$result = $conn->query($sql);?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">



      
      <br>
      <br>
      <center>  <h1>ข้อมูลทางการเงิน</h1></center>
      </div><!-- /.container-fluid -->

      <a  class="btn btn-info btn-sm" onclick="location.href ='index5.php?';">
        <i > <<-back
        </i></a>
    </section>

    <!-- Main content -->
    <section class="content">

          <div class="card">
            <div class="card-body p-1">
             <div class="row">
                
                  
                
</div>
                                                                                                 
                                            
<li class="nav-header">MENU</li>    
<font color="#F8F8FF" size="5">    

          <li class="nav-item">
            <a href="table_tch_slr.php" >
              >>> เงินเดือนครูประจำรถ
            </a>
          </li>

          <li class="nav-item">
            <a href="table_driver_slr.php" >
              >>> เงินเดือนคนขับรถ
            </a>
          </li>

          <li class="nav-item">
            <a href="monny_tch.php" >
              >>> ตารางเเสดงค่าตอบเเทนครูประจำรถ
            </a>
          </li>
          <li class="nav-item">
            <a href="monny_drv.php" >
              >>> ตารางเเสดงค่าตอบเเทนคนขับรถ
            </a>
          </li>

          
          </font>
         


        </div>
        <!-- /.col -->
      </div>

      

    </section>
    <!-- /.content -->

    
<?php include('footer.php'); ?>

<script>
  $(function () {
    $(".datatable").DataTable();
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    // http://fordev22.com/
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    // });
  });
</script>
  
</body>
</html>
